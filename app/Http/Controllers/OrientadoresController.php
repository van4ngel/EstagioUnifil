<?php
namespace App\Http\Controllers;
use App\Models\Aluno;
use App\Models\Orientador;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller\Auth;


class OrientadoresController extends Controller
{
    public function showRegisterForm()
    {
        // Carrega todos os orientadores com seus alunos relacionados
        $orientadores = Orientador::with('alunos')->get();
        return view('orientador', compact('orientadores'));
    }
}