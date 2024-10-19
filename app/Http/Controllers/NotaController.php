<?php
namespace App\Http\Controllers;

use App\Models\Nota;
use App\Models\Banca;
use App\Models\Orientador; 
use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function create($bancaId)
    {
        $banca = Banca::findOrFail($bancaId);
        $orientadores = Orientador::all();
    
        return view('notas.create', compact('banca', 'orientadores'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'banca_id' => 'required|exists:bancas,id',
            'orientador_id' => 'required|exists:orientadores,id', 
            'nota_orientacao' => 'nullable|numeric|min:0|max:10',
            'nota_apresentacao' => 'nullable|numeric|min:0|max:10', 
            'nota_relatorio' => 'nullable|numeric|min:0|max:10', 
        ]);
    
        // Cria a nova nota
        $nota = Nota::create($request->all());
    
        // Cálculo da média
        $notas = [
            $nota->nota_orientacao,
            $nota->nota_apresentacao,
            $nota->nota_relatorio,
        ];
    
        // Calcular a média, ignorando notas nulas
        $media = array_sum(array_filter($notas)) / max(1, count(array_filter($notas))); 
        $nota->media = $media;
        $nota->save();
    
        return redirect()->route('notas.index', $nota->banca_id)->with('success', 'Notas salvas com sucesso!');
    }
    
    public function index($bancaId)
    {
        $notas = Nota::with(['banca', 'orientador']) 
            ->where('banca_id', $bancaId)
            ->get();
    
        $somaDasMedias = 0;
        $quantidadeMedias = 0;
    
        foreach ($notas as $nota) {
            $totalNotas = 0;
            $count = 0;

            if (!is_null($nota->nota_orientacao)) {
                $totalNotas += $nota->nota_orientacao;
                $count++;
            }
            if (!is_null($nota->nota_apresentacao)) {
                $totalNotas += $nota->nota_apresentacao;
                $count++;
            }
            if (!is_null($nota->nota_relatorio)) {
                $totalNotas += $nota->nota_relatorio;
                $count++;
            }
    
            if ($count > 0) {
                $nota->media = $totalNotas / $count;
                $somaDasMedias += $nota->media; 
                $quantidadeMedias++; 
            } else {
                $nota->media = null; // Caso não haja notas para calcular a média
            }
        }
    
        // Cálculo da média geral
        $mediaGeralBanca = $quantidadeMedias > 0 ? $somaDasMedias / $quantidadeMedias : null;
    
        return view('notas.index', compact('notas', 'mediaGeralBanca', 'bancaId'));
    }
    
  public function listarNotas()
{
    $notas = Nota::with(['orientador', 'banca', 'banca.aluno'])->get(); // Carrega também o aluno associado à banca

    // Agrupando as notas por banca
    $notasAgrupadas = $notas->groupBy('banca_id')->map(function ($grupo) {
        return [
            'banca' => $grupo->first()->banca,
            'aluno' => $grupo->first()->banca->aluno, // Acesse o aluno da banca
            'orientador' => $grupo->first()->orientador, // Acesse o orientador do primeiro registro do grupo
            'media_geral' => $grupo->avg(function ($item) {
                return ($item->nota_orientacao + $item->nota_apresentacao + $item->nota_relatorio) / 3; // Calcule a média geral
            }),
        ];
    })->values(); // Usado para redefinir as chaves do array

    return view('notas.listar', compact('notasAgrupadas')); // Envie a variável para a view
}

}
