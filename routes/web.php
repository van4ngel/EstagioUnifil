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
use App\Http\Controllers\AdicionarTarefasController;
use App\Http\Controllers\CadastroOrientadorController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\OrientadorLoginController;
use App\Http\Controllers\Controller\Auth;
use App\Http\Controllers\HomeOrientadorController;
use App\Http\Controllers\vizualizar_alunoController;
use App\Http\Controllers\vizualizar_bancaController;
use App\Http\Controllers\OrientacaoController;
use App\Http\Controllers\OrientacaoAdminController;
use App\Http\Controllers\BancaController;
use App\Http\Controllers\NotaController;

use App\Http\Middleware;

//Auth::routes()
// Rota de login


Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'loginteste'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::delete('/orientadores/{id}', [OriController::class, 'delete'])->name('orientadores.delete');

Route::delete('/bancas/{id}', [BancasController::class, 'delete'])->name('bancas.delete');

Route::delete('/alunos/{id}', [RegisterController::class, 'delete'])->name('alunos.delete');

// Rotas para login do orientador
Route::get('/loginOrientador', [OrientadorLoginController::class, 'showLoginForm'])->name('login.orientador');
Route::post('/loginOrientador', [OrientadorLoginController::class, 'login'])-> name('login.submit2');
Route::post('/orientador/logout', [OrientadorLoginController::class, 'logout'])->name('orientador.logout');

// Rota de página inicial
Route::get('/home', [HomeController::class, 'index'])
    ->name('pagina_inicial')
    ->middleware('auth');

    Route::get('/homeorientador', [HomeOrientadorController::class, 'index'])
   ->name('homeorientador');
    
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

// Rota para exibir o formulário de edição
Route::get('/bancas/{id}/edit', [BancasController::class, 'edit'])->name('bancas.edit');

// Rota para salvar as alterações
Route::put('/bancas/{id}', [BancasController::class, 'update'])->name('bancas.update');

// Rota de tarefas
Route::get('/tarefas', [TarefasController::class, 'showRegisterForm'])
    ->name('tarefasForm')
    ->middleware('auth');

Route::post('/tarefas', [TarefasController::class, 'tarefas'])->name('tarefas');


// Rota para exibir o formulário de registro de tarefas
Route::get('/AdicionarTarefas', [AdicionarTarefasController::class, 'showRegisterForm'])
    ->name('AdicionarTarefasForm')
    ->middleware('auth');

// Rota para processar o formulário de registro de tarefas
Route::post('/AdicionarTarefas', [AdicionarTarefasController::class, 'register'])
    ->name('AdicionarTarefas')
    ->middleware('auth');

    Route::get('/tarefas/{id}/edit', [AdicionarTarefasController::class, 'edit'])->name('tarefas.edit');
Route::put('/tarefas/{id}', [AdicionarTarefasController::class, 'update'])->name('tarefas.update');


// Rota de registro de orientador cadastro
Route::get('/cadastroOrientador', [CadastroOrientadorController::class, 'showRegisterForm'])
    ->name('cadastroOrientadorForm')
    ->middleware('guest');

Route::post('/cadastroOrientador', [CadastroOrientadorController::class, 'cadastroOrientador'])->name('cadastroOrientador');


Route::get('/vizualizar_aluno', [vizualizar_alunoController::class, 'showRegisterForm'])

   ->name('alunosVizualizar');




   Route::get('/vizualizar_banca', [vizualizar_bancaController::class, 'index'])->name('vizualizar.bancas');

Route::get('/alunos/{aluno}/orientacoes/create', [OrientacaoController::class, 'create'])->name('orientacoes.create');
Route::post('/orientacoes', [OrientacaoController::class, 'store'])->name('orientacoes.store');

Route::get('/orientacoes', [OrientacaoController::class, 'index'])->name('orientacoes.index');

Route::get('/Admin', [OrientacaoAdminController::class, 'admin'])
    ->name('Admin')
    ->middleware('auth');



Route::get('/notas/listar', [NotaController::class, 'listarNotas'])->name('notas.listar')
->middleware('auth');

Route::get('/notas/{bancaId}', [NotaController::class, 'index'])->name('notas.index');

Route::get('/notas/create/{bancaId}', [NotaController::class, 'create'])->name('notas.create');
Route::post('/notas', [NotaController::class, 'store'])->name('notas.store');
