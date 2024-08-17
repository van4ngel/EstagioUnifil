<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orientador extends Model
{
    use HasFactory;

    protected $table = 'orientadores'; // Nome correto da tabela

    // Defina os atributos que podem ser preenchidos em massa
    protected $fillable = ['nome', 'matricula'];

    // Defina o relacionamento com o modelo Aluno
    public function alunos()
    {
        return $this->hasMany(Aluno::class);
    }

    public function bancas()
{
    return $this->hasMany(Banca::class);
}

}
