<?php

namespace App\Repositories;

use App\Models\ViewPackages;
use \Carbon\Carbon;

class ViewPackagesRepository
{
    public function getAll()
    {
        return ViewPackages::with('offering.offeringHotel')->simplePaginate(6)->withQueryString();
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
        $query->where('master_room_id','=',$request->input('room_type'));
        if($month > 0){
            $query->whereMonth('basic_package_depature_date','=',$month);
            $query->whereYear('basic_package_depature_date','=',$year);
        }
        $query->select('*');
//        dd($query->toSql());
//            ->whereBetween('basic_package_depature_date',[ $request->input('departure_date'), $request->input('departure_date')])
        $query->simplePaginate(6)->withQueryString();

        return $query;
    }
}
