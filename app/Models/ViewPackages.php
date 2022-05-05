<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewPackages extends Model
{
    use HasFactory;

    protected $table = 'view_packages';

    public function packageBooking(){
        return $this->hasMany(PackageBookings::class,'branch_package_detail_id','branch_package_detail_id');
    }
}
