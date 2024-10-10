<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeOrientadorController extends Controller
{
   /**
     * Create a new controller instance.
     *
    * @return void
    */
   public function __construct()
   {
  /*  */
   }

   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */

   public function index()
   {
       return view('homeOrientador'); // Deve retornar uma view diferente
   }
  }   

