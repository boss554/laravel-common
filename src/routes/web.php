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
