<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@empIndex')->name('emp-index');
Route::get('/show{id}', 'MainController@empShow')->name('emp-show');
Route::get('/tasks', 'MainController@taskIndex')->name('task-index');
Route::get('/tasks{id}', 'MainController@taskShow')->name('task-show');


