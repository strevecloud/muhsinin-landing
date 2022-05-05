<?php

namespace App\Repositories;

use App\Models\MasterOffices;

class MasterOfficeRepository
{
    public function masterOfficeAll()
    {
        return MasterOffices::All();
    }

    public function masterOfficeFindById($id)
    {
        return MasterOffices::findOrFail($id);
    }
}
