<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa; 
use Carbon\Carbon;

class AdicionarTarefasController extends Controller
{
    public function showRegisterForm()
    {
        return view('AdicionarTarefas');
    }

   
public function register(Request $request)
{
    
    $request->validate([
        'tema' => 'required|string|max:255',
        'estagio' => 'required|string|max:255',
        'data_entrega' => 'required|date',
        'link' => 'nullable|url',
    ]);

    
    Tarefa::create([
        'tema' => $request->input('tema'),
        'estagio' => $request->input('estagio'),
        'data_entrega' => Carbon::parse($request->input('data_entrega'))->format('Y-m-d'),
        'link' => $request->input('link'),
    ]);


    return redirect()->route('tarefas')->with('success', 'Tarefa registrada com sucesso!');
}

public function edit($id)
{
    $tarefa = Tarefa::findOrFail($id);
    return view('editarTarefa', compact('tarefa'));
}

public function update(Request $request, $id)
{
  
    $request->validate([
        'tema' => 'required|string|max:255',
        'estagio' => 'required|string|max:255',
        'data_entrega' => 'required|date',
        'link' => 'nullable|url',
    ]);

  
    $tarefa = Tarefa::findOrFail($id);
    $tarefa->update([
        'tema' => $request->input('tema'),
        'estagio' => $request->input('estagio'),
        'data_entrega' => Carbon::parse($request->input('data_entrega')),
        'link' => $request->input('link'),
    ]);


    return redirect()->route('tarefas')->with('success', 'Tarefa atualizada com sucesso!');
}

}

