<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchPackageDetails extends Model
{
    use HasFactory;

    protected $table = 'branch_package_details';

    public function branchPackage()
    {
        return $this->belongsTo(BranchPackages::class,'branch_package_id');
    }
}
