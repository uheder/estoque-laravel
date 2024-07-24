<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return 'Primeira Logica com Laravel';
});

Route::get('/produtos', [ProdutoController::class, 'lista']);