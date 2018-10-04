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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::prefix('admin')->group(function() {  

	Route::get('/login', 'Auth\AdminLoginController@index')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
});

// Admin Panel routing
Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function() {  

    Route::group(['namespace' => 'Admin'], function () {
		Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
	});

});


// User side routing
Route::group(['middleware' => 'auth'], function() {   

	// User Controllers Group
    Route::group(['namespace' => 'User'], function () {
		Route::get('dashboard', 'DashboardController@index')->name('user.dashboard');
	});
    
});