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

    $data= DB::table('student_info')->where('student_code',$user->student_code)->get();

    return response()->json($data);
});

Route::middleware('auth:api')->post('/searchdata', function (Request $request) {
    $data = $request->json()->all();
    $user = $request->user();

        $data= DB::table('status_school')->orWhere('date', 'LIKE', '%'.$data['searchdata'].'%' )->where('id_user','=',$user->id)->get();
        return response($data,200)->header('Content-Type', 'application/json');
});



Route::post('register', 'Api\RegisterController@register');



