<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\MasterRoomRepository;
use App\Repositories\MasterOfficeRepository;
use App\Repositories\ViewPackagesRepository;
use App\Repositories\PackageBookingRepository;
use App\Repositories\MasterPaymentTypeRepository;
use App\Repositories\PaymentsRepository;
use App\Repositories\UserRepository;
use App\Repositories\BranchPackageRepository;
use Response;
use App\Events\GeneratePdf;

class BookingController extends Controller
{
    protected $roomRepository;
    protected $officeRepository;
    protected $packageDetailRepository;
    protected $viewPackagesRepository;
    protected $packageBookingRepository;
    protected $paymentTypeRepository;
    protected $paymentRepository;
    protected $userRepository;
    protected $branchPackageRepository;


    public function __construct()
    {
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend/booking');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id,Request $request)
    {
        $booking = $this->packageBookingRepository->store($request->all());

        return redirect()->route('booking.detail', $booking->booking_code);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paymentTypes = $this->paymentTypeRepository->masterPaymentTypeAll();
        $package = $this->viewPackagesRepository->getByBranchPackageDetailId($id);
        $itinerary = $this->branchPackageRepository->branchPackageByDetailId($id);
        return view('frontend/booking', compact('package','paymentTypes','itinerary'));
    }

    public function detail($code){

        $helpPhone = null;
        $booking = $this->packageBookingRepository->getByCode($code);
        $bookingDetail = $this->packageBookingRepository->getDetailByPackageBookingId($booking->id);
        $package = $this->viewPackagesRepository->getByBranchPackageDetailId($booking->branch_package_detail_id);
        if($booking->agent_id){
            $helpPhone = $this->userRepository->userFindById($booking->agent_id)->phone_number;
        }else{
            $helpPhone = $package->master_office_phone;
        }
        $payment = $this->paymentRepository->findByBookingByCode($code);

        return view('frontend/booking_detail', compact('booking','bookingDetail','package','payment','helpPhone'));
    }

    public function info($code){
        $booking = $this->packageBookingRepository->getByCode($code);
        $bookingDetails = $this->packageBookingRepository->getAllDetailByPackageBookingId($booking->id);
        $package = $this->viewPackagesRepository->getByBranchPackageDetailId($booking->branch_package_detail_id);
        if($booking->agent_id){
            $helpPhone = $this->userRepository->userFindById($booking->agent_id)->phone_number;
        }else{
            $helpPhone = $package->master_office_phone;
        }
        $itinerary = $this->branchPackageRepository->branchPackageByDetailId($booking->branch_package_detail_id);

        return view('frontend/booking_info', compact('booking','bookingDetails','package','helpPhone','itinerary'));
    }

    public function generatePdfEvent($code,$history){
        $data = [
            'code' => $code,
            'history' => $history
        ];
        event(new GeneratePdf($data));
    }

    public function downloadPdf($id){
        $history = $this->paymentRepository->findPaymentHistoryById($id);

        $file = $history->payment_slip;

//        $headers = array(
//            'Content-Type: application/pdf',
//        );

        return Response::download($file);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
