<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageBookingDetails extends Model
{
    use HasFactory;

    protected $table = 'package_booking_details';

    public function booking()
    {
        return $this->belongsTo(PackageBookings::class,'package_booking_id');
    }

}
