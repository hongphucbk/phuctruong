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
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    //Route::get('/','UserController@get_User_List_Admin');

	Route::group(['prefix' => 'user-group'], function() {
        Route::get('/','UserGroupController@get_List_Admin');

        Route::get('/add','UserGroupController@get_Add_Admin');
        Route::post('/add','UserGroupController@post_Add_Admin');
    });

    Route::group(['prefix' => 'user'], function() {
        Route::get('/','UserController@get_User_List_Admin');
    });

});