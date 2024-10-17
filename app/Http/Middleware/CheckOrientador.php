<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckOrientador
{
    public function handle(Request $request, Closure $next)
    {
        // Verifica se o usuário logado pelo guard orientador
        if (auth('orientador')->check()) {
            return $next($request);
        }

        // Redireciona se o usuário não for um orientador autenticado
        return redirect()->route('login')->withErrors('Acesso negado.');
    }
}
