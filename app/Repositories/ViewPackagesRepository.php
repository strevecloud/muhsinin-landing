<?php

namespace App\Repositories;

use App\Models\ViewPackages;
use \Carbon\Carbon;

class ViewPackagesRepository
{
    public function getAllIndex()
    {
        return ViewPackages::with('offering.offeringHotel')->distinct('branch_package_id')->simplePaginate(9)->withQueryString();
    }

    public function getAll()
    {
        return ViewPackages::with('offering.offeringHotel')->simplePaginate(6)->withQueryString();
    }

    public function getAllByRequest($request)
    {
        $data = ViewPackages::with('offering.offeringHotel');

        if($request->input('brc')){
            $data = $data->where('branch_package_id','=',$request->input('brc'));
        }
        $data = $data->orderBy('master_room_value');
        $data = $data->simplePaginate(6)->withQueryString();


        return $data;
    }

    public function getById($id)
    {
        return ViewPackages::findOrFail($id);
    }

    public function getByBranchPackageDetailId($id)
    {
        return ViewPackages::where('branch_package_detail_id','=',$id)->firstOrFail();
    }

    public function filterSearch($request){

        $month = 0;
        $year = 0;
        if($request->input('departure_date')){
            $departureDate = explode('-',$request->input('departure_date'));
            $month = $departureDate[0];
            $year = $departureDate[1];
        }
        $dateNow = Carbon::now();
        $query = ViewPackages::with('offering.offeringHotel')->where('master_office_id','=',$request->input('city_branch'));
        if($request->input('room_type')){
            $query->where('master_room_id','=',$request->input('room_type'));
        }
        if($month > 0){
            $query->whereMonth('basic_package_depature_date','=',$month);
            $query->whereYear('basic_package_depature_date','=',$year);
        }

        if($request->input('brc')){
            $query->where('branch_package_id','=',$request->input('brc'));
        }
        $query->select('*');
        $query->orderBy('master_room_value');
//        dd($query->toSql());
//            ->whereBetween('basic_package_depature_date',[ $request->input('departure_date'), $request->input('departure_date')])
        $query->simplePaginate(6)->withQueryString();

        return $query;
    }

    public function filterSearchIndex($request){

        $month = 0;
        $year = 0;
        if($request->input('departure_date')){
            $departureDate = explode('-',$request->input('departure_date'));
            $month = $departureDate[0];
            $year = $departureDate[1];
        }
        $dateNow = Carbon::now();
        $query = ViewPackages::with('offering.offeringHotel')->where('master_office_id','=',$request->input('city_branch'));
        if($request->input('room_type')){
            $query = $query->where('master_room_id','=',$request->input('room_type'));
        }
        if($month > 0){
            $query = $query->whereMonth('basic_package_depature_date','=',$month);
            $query = $query->whereYear('basic_package_depature_date','=',$year);
        }
        if($request->input('brc')){
            $query = $query->where('branch_package_id','=',$request->input('brc'));
        }
        $query = $query->select('*')->distinct('branch_package_id');
//        dd($query->toSql());
//            ->whereBetween('basic_package_depature_date',[ $request->input('departure_date'), $request->input('departure_date')])
        $query = $query->simplePaginate(9)->withQueryString();

        return $query;
    }
}
