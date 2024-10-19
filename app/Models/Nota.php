<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    protected $table = 'novas_notas'; 

    protected $fillable = [
        'banca_id',
        'orientador_id', 
        'nota_orientacao',
        'nota_apresentacao',
        'nota_relatorio',
    ];
    public function orientador()
{
    return $this->belongsTo(Orientador::class);
}

public function banca()
{
    return $this->belongsTo(Banca::class);
}

}

