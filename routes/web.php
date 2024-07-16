<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return 'Primeira Logica com Laravel';
});

Route::get('/produtos', 'App\Http\Controllers\ProdutoController@lista');