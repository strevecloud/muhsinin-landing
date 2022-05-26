<?php

namespace App\Repositories;

use App\Models\BranchPackages;
use App\Models\BranchPackageDetails;
use App\Repositories\BranchPackageItineraryRepository;

class BranchPackageRepository
{
    public function branchPackagesAll()
    {
        return BranchPackages::All();
    }

    public function branchPackagesFindById($id)
    {
        return BranchPackages::with('itinerary')->where('id', $id)->first();
    }

    public function branchPackageByDetailId($id)
    {
        $data = BranchPackageDetails::with('branchPackage')->where('id', $id)->first();

        $dataItinerary = null;

        if(@$data->branchPackage->itenary_id){
            $itineraryId = @$data->branchPackage->itenary_id;
            $itinerary = new BranchPackageItineraryRepository();
            $dataItinerary = $itinerary->branchPackageItineraryById($itineraryId);
        }

        return $dataItinerary;
    }
}
