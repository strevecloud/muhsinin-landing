<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchPackages extends Model
{
    use HasFactory;

    protected $table = 'branch_packages';


    public function office()
    {
        return $this->belongsTo(MasterOffices::class,'office_id');
    }

    public function packageDetail()
    {
        return $this->hasMany(BranchPackageDetails::class,'branch_package_id');
    }

    public function basicPackage()
    {
        return $this->belongsTo(BasicPackages::class,'basic_package_id');
    }
}
