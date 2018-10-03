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
    Route::get('role-update/{id}', 'RoleManagementController@edit')->name('superadmin.role.edit');
    Route::post('role-update/{id}', 'RoleManagementController@UpdateRole')->name('superadmin.role.update');
    Route::delete('role/{id}', 'RoleManagementController@destroy')->name('superadmin.role.delete');
    //USER WEB MANAGEMENT
    Route::get('user', 'ControllerUser@data')->name('superadmin.user.data');
    Route::get('user/edituser/{id}', 'ControllerUser@edit')->name('superadmin.user.edit');
    Route::post('user/edituser/{id}', 'ControllerUser@update')->name('superadmin.user.update');
    Route::post('user/hapususer/{id}', 'ControllerUser@destroy')->name('superadmin.user.delete');
    Route::get('user/newUser', 'ControllerUser@newUser')->name('superadmin.user.newUser');
    Route::post('user/tambahuser', 'ControllerUser@createUser')->name('superadmin.user.tambah');

    //Payment Method dan Payment Type
    Route::get('payment_type', 'PaymentTypeController@type')->name('payment_type');
    Route::get('payment_type-newType', 'PaymentTypeController@newType')->name('payment_type.newType');
    Route::post('payment_type-createType', 'PaymentTypeController@createType')->name('payment_type.createType');
    Route::get('payment_type-editType/{id}', 'PaymentTypeController@editType')->name('payment_type.editType');
    Route::post('payment_type-updateType/{id}', 'PaymentTypeController@updateType')->name('payment_type.updateType');
    Route::post('payment_type-deleteType/{id}', 'PaymentTypeController@deleteType')->name('payment_type.deleteType');

    //Payment Method dan Payment Method
    Route::get('Payment_method', 'PaymentMethodController@method')->name('payment_method');
    Route::get('Payment_method-newMethod', 'PaymentMethodController@newMethod')->name('payment_method.newMethod');
    Route::post('Payment_method-createMethod', 'PaymentMethodController@createMethod')->name('payment_method.createMethod');
    Route::get('Payment_method-editMethod/{id}', 'PaymentMethodController@editMethod')->name('payment_method.editMethod');
    Route::post('Payment_method-updateMethod/{id}', 'PaymentMethodController@updateMethod')->name('payment_method.updateMethod');
    Route::post('Payment_method-deleteMethod/{id}', 'PaymentMethodController@deleteMethod')->name('payment_method.deleteMethod');

    //Payment Method dan Partner Company
    Route::get('Partner_company', 'PartnerCompanyController@PC')->name('partner_company');
    Route::get('Partner_company-newPC', 'PartnerCompanyController@newPC')->name('partner_company.newPC');
    Route::post('Partner_company-createPC', 'PartnerCompanyController@createPC')->name('partner_company.createPC');
    Route::get('Partner_company-editPC/{id}', 'PartnerCompanyController@editPC')->name('partner_company.editPC');
    Route::post('Partner_company-updatePC/{id}', 'PartnerCompanyController@updatePC')->name('partner_company.updatePC');
    Route::post('Partner_company-deletePC/{id}', 'PartnerCompanyController@deletePC')->name('partner_company.deletePC');

    //Order
    Route::get('Order', 'FutsalController@order')->name('order');
    Route::post('Order-deleteOrder/{id}', 'FutsalController@deleteOrder')->name('order.deleteOrder');
    Route::post('Order-editOrder/{id}', 'FutsalController@editOrder')->name('order.editOrder');
    Route::post('Order-UpdateOrder/{id}', 'FutsalController@UpdateOrder')->name('order.UpdateOrder');
    Route::post('Order-StatusOrder/{id}', 'FutsalController@OrderStatus')->name('order.StatusOrder');

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
    Route::post('product/status/{id}', 'ProductController@productStatus')->name('product.status');

    //Futsal

      //ROUTE JADWAL DI SINI
      Route::get('product-futsal', 'FutsalController@index')->name('superadmin.futsal.index');
      Route::get('product-futsal-jadwal', 'FutsalController@jadwal')->name('superadmin.futsal.jadwal');
      Route::get('product-futsal-jadwal-new', 'FutsalController@newJadwal')->name('superadmin.futsal.Newjadwal');
      Route::post('product-futsal-jadwal-new', 'FutsalController@SaveJadwal')->name('superadmin.futsal.SaveJadwal');
      Route::get('product-futsal-jadwal-update/{id}', 'FutsalController@editJadwal')->name('superadmin.futsal.editjadwal');
      Route::post('product-futsal-jadwal-update/{id}', 'FutsalController@updateJadwal')->name('superadmin.futsal.updatejadwal');
      Route::post('product-futsal-jadwal-delete/{id}', 'FutsalController@deleteJadwal')->name('superadmin.futsal.deleteJadwal');
      Route::post('product-futsal-jadwal-status/{id}', 'FutsalController@jadwalStatus')->name('superadmin.futsal.jadwalStatus');
      //tabel order
      Route::get('product-futsal-order', 'FutsalController@order')->name('superadmin.futsal.order');
      //tabel tempat
      Route::get('product-futsal-tempat', 'FutsalController@tempat')->name('superadmin.futsal.tempat');
      //tabel Lapangan
      Route::get('product-futsal-lapangan', 'FutsalController@lapangan')->name('superadmin.futsal.lapangan');

      //ROUTE HARGA DI SINI
      Route::get('product-futsal-harga', 'FutsalController@harga')->name('superadmin.futsal.harga');
      Route::get('product-futsal-harga-new', 'FutsalController@Newharga')->name('superadmin.futsal.Newharga');
      Route::post('product-futsal-harga-new', 'FutsalController@SaveHarga')->name('superadmin.futsal.SaveHarga');
      Route::get('product-futsal-harga-edit/{id}', 'FutsalController@editHarga')->name('superadmin.futsal.editHarga');
      Route::post('product-futsal-harga-update/{id}', 'FutsalController@updateHarga')->name('superadmin.futsal.updateHarga');
      Route::post('product-futsal-harga-delete/{id}', 'FutsalController@deleteHarga')->name('superadmin.futsal.deleteHarga');

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
