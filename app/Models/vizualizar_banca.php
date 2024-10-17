<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vizualizar_banca extends Model
{
    use HasFactory;

    // Especifique o nome correto da tabela
    protected $table = 'bancas'; // Substitua pelo nome correto da tabela

    protected $fillable = ['aluno_id', 'orientador_id', 'data_banca'];

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    public function orientador()
    {
        return $this->belongsTo(Orientador::class);
    }
}
