<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentHistories extends Model
{
    use HasFactory;

    protected $table = 'payment_histories';

    public function payment()
    {
        return $this->belongsTo(Payments::class,'payment_id');
    }
}
