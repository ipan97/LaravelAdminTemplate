<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api', 'middleware' => 'api.key'], function () {
    Route::get('test', function () {
        $info = [
            'name' => 'test',
            'description' => 'description'
        ];
        return $info;
    })->name('test');
});
