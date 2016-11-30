<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/**
 * Admin routes
 */
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@dashboard')->name('admin:dashboard');

    Route::get('{model_name}/{action?}/{id?}', 'AdminController@getModelAction')
            ->name('admin:getModelAction')
            ->where('id', '[0-9]+');
});

