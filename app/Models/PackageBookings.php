<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageBookings extends Model
{
    use HasFactory;

    protected $table = 'package_bookings';


    public function bookingDetail()
    {
        return $this->hasMany(PackageBookingDetails::class,'package_booking_id');
    }

    public function viewPackage(){
        return $this->belongsTo(ViewPackages::class,'branch_package_detail_id','branch_package_detail_id');
    }

}
