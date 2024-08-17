<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterBancaController extends Controller
{
    public function showRegisterForm()
    {
        return view('registerBanca'); // Substitua 'nome_da_sua_view' pelo nome correto da sua view
    }

    public function registerBanca(Request $request)
    {
        // Lógica para registrar a banca
    }
}
