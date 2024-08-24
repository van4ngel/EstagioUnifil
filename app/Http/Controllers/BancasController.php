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

    public function index()
{
    $bancas = Banca::with('aluno', 'orientador')->get();
    return view('bancas', compact('bancas'));
}


}
