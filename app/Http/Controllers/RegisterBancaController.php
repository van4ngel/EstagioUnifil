<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Orientador;
use App\Models\Banca;
use Illuminate\Http\Request;

class RegisterBancaController extends Controller
{
    public function create()
    {
        $alunos = Aluno::all();
        $orientadores = Orientador::all();
        return view('registerBanca', compact('alunos', 'orientadores'));
    }

    public function store(Request $request)
    {
        // Valide os dados, incluindo a data no formato correto (yyyy-mm-dd)
        $request->validate([
            'aluno_id' => 'required|exists:alunos,id',
            'orientador_id' => 'required|exists:orientadores,id',
            'data_banca' => 'required|date',
        ]);

        // Crie o novo registro com a data fornecida
        Banca::create([
            'aluno_id' => $request->input('aluno_id'),
            'orientador_id' => $request->input('orientador_id'),
            'data_banca' => $request->input('data_banca'),
        ]);

        return redirect()->route('bancas')->with('success', 'Banca criada com sucesso!');
    }

    public function index()
    {
        $bancas = Banca::with('aluno', 'orientador')->get();
        return view('bancas', compact('bancas'));
    }
}