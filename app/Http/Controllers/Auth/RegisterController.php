<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/register';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nome' => ['required', 'string', 'max:255'],
            'matricula' => ['required', 'string', 'max:255', 'unique:alunos'],
            'orientador' => ['required', 'string', 'max:255'],
            'estagio_do_tcc' => ['required', 'in:1,2,3,4'],
        ]);
    }

    /**
     * Create a new Aluno instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Aluno
     */
    protected function create(array $data)
    {
        return Aluno::create([
            'nome' => $data['nome'],
            'matricula' => $data['matricula'],
            'orientador' => $data['orientador'],
            'estagio_do_tcc' => $data['estagio_do_tcc'],
        ]);
    }
}