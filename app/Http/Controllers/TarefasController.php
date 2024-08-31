<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa; 

class TarefasController extends Controller
{
   
    public function showRegisterForm()
    {
        $tarefas = Tarefa::all(); 
        return view('tarefas', compact('tarefas')); 
    }
}

