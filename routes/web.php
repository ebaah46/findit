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
    return view('auth.login');
});

Auth::routes();
Route::group(['middleware'=>'auth'], function() {
    /*
     * Route for home
     *
    */
    Route::get('/home', 'HomeController@index')->name('home');
    /*
     *
     * Route group for services
    */
    Route::prefix('service')->middleware(['role:agent'])->group(function () {
        Route::get('/','ServiceController@index')->name('service.index');
        Route::get('/create','ServiceController@create')->name('service.create');
        Route::post('/create','ServiceController@store')->name('service.create');
    });


});

