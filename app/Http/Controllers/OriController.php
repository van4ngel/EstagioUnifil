<?php

namespace App\Http\Controllers;

use App\Models\Orientador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OriController extends Controller
{
    /**
     * Exibe o formulário para registrar um novo orientador.
     *
     * @return \Illuminate\View\View
     */
    public function showRegisterForm()
    {
        return view('registerOrientador'); // A view onde o formulário está
    }

    /**
     * Valida e cria um novo orientador.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function registerOrientador(Request $request)
    {
        // Validar os dados
        $validatedData = $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'matricula' => ['required', 'string', 'max:255', 'unique:orientadores'],
        ]);

        // Criar o orientador no banco de dados
        Orientador::create([
            'nome' => $validatedData['nome'],
            'matricula' => $validatedData['matricula'],
        ]);

        // Redirecionar para a página de lista de orientadores ou qualquer outra página
        return redirect()->route('orientadores.index')->with('success', 'Orientador registrado com sucesso!');
    }
}
