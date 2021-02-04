<?php

// app()->instance('game', function ()
// {
// 	return Str::random();
// });

// dd(app());


use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'frontend'], function (){
	Route::get('/', 'WebController@home')->name('home');
	Route::get('/registration', 'WebController@registration')->name('registration');
	Route::post('/registration-action', 'WebController@registrationAction')->name('registrationAction');
	Route::get('/registration-success', 'WebController@registrationSuccess')->name('registrationSuccess');
	Route::post('/contact-us', 'WebController@contactUs')->name('contactUs');

});

//user
// Route::group(['namespace' => 'backEnd\user', 'as'=>'user.'], function (){
// 	// user authentication
// 	Route::get('login', 'UserController@login')->name('login');
// 	Route::post('login', 'UserController@postLogin')->name('login');
// 	Route::get('logout', 'UserController@logout')->name('logout');
// 	// password change issue
// 	Route::get('/userVarification/{id}', 'UserVarifiController@userVarification');
// 	Route::post('/updatePassword/{id}', 'UserVarifiController@updatePassword')->name('updatePassword');
// 	Route::get('/resetPassword', 'UserController@resetPassword')->name('resetPassword');
// 	Route::post('/resetEmail', 'UserController@resetEmail')->name('resetEmail');
// 	Route::get('/resetPasswordShow/{id}', 'UserController@resetPasswordShow')->name('resetPasswordShow');
// 	Route::post('/updateResetPassword/{id}', 'UserController@updateResetPassword')->name('updateResetPassword');

// 	Route::group(['middleware' => 'UserAuth'], function (){
// 		Route::get('/', 'UserController@home')->name('home');
// 		//make own profile
// 		Route::get('/profile', 'ProfileController@getUser')->name('profile');
// 		Route::post('/updateProfile', 'ProfileController@updateProfile')->name('updateProfile');
// 		//admin user image
// 		Route::get('/userImage', 'ProfileController@userImage')->name('userImage');
// 		Route::post('/uplodeImage', 'ProfileController@uplodeImage')->name('uplodeImage');
// 		// Route::resource('users', 'UserUserController');
// 	});
// });
