<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// })->name('home');

Route::get('/',function() {
    return view('servidores.index');
});

Route::post('/servidores',function() {
    return 'Lista de servidores';
})->name('servidores.index');
