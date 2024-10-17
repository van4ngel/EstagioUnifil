<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orientacao extends Model
{
    use HasFactory;

    protected $table = 'orientacoes'; // Adicione essa linha

    protected $fillable = ['aluno_id', 'orientador_id', 'houve_orientacao', 'motivo_nao_orientacao', 'descricao_orientacao', 'data_orientacao'];

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    public function orientador()
    {
        return $this->belongsTo(Orientador::class);
    }
}
