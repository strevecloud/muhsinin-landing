<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterHotels extends Model
{
    use HasFactory;

    protected $table = 'master_hotels';

    public function offeringVendorHotels()
    {
        return $this->hasMany(OfferingVendorHotels::class,'hotel_id');
    }
}
