<?php

namespace App\Repositories;

use App\Models\BranchPackageItineraries;

class BranchPackageItineraryRepository
{
    public function branchPackageItineraryById($id)
    {
        return BranchPackageItineraries::with('detail')->where('id','=',$id)->first();
    }
}
