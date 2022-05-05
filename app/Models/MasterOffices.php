<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterOffices extends Model
{
    use HasFactory;

    protected $table = 'master_offices';

    public function branchPackage()
    {
        return $this->hasOne(BranchPackages::class,'office_id');
    }
}
