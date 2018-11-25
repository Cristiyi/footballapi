<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->group(['namespace' => 'App\Http\Controllers\Admin'], function ($api) {
        $api -> get('/admin/league/get_all', 'LeagueController@getAll');

    });
});
