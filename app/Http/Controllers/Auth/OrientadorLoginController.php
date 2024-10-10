<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\Orientador;
use App\Models\Coordenador;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Foundation\Auth\AuthenticatesUsers;


use Illuminate\Support\Facades\Hash;

class OrientadorLoginController extends Controller
{
    protected $redirectTo = '/homeorientador'; // Atualize para a rota correta
    // Redirecionar após o login bem-sucedido

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Mostra o formulário de login para orientadores
    public function showLoginForm()
    {
        return view('loginOrientador'); // Aponte para a view correta
    }

    // Processa a solicitação de login
    public function login(Request $request)
    {
        // Valida as credenciais
        $credentials = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        // Tenta encontrar o orientador pelo email
        $orientador = Orientador::where('email', $credentials['email'])->first();

        // Verifica se o orientador existe e se a senha está correta
        if ($orientador && Hash::check($credentials['password'], $orientador->password)) {
            // Se as credenciais estiverem corretas, faça login manualmente
            Auth::login($orientador);
            return redirect()->intended($this->redirectTo);
        }

        // Se a autenticação falhar, retorna à página de login com erro
        return back()->withErrors([
            'email' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ])->onlyInput('email');
    }
    // Logout do orientador
    public function logout(Request $request)
    {
        Auth::guard('orientador')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/loginOrientador'); // Redireciona para a página de login após logout
    }
}
