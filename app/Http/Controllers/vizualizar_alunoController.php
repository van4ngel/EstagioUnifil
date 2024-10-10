<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use Illuminate\Http\Request;




class vizualizar_alunoController extends Controller
{
    public function showRegisterForm()
    {
        $alunos = Aluno::all();
        return view('vizualizar_aluno', compact('alunos'));
    }
}
