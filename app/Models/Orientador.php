<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable; // Importa a trait Notifiable
use Illuminate\Foundation\Auth\User as Authenticatable; // Se o coordenador for autenticável

class Orientador extends Authenticatable
{
    use Notifiable;

    protected $table = 'orientadores';

    protected $fillable = [
        'nome', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function alunos()
    {
        return $this->hasMany(Aluno::class);
    }

    public function bancas()
    {
        return $this->hasMany(Banca::class);
    }
    
}
