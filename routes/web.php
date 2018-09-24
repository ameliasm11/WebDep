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

Auth::routes();

 Route::group(['/', 'namespace' => 'SuperAdmin'], function(){
	// Route::get('home', 'HomeController@index')->name('home');
	Route::get('home', 'SystemController@index')->name('home');

	Route::group(['namespace' => 'Auth'], function () {
		Route::get('login', 'LoginController@showLogin')->name('superadmin.showlogin');
		Route::post('login', 'LoginController@doLogin')->name('superadmin.login');
		Route::get('logout', 'LoginController@logout')->name('superadmin.logout');
	});

	//MENAMPILKAN MODULE  DAN MENU
	//MENAMPILKAN KONTEN

	Route::group(['namespace' => 'Crud'], function () {
    //ROLE MANAGEMENT
		Route::get('role', 'RoleManagementController@index')->name('superadmin.role.index');
		Route::get('role/newrole', 'RoleManagementController@create')->name('superadmin.role.tambahdata');
		Route::post('role/newrole', 'RoleManagementController@save')->name('superadmin.role.save');
    Route::get('role-update/{$id}', 'RoleManagementController@edit')->name('superadmin.role.edit');
    Route::post('role/newrole/{$id}', 'RoleManagementController@destroy')->name('superadmin.role.delete');

    //USER WEB MANAGEMENT
		Route::get('user', 'ControllerUser@data')->name('superadmin.user.data');
	  Route::get('user/newuser', 'ControllerUser@tambah')->name('superadmin.user.tambah');

    //PRODUCT CATEGORY

    //Product
    //Futsal
    Route::get('product-futsal', 'FutsalController@index')->name('superadmin.futsal.index');
	});


// Route::group(['namespace'=> 'Crud'], function(){
});
 // });
