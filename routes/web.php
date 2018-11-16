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
    //return view('admin.user.list');
});

//Login admin
Route::get('admin/login','UserController@get_Login_Admin');
Route::post('admin/login','UserController@post_Login_Admin');

//Admin pages
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', function(){
    	return view('admin.user.list');
    });

	Route::group(['prefix' => 'user-group'], function() {
        Route::get('/','UserGroupController@get_List_Admin');

        Route::get('add','UserGroupController@get_Add_Admin');
        Route::post('add','UserGroupController@post_Add_Admin');

        Route::get('edit/{id}','UserGroupController@get_Edit_Admin');
        Route::post('edit/{id}','UserGroupController@post_Edit_Admin');

        Route::get('delete/{id}','UserGroupController@get_Delete_Admin');

    });

    Route::group(['prefix' => 'user'], function() {
        Route::get('/','UserController@get_List_Admin');

        Route::get('add','UserController@get_Add_Admin');
        Route::post('add','UserController@post_Add_Admin');

        Route::get('edit/{id}','UserController@get_Edit_Admin');
        Route::post('edit/{id}','UserController@post_Edit_Admin');

        Route::get('delete/{id}','UserController@get_Delete_Admin');
    });

});