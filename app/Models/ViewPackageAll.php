<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewPackageAll extends Model
{
    use HasFactory;

    protected $table = 'view_package_all';

    public function packageBooking(){
        return $this->hasMany(PackageBookings::class,'branch_package_detail_id','branch_package_detail_id');
    }

    public function offering(){
        return $this->belongsTo(OfferingVendors::class,'offering_vendor_id');
    }
}
