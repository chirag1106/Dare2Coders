<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPage;
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

Route::get('/',[MainPage::class, 'index'])->name('index');

Route::get('/config-clear', function() {
    Artisan::call('config:clear'); 
    return 'Configuration cache cleared!';
});

Route::get('/config-cache', function() {
    Artisan::call('config:cache');
    return 'Configuration cache cleared! <br> Configuration cached successfully!';
});

Route::get('/cache-clear', function() {
    Artisan::call('cache:clear');
    return 'Application cache cleared!';
});

Route::get('/view-cache', function() {
    Artisan::call('view:cache');
    return 'Compiled views cleared! <br> Blade templates cached successfully!';
});

Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return 'Compiled views cleared!';
});

Route::get('/route-cache', function() {
    Artisan::call('route:cache');
    return 'Route cache cleared! <br> Routes cached successfully!';
});

Route::get('/route-clear', function() {
    Artisan::call('route:clear');
    return 'Route cache cleared!';
});

Route::get('/storage-link', function() {
    Artisan::call('storage:link');
    return 'The links have been created.';
});

Route::get('/down', function() {
    try{

        Artisan::call('down');
    }
    catch(Exception $e){
        return $e;
    }
    return 'Application is now in maintenance mode.';
});

Route::get('/up', function() {
    Artisan::call('up');
    return 'Application is now live.';
});