<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function showRegisterForm()
    {
        $alunos = Aluno::all();
        return view('alunos', compact('alunos'));
    }



    public function index()
    {
        // Obtém todos os alunos para exibição na tela
        $alunos = Aluno::all();
        return view('alunos.alunos', compact('alunos'));
    }
}

