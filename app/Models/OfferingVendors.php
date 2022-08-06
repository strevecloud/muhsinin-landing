<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferingVendors extends Model
{
    use HasFactory;

    protected $table = 'offering_vendors';

    public function viewPackage()
    {
        return $this->hasMany(ViewPackages::class,'offering_vendor_id','ID');
    }

    public function viewPackageAll()
    {
        return $this->hasMany(ViewPackageAll::class,'offering_vendor_id','ID');
    }

    public function offeringHotel()
    {
        return $this->hasMany(OfferingVendorHotels::class,'offering_vendor_id');
    }
}
