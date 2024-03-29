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
    $data= DB::table('student_information')->where('student_code_id',$user->student_code)->get();
    return response()->json($data);
});

Route::middleware('auth:api')->post('/searchdata', function (Request $request) {
    $data = $request->json()->all();
    $user = $request->user();
    $data= DB::table('status_school')->orWhere('term', 'LIKE', '%'.$data['searchTerm'].'%' )->where('student_code','=',$user->student_code)->get();
    return response($data,200)->header('Content-Type', 'application/json');
});

Route::middleware('auth:api')->post('/searchdata2', function (Request $request) {
    $data = $request->json()->all();
    $user = $request->user();
    $data= DB::table('status_school')->where('student_code','=',$user->student_code)->get();
    return response($data,200)->header('Content-Type', 'application/json');
});



Route::middleware('auth:api')->get('/dataTerm', function (Request $request) {
    $user = $request->user();
    $data= DB::table('term')->get();
    return response()->json($data);
});

Route::middleware('auth:api')->get('/dataMonth', function (Request $request) {
    $user = $request->user();
    $data= DB::table('month')->get();
    return response()->json($data);
});

Route::middleware('auth:api')->get('/dataStatus', function (Request $request) {
    $user = $request->user();
    $data= DB::table('status')->get();
    return response()->json($data);
});














Route::post('register', 'Api\RegisterController@register');



