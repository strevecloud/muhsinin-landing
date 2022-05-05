<?php

namespace App\Repositories;

use App\Models\BranchPackageDetails;

class BranchPackageDetailRepository
{
    public function branchPackageDetailAll()
    {
        return BranchPackageDetails::All();
    }

    public function branchPackageDetailFindById($id)
    {
        return BranchPackageDetails::findOrFail($id);
    }
}
