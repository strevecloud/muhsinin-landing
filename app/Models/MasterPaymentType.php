<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterPaymentType extends Model
{
    use HasFactory;

    protected $table = 'master_payment_types';

    public function booking()
    {
        return $this->hasMany(PackageBookings::class,'payment_type_id');
    }
}
