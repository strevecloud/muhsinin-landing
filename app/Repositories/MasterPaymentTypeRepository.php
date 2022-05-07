<?php

namespace App\Repositories;

use App\Models\MasterPaymentType;

class MasterPaymentTypeRepository
{
    public function masterPaymentTypeAll()
    {
        return MasterPaymentType::where('is_active','=',true)->get();
    }

    public function masterPaymentTypeFindById($id)
    {
        return MasterPaymentType::where('is_active','=',true)->where('id','=',$id)->firstOrFail();
    }
}
