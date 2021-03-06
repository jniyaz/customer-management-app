<?php

use Illuminate\Http\Request;

Route::group([
    'prefix' => 'auth',
], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});

Route::group([
    'middleware' => 'jwt.auth'
], function ($router) {
    // Customers
    Route::get('customers', 'CustomerController@index');
    Route::get('customers/{id}', 'CustomerController@show');
    Route::post('customers/new', 'CustomerController@store');

    // Images
});


Route::post('images/collection', 'ImagesController@store');
Route::post('images/store', 'ImagesController@store');
