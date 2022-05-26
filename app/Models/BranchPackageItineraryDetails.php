<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchPackageItineraryDetails extends Model
{
    use HasFactory;

    protected $table = 'branch_package_itenary_details';

    public function itinerary()
    {
        return $this->belongsTo(BranchPackageItineraries::class,'itenary_id');
    }

}
