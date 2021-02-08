<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')-> name('home');
Route::resource('employees', 'EmployeeController');    //crea in automatico tutte le rotte per employees
Route::resource('tasks', 'TaskController');    //crea in automatico tutte le rotte per tasks
Route::resource('typologies', 'TypologyController');    //crea in automatico tutte le rotte per typologies