<?php

//admin
Route::group(['namespace' => 'backEnd\admin','prefix' => 'admin', 'as'=>'admin.'], function (){
	// authentication
	Route::get('login', 'AdminController@login')->name('login');
	Route::post('login', 'AdminController@postLogin')->name('login');
	Route::get('logout', 'AdminController@logout')->name('logout');
	// password change issue
	Route::get('/resetPassword', 'AdminController@resetPassword')->name('resetPassword');
	Route::post('/resetEmail', 'AdminController@resetEmail')->name('resetEmail');
	Route::get('/resetPasswordShow/{id}', 'AdminController@resetPasswordShow')->name('resetPasswordShow');
	Route::post('/updatePassword/{id}', 'AdminController@updatePassword')->name('updatePassword');

	Route::group(['middleware' => 'AdminAuth'], function (){
		Route::get('/', 'AdminController@redirectToLogin')->name('redirectToLogin');
		Route::get('/home', 'AdminController@home')->name('home');

		//make own profile
		Route::get('/profile', 'ProfileController@getUser')->name('profile');
		Route::post('/updateProfile', 'ProfileController@updateProfile')->name('updateProfile');
		//admin user image
		Route::get('/userImage', 'ProfileController@userImage')->name('userImage');
		Route::post('/uplodeImage', 'ProfileController@uplodeImage')->name('uplodeImage');
		//add user
		Route::resource('users', 'UserController');
		Route::resource('designation', 'DesignationController');
		Route::resource('staff', 'StaffController');
		Route::get('change-password', 'StaffController@change_pass')->name('change_pass');
		Route::resource('course', 'CourseController');
		Route::resource('batch', 'BatchController');
		Route::resource('paymentMethod', 'PaymentMethodController');
		Route::resource('student', 'StudentController');
		Route::get('student/payment-update/{id}', 'StudentController@paymentUpdate')->name('student.paymentUpdate');
		Route::post('student/payment-action/{id}', 'StudentController@paymentAction')->name('student.paymentAction');
		Route::get('student/view-student-form/{id}', 'StudentController@viewStudentForm')->name('student.viewStudentForm');
		Route::get('student/view-student-invoice/{id}', 'StudentController@viewStudentInvoice')->name('student.viewStudentInvoice');
		Route::group(['prefix' => 'collection', 'as'=>'collection.'], function (){
			Route::get('list', 'CollectionController@list')->name('list');
			Route::get('staff-view/{id}', 'CollectionController@staffView')->name('staffView');
		});
	});
});
