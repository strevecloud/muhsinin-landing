<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Repositories\MasterRoomRepository;
use App\Repositories\MasterOfficeRepository;
use App\Repositories\ViewPackagesRepository;
use App\Repositories\PackageBookingRepository;
use App\Repositories\MasterPaymentTypeRepository;
use App\Repositories\PaymentsRepository;
use App\Repositories\UserRepository;
use App\Repositories\BranchPackageRepository;

class GeneratePdfJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $data;
    protected $roomRepository;
    protected $officeRepository;
    protected $packageDetailRepository;
    protected $viewPackagesRepository;
    protected $packageBookingRepository;
    protected $paymentTypeRepository;
    protected $paymentRepository;
    protected $userRepository;
    protected $branchPackageRepository;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
        $this->roomRepository = new MasterRoomRepository();
        $this->officeRepository = new MasterOfficeRepository();
        $this->viewPackagesRepository = new ViewPackagesRepository();
        $this->packageBookingRepository = new PackageBookingRepository();
        $this->paymentTypeRepository = new MasterPaymentTypeRepository();
        $this->paymentRepository = new PaymentsRepository();
        $this->userRepository = new UserRepository();
        $this->branchPackageRepository = new BranchPackageRepository();
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = $this->data;

        $this->generatePdf($data['code'],$data['history']);
    }


    public function generatePdf($code,$history)
    {
        $booking = $this->packageBookingRepository->getByCode($code);
        $bookingDetail = $this->packageBookingRepository->getDetailByPackageBookingId($booking->id);
        $package = $this->viewPackagesRepository->getByBranchPackageDetailId($booking->branch_package_detail_id);
        $payment = $this->paymentRepository->findByBookingByCode($code);
        $history = $this->paymentRepository->findPaymentHistoryById($history);

        $roomText = "";

        if($package->master_room_value == 4){
            $roomText = '(sekamar ber-empat)';
        }else if($package->master_room_value == 3){
            $roomText = '(sekamar ber-tiga)';
        }else if($package->master_room_value == 2){
            $roomText = '(sekamar ber-dua)';
        }else if($package->master_room_value == 1){
            $roomText = '(sekamar sendiri)';
        }

        $date = @create_date_from_format($history->created_at,'d/m/Y');

        $packageTitle = 'Pilihan Paket '.$package->master_room_name.' '.$roomText;
        $packageName = $package->basic_package_name.' ( '.getDateIndo($package->basic_package_depature_date).' )';
        $fullName = $bookingDetail->first_name.' '.$bookingDetail->last_name;

        $packageNameAndFullName = $packageName. ' an. '.$fullName;

        $file = public_path('pdf-template/sample.docx');
        $phpword = new \PhpOffice\PhpWord\TemplateProcessor($file);
        $phpword->setValue('{booking}',$booking->booking_code);
        $phpword->setValue('{date}',$date);
        $phpword->setValue('{name}',$fullName);
        $phpword->setValue('{phone}',$bookingDetail->phone_number);
        $phpword->setValue('{address}',$booking->billing_address);
        $phpword->setValue('{title}',$packageNameAndFullName);
        $phpword->setValue('{packet}',$packageTitle);
        $phpword->setValue('{payment}',@get_currency($history->amount));
        $phpword->setValue('{total}',@get_currency($history->billing_amount));
        $phpword->setValue('{rest}',@get_currency($history->remaining_amount));


        $folderName = 'result';

        $fileName = $booking->booking_code.'_'.$history->id;

        $pathFolder = public_path($folderName);

        if(!\File::isDirectory($pathFolder)){

            \File::makeDirectory($pathFolder, 0777, true, true);

        }

        $filePath = public_path().'/'.$folderName.'/'.$fileName;

        $phpword->saveAs($filePath.'.docx');

        if(getenv('ENVIRONMENT_OS') == 'OSX'){
            shell_exec('/Applications/LibreOffice.app/Contents/MacOS/soffice --headless --convert-to pdf '.$filePath.'.docx'.' --outdir '.public_path().'/'.$folderName.'/');
        }elseif (getenv('ENVIRONMENT_OS') == 'LINUX'){
            shell_exec('libreoffice7.3 --headless --convert-to pdf '.$filePath.'.docx'.' --outdir '.public_path().'/'.$folderName.'/');
        }

        @unlink(public_path().'/'.$folderName.'/'.$fileName.'.docx');

//        $pathLocation = $this->paymentRepository->sendUploadFile($filePath);

        $data = $this->updateUploadFile($history->id,$filePath.'.pdf');

        return response()->json($data);
    }

    public function updateUploadFile($id, $filename){
        $history = $this->paymentRepository->findPaymentHistoryById($id);
        $history->payment_slip = $filename;
        $history->save();

        return $history;
    }
}
