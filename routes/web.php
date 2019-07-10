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

Route::get('/', function () {
    return view('auth.login');

})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/manageuser', 'ManageUserController@index')->name('manageuser');
Route::get('/manageschool', 'ManageSchoolController@index')->name('manageschool');
Route::get('/manageuserinfo', 'ManageUserInfoController@index')->name('manageschool');

