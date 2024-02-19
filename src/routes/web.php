<?php

use Illuminate\Support\Facades\Artisan;

Route::get('common', function () {
    return 'common';
});
Route::get('clear/all', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize');
    Artisan::call('optimize:clear');
    Artisan::call('db:seed');
    Artisan::call('migrate');
    return "Application Cache is cleared";
});

Route::group(['namespace' => 'Kody\Common\app\http\controllers'], function () {
    Route::get('route/gui', 'RouteController@index')->name('route_gui');
    Route::get('/generate', 'GenerateController@generate')->name('generate');
});

Route::get('cache', function () {
    Artisan::call('cache:clear');
    return "cache cleared successfully";
});

Route::get('config', function () {
    Artisan::call('config:clear');
    return "config cleared successfully";
});

Route::get('optimize', function () {
    Artisan::call('optimize');
    return "optimize done";
});

Route::get('migrate', function () {
    Artisan::call('migrate');
    return "migrate command run";
});

Route::get('seeder', function () {
    Artisan::call('db:seed');
    return "seed command run";
});

Route::get('view', function () {
    Artisan::call('view:clear');
    return "view cleared successfully";
});
