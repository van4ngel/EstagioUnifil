<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orientador;

class OriController extends Controller{
    public function store(Request $request){

        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'matricula' => 'required|string|max:255|unique:orientadores',
        ]);

        $orientador = new Orientador();
        $orientador->nome = $validated['nome'];
        $orientador->matricula = $validated['matricula'];
        $orientador->save();

        return redirect()->back()->with('success', 'Orientador registrado com sucesso!');
    }

    public function showRegisterForm()
    {
        return view('registerOrientador');
    }

    public function registerOrientador(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'matricula' => 'required|string|max:255|unique:orientadores',
        ]);

        $orientador = new Orientador();
        $orientador->nome = $validated['nome'];
        $orientador->matricula = $validated['matricula'];
        $orientador->save();

        return redirect()->back()->with('success', 'Orientador registrado com sucesso!');
    }

    public function edit($id)
{
    $orientador = Orientador::findOrFail($id);
    return view('orientadores.edit', compact('orientador'));
}


public function update(Request $request, $id)
{
    $request->validate([
        'nome' => 'required|string|max:255',
        'matricula' => 'required|string|max:255',
    ]);

    $orientador = Orientador::findOrFail($id);
    $orientador->update($request->only(['nome', 'matricula'])); // Atualiza apenas os campos permitidos

    return redirect()->route('orientador')->with('success', 'Orientador atualizado com sucesso!');
}

}


