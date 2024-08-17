<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'matricula',
        'orientador_id',
        'estagio_do_tcc',
    ];

    public function orientador()
    {
        return $this->belongsTo(Orientador::class);
    }

    public function bancas()
{
    return $this->hasMany(Banca::class);
}

}

