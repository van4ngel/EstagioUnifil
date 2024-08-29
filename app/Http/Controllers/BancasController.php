<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Aluno;
use App\Models\Orientador;
use App\Models\Banca;

class BancasController extends Controller
{
    // Exibe a lista de bancas cadastradas
    public function index()
    {
        $bancas = Banca::with('aluno', 'orientador')->get();
        return view('bancas', compact('bancas'));
    }

    // Exibe o formulário de cadastro de uma nova banca
    public function showRegisterForm()
    {
        return view('bancas');
    }

    // Exibe o formulário de edição de uma banca existente
    public function edit($id)
    {
        $banca = Banca::findOrFail($id);
        $alunos = Aluno::all();
        $orientadores = Orientador::all();
        
        return view('editBanca', compact('banca', 'alunos', 'orientadores'));
    }

    // Atualiza uma banca existente no banco de dados
    public function update(Request $request, $id)
    {
        $request->validate([
            'aluno_id' => 'required|exists:alunos,id',
            'orientador_id' => 'required|exists:orientadores,id',
            'data_banca' => 'required|date',
        ]);

        $banca = Banca::findOrFail($id);
        $banca->update([
            'aluno_id' => $request->input('aluno_id'),
            'orientador_id' => $request->input('orientador_id'),
            'data_banca' => $request->input('data_banca'),
        ]);

        return redirect()->route('bancas')->with('success', 'Banca atualizada com sucesso!');
    }
}
