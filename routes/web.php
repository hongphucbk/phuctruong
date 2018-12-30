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
Route::get('admin','UserController@get_Login_Admin');
Route::get('admin/login','UserController@get_Login_Admin');
Route::post('admin/login','UserController@post_Login_Admin');
Route::get('admin/logout','UserController@get_Logout_Admin');


//Admin pages
Route::group(['prefix' => 'admin','middleware' => 'adminLogin'], function() {

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

        Route::get('export','UserController@get_Export_Admin' );
    });

    Route::group(['prefix' => 'role'], function() {
        Route::get('/','RoleController@get_List_Admin');

        Route::get('add','RoleController@get_Add_Admin');
        Route::post('add','RoleController@post_Add_Admin');

        Route::get('edit/{id}','RoleController@get_Edit_Admin');
        Route::post('edit/{id}','RoleController@post_Edit_Admin');

        Route::get('delete/{id}','RoleController@get_Delete_Admin');
    });

    Route::group(['prefix' => 'user-role'], function() {
        Route::get('/','UserRoleController@get_List_Admin');

        Route::get('add','UserRoleController@get_Add_Admin');
        Route::post('add','UserRoleController@post_Add_Admin');

        Route::get('edit/{id}','UserRoleController@get_Edit_Admin');
        Route::post('edit/{id}','UserRoleController@post_Edit_Admin');

        Route::get('delete/{id}','UserRoleController@get_Delete_Admin');
    });

    Route::group(['prefix' => 'app'], function() {
        Route::group(['prefix' => 'helpdesk'], function() {
            Route::get('/','HelpdeskController@get_List_Admin');

            Route::get('edit/{id}','HelpdeskController@get_Edit_Admin');
            Route::post('edit/{id}','HelpdeskController@post_Edit_Admin');
        });

        Route::group(['prefix' => 'category'], function() {
            Route::get('/','HelpdeskCategoryController@get_List_Admin');

            Route::get('add','HelpdeskCategoryController@get_Add_Admin');
            Route::post('add','HelpdeskCategoryController@post_Add_Admin');

            Route::get('edit/{id}','HelpdeskCategoryController@get_Edit_Admin');
            Route::post('edit/{id}','HelpdeskCategoryController@post_Edit_Admin');

            Route::get('delete/{id}','HelpdeskCategoryController@get_Delete_Admin');
        });

        Route::group(['prefix' => 'course'], function() {
            Route::group(['prefix' => 'category'], function() {
                Route::get('/','Course\CategoryController@get_List');

                Route::get('add','Course\CategoryController@get_Add');
                Route::post('add','Course\CategoryController@post_Add');

                Route::get('edit/{id}','Course\CategoryController@get_Edit');
                Route::post('edit/{id}','Course\CategoryController@post_Edit');

                Route::get('delete/{id}','Course\CategoryController@get_Delete');
            });

            Route::group(['prefix' => 'info'], function() {
                Route::get('/','Course\Admin\InfoController@get_List');

                Route::get('add','Course\Admin\InfoController@get_Add');
                Route::post('add','Course\Admin\InfoController@post_Add');

                Route::get('edit/{id}','Course\Admin\InfoController@get_Edit');
                Route::post('edit/{id}','Course\Admin\InfoController@post_Edit');

                Route::get('delete/{id}','Course\Admin\InfoController@get_Delete');
            });
            
        });

    });

});

//Member pages
Route::group(['prefix' => 'member'], function() {
    Route::group(['prefix' => 'app'], function() {
        Route::group(['prefix' => 'helpdesk'], function() {
            Route::get('/','MemberHelpdeskController@get_List');

            Route::post('add','MemberHelpdeskController@post_Add');

            Route::get('detail/{id}','MemberHelpdeskController@get_Detail');

            Route::get('edit/{id}','MemberHelpdeskController@get_Edit');
            Route::post('edit/{id}','MemberHelpdeskController@post_Edit');
        });

        
    });

});

//Send mail
Route::get('send_email','EmailController@sendEmailReminder');
Route::get('ancom','EmailController@sendEmailAnCom');

//Index Page
Route::get('/','PhucTruongController@get_index' );

//Login pages
Route::get('signup','UserController@get_Signup');
Route::post('signup','UserController@post_Signup');

Route::get('signup/verify/{code}', 'Auth\RegisterController@verify');

Route::get('login','UserController@get_Login')->name('login');
Route::post('login','UserController@post_Login');

Route::get('logout','UserController@get_Logout')->name('logout');

Route::get('password/reset','UserController@get_ResetPassword');
Route::post('password/reset','UserController@post_ResetPassword');

Route::get('password/reset/{token}','UserController@get_NewPassword');
Route::post('password/reset/{token}','UserController@post_NewPassword');

//webserver
Route::group(['prefix' => 'webserver'], function() {
    Route::group(['prefix' => 's71200'], function() {
        Route::get('/','WebserverController@get_Page_S71200');

        // Route::get('add','UserGroupController@get_Add_Admin');
        // Route::post('add','UserGroupController@post_Add_Admin');

        // Route::get('edit/{id}','UserGroupController@get_Edit_Admin');
        // Route::post('edit/{id}','UserGroupController@post_Edit_Admin');

        // Route::get('delete/{id}','UserGroupController@get_Delete_Admin');
    });


});

Route::get('/home', 'HomeController@index')->name('home');
