<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orientador extends Model{
    use HasFactory;

    protected $table = 'orientadores'; // Nome correto da tabelaprotected$fillable = ['matricula', 'nome'];

    public function alunos()
    {
        return $this->hasMany(Aluno::class);
    }
}
