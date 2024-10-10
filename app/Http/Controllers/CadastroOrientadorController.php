<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orientador;

class CadastroOrientadorController extends Controller
{
    // Exibir o formulário de cadastro de orientador
    public function showRegisterForm()
    {
        return view('cadastroOrientador');
    }

    public function cadastroOrientador(Request $request)
    {
        // Validação dos dados
        $validated = $request->validate([
            'email' => 'required|string|max:255|exists:orientadores,email',  // Verifica se a matrícula já está registrada
            'password' => 'required|string|min:3|confirmed', // Senha com confirmação
        ]);

        // Atualiza os dados do orientador já existente
        $orientador = Orientador::where('email', $validated['email'])->first();
        
        // Verifique se o orientador foi encontrado
        if (!$orientador) {
            return back()->withErrors(['email' => 'Orientador não encontrado.']);
        }

        // Atualiza a senha do orientador
        $orientador->password = bcrypt($validated['password']); // Criptografa a senha
        $orientador->save();

        return redirect()->route('pagina_inicial')->with('success', 'Cadastro realizado com sucesso! Agora você pode acessar o sistema.');
    }
}
