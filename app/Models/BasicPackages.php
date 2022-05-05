<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicPackages extends Model
{
    use HasFactory;

    protected $table = 'basic_packages';

    public function branchPackage()
    {
        return $this->hasMany(BranchPackages::class,'basic_package_id');
    }
}
