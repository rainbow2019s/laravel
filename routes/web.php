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

Route::get('admin/index/index', 'Admin\IndexController@index');

Route::get('admin/index/test', 'Admin\IndexController@test');
Route::get('admin/index/test2', 'Admin\IndexController@test2');
Route::get('/about/index','About\SitesController@index');