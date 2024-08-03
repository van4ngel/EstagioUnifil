<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class orientador extends Model
{
    
    protected $fillable = ['matricula', 'nome'];

    public function alunos()
    {
        return $this->hasMany(Aluno::class, 'orientador_id');
    }
}
