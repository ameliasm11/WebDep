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
  Route::get('order', 'OrderController@order')->name('order');
  Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');

	Route::group(['namespace' => 'Auth'], function () {
		Route::get('login', 'LoginController@showLogin')->name('superadmin.showlogin');
		Route::post('login', 'LoginController@doLogin')->name('superadmin.login');
		Route::get('logout', 'LoginController@logout')->name('superadmin.logout');
	});

	//MENAMPILKAN KONTEN

	Route::group(['namespace' => 'Crud'], function () {
    //ROLE MANAGEMENT
		Route::get('role', 'RoleManagementController@index')->name('superadmin.role.index');
		Route::get('role-new', 'RoleManagementController@create')->name('superadmin.role.tambahdata');
		Route::post('role-new', 'RoleManagementController@save')->name('superadmin.role.save');
    Route::get('role-update/{$id}', 'RoleManagementController@edit')->name('superadmin.role.edit');
    Route::delete('role/{$id}', 'RoleManagementController@destroy')->name('superadmin.role.delete');
    //USER WEB MANAGEMENT
    Route::get('user', 'ControllerUser@data')->name('superadmin.user.data');
    Route::get('user/edituser/{id}', 'ControllerUser@edit')->name('superadmin.user.edit');
    Route::post('user/edituser/{id}', 'ControllerUser@update')->name('superadmin.user.update');
    Route::post('user/hapususer/{id}', 'ControllerUser@destroy')->name('superadmin.user.delete');

    //PRODUCT CATEGORY
    Route::get('category', 'ProductCategoryController@category')->name('category');
    Route::post('category/delete{id}', 'ProductCategoryController@destroy')->name('category.delete');

    //Product
    Route::get('product', 'ProductController@product')->name('product');
    Route::get('product/add', 'ProductController@tambah')->name('product.add');
    Route::post('product/add', 'ProductController@store')->name('product.add');
    Route::get('product/edit/{id}', 'ProductController@edit')->name('product.edit');
    Route::post('product/update/{id}', 'ProductController@update')->name('product.update');
    Route::post('product/delete/{id}', 'ProductController@destroy')->name('product.delete');

    //Futsal
    //tabel jadwal
      Route::get('product-futsal', 'FutsalController@index')->name('superadmin.futsal.index');
      //tabel order
      Route::get('product-futsal-order', 'FutsalController@order')->name('superadmin.futsal.order');
      //tabel tempat
      Route::get('product-futsal-tempat', 'FutsalController@tempat')->name('superadmin.futsal.tempat');
      //tabel Lapangan
      Route::get('product-futsal-lapangan', 'FutsalController@lapangan')->name('superadmin.futsal.lapangan');

      //ROUTE HARGA DI SINI
      Route::get('product-futsal-harga', 'FutsalController@harga')->name('superadmin.futsal.harga');
      Route::get('product-futsal-harga-new', 'FutsalController@Newharga')->name('superadmin.futsal.Newharga');


      //form create tempat
      Route::get('product-futsal-newTempat', 'FutsalController@newTempat')->name('superadmin.futsal.newTempat');
      //action create
      Route::post('product-futsal-createTempat', 'FutsalController@createTempat')->name('superadmin.futsal.createTempat');
      //form edit
      Route::get('product-futsal-editTempat/{id}', 'FutsalController@editTempat')->name('superadmin.futsal.editTempat');
      //action edit tempat
      Route::post('product-futsal-updateTempat/{id}', 'FutsalController@updateTempat')->name('superadmin.futsal.updateTempat');
      //delete tempart
      Route::post('product-futsal-deleteTempat/{id}', 'FutsalController@deleteTempat')->name('superadmin.futsal.deleteTempat');
      //form create lapangan
      Route::get('product-futsal-newLapangan', 'FutsalController@newLapangan')->name('superadmin.futsal.newLapangan');
      //action create
      Route::post('product-futsal-createLapangan', 'FutsalController@createLapangan')->name('superadmin.futsal.createLapangan');
      //form edit Lapangan
      Route::get('product-futsal-editLapangan/{id}', 'FutsalController@editLapangan')->name('superadmin.futsal.editLapangan');
      //action update lapangan
      Route::post('product-futsal-updateLapangan/{id}', 'FutsalController@updateLapangan')->name('superadmin.futsal.updateLapangan');
      //delete tempart
      Route::post('product-futsal-deleteLapangan/{id}', 'FutsalController@deleteLapangan')->name('superadmin.futsal.deleteLapangan');
	});


// Route::group(['namespace'=> 'Crud'], function(){
});
 // });
