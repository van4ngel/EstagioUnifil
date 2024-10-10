<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\Orientador;
use App\Models\Coordenador;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Handle a logout request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout(); // Logout do usuário autenticado

        $request->session()->invalidate(); // Invalida a sessão
        $request->session()->regenerateToken(); // Regenera o token CSRF

        return redirect('/login'); // Redireciona para a página de login após o logout
    }

    public function loginteste(Request $request)
    {
        // Validação das credenciais
        $credentials = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        // Tenta autenticar como coordenador
        if (Auth::guard('web')->attempt($credentials)) {
            return redirect()->intended('/home'); // Redireciona para a página inicial
        }

        // Tenta autenticar como orientador
        //if (Auth::guard('orientador')->attempt($credentials)) {
        //    return redirect()->intended('/home'); // Redireciona para a página inicial
       // }

        // Se nenhuma autenticação for bem-sucedida
        return back()->withErrors([
            'login' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ])->onlyInput('email'); 
    }
}
