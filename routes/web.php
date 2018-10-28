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

//Route::get('/admin', 'adminController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')
    ->middleware('is_admin')
    ->name('admin');

Route::get('/admin/drivers', 'DriverController@index')
    ->middleware('is_admin')
    ->name('admin');

Route::get('/admin/add_drivers', 'DriverController@create')
    ->middleware('is_admin')
    ->name('admin');

Route::post('/admin/add_drivers1', 'DriverController@store')
    ->middleware('is_admin')
    ->name('admin');

