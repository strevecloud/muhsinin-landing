<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function userFindByInternalCode($code)
    {
        return User::where('internal_code','=', $code)->where('is_active','=',true)->first();
    }

    public function userFindById($id)
    {
        return User::where('id','=', $id)->where('is_active','=',true)
            ->select(['id','phone_number','email','name','internal_code'])
            ->first();
    }
}
