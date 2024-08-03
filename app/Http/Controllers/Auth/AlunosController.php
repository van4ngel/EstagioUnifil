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
}
