<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\MasterRoomRepository;
use App\Repositories\MasterOfficeRepository;
use App\Repositories\ViewPackagesRepository;
use Illuminate\Pagination\LengthAwarePaginator;

class PackageController extends Controller
{

    protected $roomRepository,$officeRepository,$packageDetailRepository,$viewPackagesRepository;
    public function __construct()
    {
        $this->roomRepository = new MasterRoomRepository();
        $this->officeRepository = new MasterOfficeRepository();
        $this->viewPackagesRepository = new ViewPackagesRepository();
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
            $packages = $this->viewPackagesRepository->getAll();
        }

        $rooms = $this->roomRepository->masterRoomAll();
        $offices = $this->officeRepository->masterOfficeAll();

        return view('frontend/package', compact('packages','rooms','offices'));
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
        return view('frontend/package_detail', compact('package'));
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
