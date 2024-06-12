<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;





Route::get('/login', function () {
    return view('login');
})->name('login');




Route::get('/Register', function () {
    return view('register');
});

Route::get('/home', [HomeController::class, 'index'])->name('pagina_inicial');

// Rotas de autenticação

Auth::routes();