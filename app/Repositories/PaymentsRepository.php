<?php

namespace App\Repositories;

use App\Models\PackageBookings;
use App\Models\Payments;
use App\Models\PaymentHistories;
use DB;


class PaymentsRepository
{
    public function findByBookingByCode($code)
    {
        return PackageBookings::with('payment.history')->where('booking_code',$code)->firstOrFail();
    }

    public function store($data)
    {
        try {
            DB::beginTransaction();

            $booking = PackageBookings::where('booking_code','=',$data['code'])->first();

            $payment = Payments::where('booking_id','=',$booking->id)->first();

            if(!$payment){
                $payment = new Payments();
                $payment->booking_id = $booking->id;
                $payment->in_amount = 0;
                $payment->out_amount = 0;
                $payment->save();
            }

            $path = $this->sendUploadFile($data['data']);

            $history = new PaymentHistories();
            $history->payment_id = $payment->id;
            $history->image_url = $path;
            $history->user_note = @$data['note'];
            $history->status = 'NEED_APPROVED';
            $history->save();

            DB::commit();

            return getImageUrl($path);
        }catch (\Exceptions $e){
            DB::rollBack();

            \Log::error($e->getMessage());

            return null;
        }
    }


    public function sendUploadFile($file){

        $payload = [];
        $payload['image'] = $file;
        $payload['bucket'] = 'payment';


        $pathLocation = null;
        $client = new \GuzzleHttp\Client();
        $url = env('API_UPLOAD_BASE_URL')."/api/v1/public/upload-image";
        $response = $client->request('POST', $url, [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
            'json' => $payload
        ]);
        $jsonData = $response->getBody()->getContents();

        $arraydata = (array)json_decode($jsonData);

        if($arraydata['status_code'] == '200'){
            $pathLocation = $arraydata['data']->path;
        }


        return $pathLocation;
    }
}
