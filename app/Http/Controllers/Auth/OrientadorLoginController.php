<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\Orientador;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash;

class OrientadorLoginController extends Controller
{
    protected $redirectTo = '/homeorientador'; // Atualize para a rota correta

    public function __construct()
    {
        $this->middleware('guest:orientador')->except('logout'); 
    }

    
    public function showLoginForm(Request $request)
{
    // Invalida a sessão atual do usuário
    Auth::logout(); // Faz logout do usuário

    // Remove dados específicos da sessão, se necessário
    $request->session()->forget(['orientador_id', 'other_data']); // Remova outras chaves que você deseja limpar

    return view('loginOrientador'); 
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
            Auth::guard('orientador')->login($orientador);
            // Armazena o ID do orientador na sessão
            $request->session()->put('orientador_id', $orientador->id);
            return redirect()->intended($this->redirectTo);
        }

        // Se a autenticação falhar, retorna à página de login com erro
        return back()->withErrors([
            'email' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::guard('orientador')->logout(); // Logout do orientador autenticado
    
        $request->session()->invalidate(); // Invalida a sessão
        $request->session()->regenerateToken(); // Regenera o token CSRF
    
        return redirect('/loginOrientador'); // Redireciona para a página de login após o logout
    }
}