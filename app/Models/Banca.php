<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banca extends Model
{
    use HasFactory;


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
