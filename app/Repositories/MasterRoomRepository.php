<?php

namespace App\Repositories;

use App\Models\MasterRooms;

class MasterRoomRepository
{
    public function masterRoomAll()
    {
        return MasterRooms::All();
    }

    public function masterRoomFindById($id)
    {
        return MasterRooms::findOrFail($id);
    }
}
