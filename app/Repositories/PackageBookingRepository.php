<?php

namespace App\Repositories;

use App\Models\PackageBookings;
use App\Models\PackageBookingDetails;
use App\Models\ViewPackages;
use DB;

class PackageBookingRepository
{
    public function getAll()
    {
        return PackageBookings::simplePaginate(6)->withQueryString();
    }

    public function getById($id)
    {
        return PackageBookings::findOrFail($id);
    }

    public function getByCode($code)
    {
        return PackageBookings::where('booking_code','=',$code)->with('viewPackage')->with('bookingDetail')->first();
    }

    public function getDetailByPackageBookingId($id)
    {
        return PackageBookingDetails::where('package_booking_id','=',$id)->where('is_leader','=',true)->first();
    }

    public function getDetailByPhoneNumber($phoneNumber)
    {
        return PackageBookingDetails::where('phone_number','=',$phoneNumber)->with('viewPackage')->with('booking')->get();
    }

    public function getBookingByPhoneNumber($phoneNumber)
    {
        return PackageBookings::with('bookingDetail')->with('viewPackage')->whereRelation('bookingDetail','phone_number','=',$phoneNumber)->get();
    }

    public function getDetailByNikNumber($nikNumber)
    {
        return PackageBookingDetails::where('nik_number','=',$nikNumber)->with('booking')->get();
    }

    public function getAllDetailByPackageBookingId($id)
    {
        return PackageBookingDetails::where('package_booking_id','=',$id)->get();
    }

    public function store($data){

        try{
            DB::beginTransaction();

            $packageDetailId = $data['package_detail_id'];

            $viewPackage = ViewPackages::where('branch_package_detail_id','=',$packageDetailId)->firstOrFail();


            $booking = new PackageBookings();
            $booking->booking_code = @createBooking();
            $booking->master_room_id = $viewPackage->master_room_id;
            $booking->basic_package_id = $viewPackage->basic_package_id;
            $booking->branch_package_detail_id = $packageDetailId;
            $booking->booking_quota = $viewPackage->master_room_value;
            $booking->save();

            foreach ($data['data'] as $item){
                $bookingDetail = new PackageBookingDetails();
                $bookingDetail->first_name = $item['first_name'];
                $bookingDetail->last_name = $item['last_name'];
                $bookingDetail->gender = $item['gender'];
                $bookingDetail->nik_number = $item['nik_number'];
                $bookingDetail->phone_number = $item['phone_number'];
                $bookingDetail->relation_type = $item['relation_type'];
                $bookingDetail->is_leader = @$item['is_lead'] == 'true' ? true : false;
                $bookingDetail->package_booking_id = @$booking->id;
                $bookingDetail->save();
            }

            DB::commit();

            return $booking;

        }catch (\Exceptions $e){
            DB::rollBack();

            \Log::error($e->getMessage());

            return null;
        }

    }
}
