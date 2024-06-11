<?php
Auth::routes();
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
 return view('login');
});

Route::get('/App', function () {
    return view('app2');
});

Route::get('/Pagina_inicial', function () {
    return view('pagina_inicial');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

