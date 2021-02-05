<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@index')->name('emp-index');
Route::get('/show{id}', 'MainController@show')->name('emp-show');
