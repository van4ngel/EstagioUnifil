<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Orientacao;

class OrientacaoController extends Controller
{
    public function create($alunoId)
    {
        // Busca o aluno pelo ID
        $aluno = Aluno::findOrFail($alunoId);
        
        // Retorna a view com o aluno
        return view('orientacoes.create', compact('aluno'));
    }
    public function store(Request $request)
    {
        // Validando os dados recebidos
        $validatedData = $request->validate([
            'aluno_id' => 'required|exists:alunos,id',
            'houve_orientacao' => 'required|string',
            'motivo_nao_orientacao' => 'nullable|string',
            'descricao_orientacao' => 'required|string',
            'data_orientacao' => 'required|date',
        ]);
    
        // Criando a nova orientação
        $orientacao = new Orientacao();
        $orientacao->aluno_id = $validatedData['aluno_id'];
    
        // Convertendo 'sim' e 'nao' para valores booleanos$orientacao->houve_orientacao = $validatedData['houve_orientacao'] === 'sim' ? 1 : 0;
 $orientacao->houve_orientacao = $validatedData['houve_orientacao'] === 'sim' ? 1 : 0;
    
        // Verifica se 'motivo_nao_orientacao' existe antes de atribuir
        $orientacao->motivo_nao_orientacao = isset($validatedData['motivo_nao_orientacao']) 
            ? $validatedData['motivo_nao_orientacao'] 
            : null;
    
        $orientacao->descricao_orientacao = $validatedData['descricao_orientacao'];
        $orientacao->data_orientacao = $validatedData['data_orientacao'];
    
        // Obtendo o ID do orientador da sessão
        $orientacao->orientador_id = $request->session()->get('orientador_id');
    
        // Salvando no banco de dados
        $orientacao->save();
    
        return redirect()->route('orientacoes.index')->with('success', 'Orientação registrada com sucesso!');

    }
    public function index()
{
    // Obtém todas as orientações
    $orientacoes = Orientacao::with(['aluno', 'orientador'])->get();

    // Retorna a view com as orientações
    return view('orientacoes.index', compact('orientacoes'));
}

    
    
}
