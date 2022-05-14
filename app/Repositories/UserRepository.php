<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function userFindByInternalCode($code)
    {
        return User::where('internal_code','=', $code)->first();
    }
}
