<?php

//provider
Route::group(['namespace' => 'backEnd\provider','prefix' => 'provider', 'as'=>'provider.'], function (){
	Route::get('login', 'ProviderController@login')->name('login');
	Route::post('login', 'ProviderController@postLogin')->name('login');
	Route::get('logout', 'ProviderController@logout')->name('logout');

	Route::group(['middleware' => 'ProviderAuth'], function (){
		Route::get('/', 'ProviderController@redirectToLogin')->name('redirectToLogin');
		Route::get('/home', 'ProviderController@home')->name('home');
		//make own profile
		Route::get('/profile', 'ProfileController@getUser')->name('profile');
		Route::post('/updateProfile', 'ProfileController@updateProfile')->name('updateProfile');
		//admin user image
		Route::get('/userImage', 'ProfileController@userImage')->name('userImage');
		Route::post('/uplodeImage', 'ProfileController@uplodeImage')->name('uplodeImage');
		Route::resource('users', 'UserController');
		//admin crud
		Route::resource('/admin', 'AdminController');
	});

});