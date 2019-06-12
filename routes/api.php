<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    $user = $request->user();
    $x = $user->id;
    $data= DB::table('users')->where('id',$user->id)->get();

    return response()->json($data);
});

Route::middleware('auth:api')->get('/data', function (Request $request) {
    $user = $request->user();
    $x = $user->id;
    $data= DB::table('users')->get();
    return response()->json($data);
});



Route::post('register', 'Api\RegisterController@register');
