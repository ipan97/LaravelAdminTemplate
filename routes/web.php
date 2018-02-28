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

Route::group(['as' => 'frontend', 'namespace' => 'Frontend'], function () {
    Route::get('/', 'HomeController@index');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => 'admin'], function () {
    // Dashboard
    Route::get('/', 'DashboardController@index')->name('dashboard');


});

Route::group(['as' => 'auth.', 'namespace' => 'Auth'], function () {
    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
        Route::get('login', 'LoginController@index')->name('login');
        Route::post('authenticate', 'LoginController@authenticate')->name('authenticate');
        Route::post('logout', 'LoginController@logout')->name('logout');
    });
    Route::group(['prefix' => 'frontend', 'as' => 'frontend.', 'namespace' => 'Frontend'], function () {

    });
});
