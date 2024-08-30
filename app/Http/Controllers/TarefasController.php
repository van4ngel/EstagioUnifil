<?php
namespace App\Http\Controllers;




use Illuminate\Http\Request;

class TarefasController extends Controller
{
    // Exibe o formulário para adicionar tarefas
    public function showRegisterForm()
    {
        return view('tarefas');
    }

    // Processa o formulário e salva a tarefa no banco de dados
    public function register(Request $request)
    {
        // Validação dos dados recebidos do formulário
        $request->validate([
            'tema' => 'required|string|max:255',
            'estagio' => 'required|string|max:255',
            'data_entrega' => 'required|date',
            'link' => 'nullable|url',
        ]);

        // Criação da nova tarefa no banco de dados
        Tarefa::create([
            'tema' => $request->input('tema'),
            'estagio' => $request->input('estagio'),
            'data_entrega' => $request->input('data_entrega'),
            'link' => $request->input('link'),
        ]);

        // Redireciona de volta para a página inicial com uma mensagem de sucesso
        return redirect()->route('pagina_inicial')->with('success', 'Tarefa registrada com sucesso!');
    }
}


