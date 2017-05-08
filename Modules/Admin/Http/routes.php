<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
    Route::get('/', 'AdminController@index');
    Route::get('/tasks','TasksController@index');
    Route::get('/tasks/create','TasksController@create');
    Route::get('/tasks/edit','TasksController@edit');
    Route::get('/tasks/destroy','TasksController@destroy');
    Route::get('/tasks/{id}','TasksController@show');
    Route::post('/tasks','TasksController@store');
});
