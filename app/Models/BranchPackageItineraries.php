<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchPackageItineraries extends Model
{
    use HasFactory;

    protected $table = 'branch_package_itenaries';

    public function detail()
    {
        return $this->hasMany(BranchPackageItineraryDetails::class,'itenary_id');
    }

}
