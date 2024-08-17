<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Aluno;
use App\Models\Orientador;
use App\Models\Banca;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;


class BancasController extends Controller
{
    public function showRegisterForm()
    {
        return view('bancas');
    }

    public function register(Request $request)
    {
        // Lógica de validação e salvamento pode ser adicionada aqui
        // Por enquanto, vamos apenas redirecionar de volta para a página inicial
        return redirect()->route('pagina_inicial')->with('success', 'Orientador registrado com sucesso!');
    }
}
