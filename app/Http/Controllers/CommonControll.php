<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dingo\Api\Routing\Helpers;

class CommonControll extends Controller
{

    use Helpers;

    /*
    * params1 Array $data
      return Array
    */
    public static function define_return($data = []) {

        if($data) {
            $status = 1;
        } else {
            $status = 0;
        }
        return ['status'=>$status, 'data'=>$data];

    }

}
