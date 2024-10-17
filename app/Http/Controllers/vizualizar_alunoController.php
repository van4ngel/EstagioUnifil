<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use Illuminate\Http\Request;




class vizualizar_alunoController extends Controller
{
    public function showRegisterForm(Request $request)
    {
        $orientadorId = $request->session()->get('orientador_id'); // Obtém o ID do orientador da sessão
        $alunos = Aluno::where('orientador_id', $orientadorId)->get(); // Busca os alunos desse orientador
    
        return view('vizualizar_aluno', compact('alunos'));
    }
}    