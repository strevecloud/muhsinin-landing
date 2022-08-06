<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\MasterRoomRepository;
use App\Repositories\MasterOfficeRepository;
use App\Repositories\ViewPackagesRepository;
use App\Repositories\BranchPackageRepository;
use App\Repositories\BranchPackageItineraryRepository;
use Illuminate\Pagination\LengthAwarePaginator;

class PackageController extends Controller
{

    protected $roomRepository,$officeRepository,$packageDetailRepository,$viewPackagesRepository,$branchPackageRepository,$branchPackageItineraryRepository;
    public function __construct()
    {
        $this->roomRepository = new MasterRoomRepository();
        $this->officeRepository = new MasterOfficeRepository();
        $this->viewPackagesRepository = new ViewPackagesRepository();
        $this->branchPackageRepository = new BranchPackageRepository();
        $this->branchPackageItineraryRepository = new BranchPackageItineraryRepository();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $packages = null;

        if($request->exists('city_branch')){
            $packages = $this->viewPackagesRepository->filterSearch($request)->simplePaginate(6)->withQueryString();

        }else{
            $packages = $this->viewPackagesRepository->getAllByRequest($request);
        }
        if(count($packages) == 0){
            return view('errors.404');
        }

        $rooms = $this->roomRepository->masterRoomAll();
        $offices = $this->officeRepository->masterOfficeAll();

        return view('frontend/package_detail', compact('packages','rooms','offices'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $package = $this->viewPackagesRepository->getByBranchPackageDetailId($id);
        $itinerary = $this->branchPackageRepository->branchPackageByDetailId($id);
        return view('frontend/package_detail', compact('package','itinerary'));
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
