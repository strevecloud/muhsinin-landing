<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferingVendorHotels extends Model
{
    use HasFactory;

    protected $table = 'offering_vendor_hotels';

    public function hotel()
    {
        return $this->belongsTo(MasterHotels::class,'hotel_id');
    }

    public function offeringVendor()
    {
        return $this->belongsTo(OfferingVendors::class,'offering_vendor_id');
    }
}
