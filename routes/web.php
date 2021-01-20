<?php

use App\Http\Controllers\InsertController;
use Illuminate\Support\Facades\Route;


/// rotta per la view principale in cui inserire il file
Route::get('/', 'InsertController@create')->name('home');

/// rotta per fare lo store del file da inserire nell'action del form
Route::post('/submit', 'InsertController@store')->name('file.store');
