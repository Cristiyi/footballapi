<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Dingo\Api\Routing\Helpers;
use App\Http\Controllers\CommonControll;
use App\Models\League;

class LeagueController extends CommonControll
{

    public function getAll() {
        $all = League::getAll();
        return self::define_return($all);
    }

}
