<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use App\Models\Orientador;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller{
    use RegistersUsers;

    protected $redirectTo = '/register';

    public function __construct()
    {
        
    }

    public function showRegisterForm()
    {
        $orientadores = Orientador::all(); // Obtém todos os orientadores
        return view('register', compact('orientadores')); // Passa a lista de orientadores para a visão
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nome' => ['required', 'string', 'max:255'],
            'matricula' => ['required', 'string', 'max:255', 'unique:alunos'],
            'orientador_id' => ['required', 'exists:orientadores,id'], // Valida que o orientador existe
            'estagio_do_tcc' => ['required', 'in:1,2,3,4'],
        ]);
    }

    protected function register(Request $request)
    {
        $validatedData = $this->validator($request->all())->validate();

        Aluno::create([
            'nome' => $validatedData['nome'],
            'matricula' => $validatedData['matricula'],
            'orientador_id' => $validatedData['orientador_id'],
            'estagio_do_tcc' => $validatedData['estagio_do_tcc'],
        ]);

        return redirect()->route('alunos')->with('success', 'Aluno registrado com sucesso!');
    }
    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);
        $orientadores = Orientador::all(); // Certifique-se de que este modelo está correto
        return view('alunos.edit', compact('aluno', 'orientadores'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'matricula' => 'required|string|max:255',
            'orientador_id' => 'nullable|exists:orientadores,id',
            'estagio_do_tcc' => 'required|string|max:255',
        ]);
    
        $aluno = Aluno::findOrFail($id);
        $aluno->update([
            'nome' => $request->input('nome'),
            'matricula' => $request->input('matricula'),
            'orientador_id' => $request->input('orientador_id'),
            'estagio_do_tcc' => $request->input('estagio_do_tcc'),
        ]);
    
        return redirect()->route('alunos')->with('success', 'Aluno atualizado com sucesso!');
    }
    


}