<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aluno;
use App\Models\Orientacao;
class OrientacaoAdminController extends Controller
{
    public function admin()
    {
        // Obtém todas as orientações
        $orientacoes = Orientacao::with(['aluno', 'orientador'])->get();
    
        // Retorna a view com as orientações
        return view('Admin', compact('orientacoes'));
    }
    
}
