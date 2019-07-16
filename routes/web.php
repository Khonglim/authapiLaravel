<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
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



Auth::routes();

//Route for normal user
//Route for normal user
Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index');
});
//Route for admin
Route::group(['prefix' => 'adminmaster'], function(){
    Route::group(['middleware' => ['admin']], function(){
        Route::get('/dashboard', 'admin\AdminController@index');
        Route::get('/profile', 'admin\AdminController@profile');
        Route::get('/user', 'admin\AdminController@user');
        Route::get('/school', 'admin\AdminController@school');
        Route::get('/addschool/{id}', 'admin\AdminController@detlieschool' );
        Route::get('/editstu/{id}', 'admin\AdminController@editstudent' );
        Route::get('/editstc/{id}', 'admin\AdminController@editstc' );
        Route::get('/dlestudent', 'admin\AdminController@dlestudent' );
        Route::get('/addschool', 'admin\AdminController@detlieschool' );
        Route::get('/dlestc', 'admin\AdminController@dletc' );
        Route::get('/resetpass', 'admin\AdminController@resetpass' );

        Route::post('/adduser', 'admin\AdminController@adduser' );
        Route::post('/addschool', 'admin\AdminController@addschool' );
        Route::post('/saveeditstudent', 'admin\AdminController@saveeditstudent' );
        Route::post('/saveedittc', 'admin\AdminController@saveedittc' );



    });

});


Route::post('/parent', 'admin\AdminController@parent' );
Route::post('/addtc', 'admin\AdminController@addtc' );
Route::post('/dataschool/{id}', 'admin\AdminController@detlieschoolData' )->name('dataschool');
Route::post('/showTeacher/{id}', 'admin\AdminController@showTeacher' );
Route::post('/showParent/{id}', 'admin\AdminController@showParent' );












//Route for admin
Route::group(['prefix' => 'adminschool'], function(){
    Route::group(['middleware' => ['admin']], function(){
        Route::get('/dashboard', 'admin\AdminController@admindashboard');
        Route::get('/profile', 'admin\AdminController@adminprofile');
        Route::get('/school', 'admin\AdminController@adminschool');
    });

});











