<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;

    protected $table = 'payments';

    public function history()
    {
        return $this->hasMany(PaymentHistories::class,'payment_id');
    }

    public function booking()
    {
        return $this->belongsTo(PackageBookings::class,'booking_id');
    }
}
