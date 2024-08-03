<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;



class OrientadoresController extends Controller
{
    public function showRegisterForm()
    {
        return view('orientador');
    }

}
