<?php

use App\Http\Controllers\InsertController;
use Illuminate\Support\Facades\Route;


Route::get('/', 'InsertController@create')->name('home');
