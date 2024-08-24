<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OriController;
use App\Http\Controllers\TarefasController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BancasController;
use App\Http\Controllers\Auth\AlunosController;
use App\Http\Controllers\OrientadoresController;
use App\Http\Controllers\RegisterBancaController;
Auth::routes();

// Rota de login
Route::get('login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');

// Rota de página inicial
Route::get('/home', [HomeController::class, 'index'])
    ->name('pagina_inicial')
    ->middleware('auth');

// Rota de registro
Route::get('/register', [RegisterController::class, 'showRegisterForm'])
    ->name('registerForm')
    ->middleware('auth');

Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Rota de registro de orientador
Route::get('/registerOrientador', [OriController::class, 'showRegisterForm'])
    ->name('registerOrientadorForm')
    ->middleware('auth');

Route::post('/registerOrientador', [OriController::class, 'registerOrientador'])->name('registerOrientador');



// Rota de Alunos
Route::get('/alunos', [AlunosController::class, 'showRegisterForm'])
    ->name('alunosForm')
    ->middleware('auth');

Route::post('/alunos', [AlunosController::class, 'alunos'])->name('alunos');

Route::get('/alunos/{id}/edit', [RegisterController::class, 'edit'])->name('alunos.edit');

Route::put('/alunos/{id}', [RegisterController::class, 'update'])->name('alunos.update');

//Rota de orientadores
Route::get('/orientador', [OrientadoresController::class, 'showRegisterForm'])
    ->name('orientadorForm')
   ->middleware('auth');

Route::post('/orientador', [OrientadoresController::class, 'orientador'])->name('orientador');

Route::get('/orientadores/{id}/edit', [OriController::class, 'edit'])->name('orientadores.edit');
Route::put('/orientadores/{id}', [OriController::class, 'update'])->name('orientadores.update');

// Exibe o formulário de bancas
Route::get('/bancas', [RegisterBancaController::class, 'index'])
    ->name('bancas')
    ->middleware('auth');

// Exibe o formulário de registro de uma nova banca
Route::get('/registerbanca', [RegisterBancaController::class, 'create'])
    ->name('registerBancaForm')
    ->middleware('auth');

// Processa o formulário de registro de uma nova banca
Route::post('/registerbanca', [RegisterBancaController::class, 'store'])
    ->name('registerBanca')
    ->middleware('auth');


