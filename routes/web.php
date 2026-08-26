<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// })->name('home');

route:: get('/servidores',function() {
    return view('servidores.index');
})->name('servidores.index');