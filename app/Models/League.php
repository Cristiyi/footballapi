<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{

    protected $table = 'league';

    public static function getAll() {
        return self::all();
    }

}
