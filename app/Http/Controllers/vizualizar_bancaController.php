<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vizualizar_banca;

class vizualizar_bancaController extends Controller
{
    public function index()
    {
        $bancas = vizualizar_banca::with('aluno', 'orientador')->get();
        return view('vizualizar_banca', compact('bancas'));
    }
}

