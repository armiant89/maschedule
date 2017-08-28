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

Route::get('/', 'Site\HomeController@index');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
        CRUD::resource('/periods', 'PeriodsController');
        CRUD::resource('/performances', 'PerformancesController');
        CRUD::resource('/productions', 'ProductionsController');
        CRUD::resource('/cities', 'CitiesController');
        CRUD::resource('/locations', 'LocationsController');
        CRUD::resource('/timezones', 'TimezonesController');
});
