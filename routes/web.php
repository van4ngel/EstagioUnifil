<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('login');
});

Route::get('/App', function () {
    return view('app');
});

Route::get('/Pagina_inicial', function () {
    return view('pagina_inicial');
});
Route::get('/login', function () {
    return view('login');
});


// Corrija a rota para corresponder à rota no Vue.js
Route::post('/login', [AuthController::class, 'login']);
