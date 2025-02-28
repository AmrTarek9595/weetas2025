<?php

use Illuminate\Support\Facades\Route;


// Auth::routes();

Route::get('{any}',
 function(){
    return view('index');
})->where('any','.*');
