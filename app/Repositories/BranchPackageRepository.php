<?php

namespace App\Repositories;

use App\Models\BranchPackages;

class BranchPackageRepository
{
    public function branchPackagesAll()
    {
        return BranchPackages::All();
    }

    public function branchPackagesFindById($id)
    {
        return BranchPackages::findOrFail($id);
    }
}
