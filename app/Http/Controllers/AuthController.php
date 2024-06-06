<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $matricula = $request->input('matricula');
        $senha = $request->input('senha');
    
        // Log dos dados recebidos
        \Log::info('Matrícula: ' . $matricula);
        \Log::info('Senha: ' . $senha);
    
        $user = DB::table('coordenador')->where([
            ['matricula', '=', $matricula],
            ['senha', '=', $senha]
        ])->first();
    
        // Log do resultado da consulta
        \Log::info('Usuário encontrado: ' . json_encode($user));
    
        if ($user) {
            return response()->json(['success' => true])
                ->header('Access-Control-Allow-Origin', '*'); // Permitir todas as origens
        } else {
            return response()->json(['success' => false])
                ->header('Access-Control-Allow-Origin', '*'); // Permitir todas as origens
        }
    }
}    