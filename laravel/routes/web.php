<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@empIndex')->name('emp-index');
Route::get('/show{id}', 'MainController@empShow')->name('emp-show');
Route::get('/tasks', 'MainController@taskIndex')->name('task-index');
Route::get('/tasks{id}', 'MainController@taskShow')->name('task-show');
Route::get('/typology', 'MainController@typIndex')->name('typ-index');
Route::get('/typology{id}', 'MainController@typShow')->name('typ-show');
