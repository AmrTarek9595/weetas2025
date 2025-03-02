<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

require __DIR__.'/auth.php';


// Auth::routes();

Route::get('{any}',
 function(){
    return view('index');
})->where('any','.*');

