<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Se o coordenador for autenticável
use Illuminate\Notifications\Notifiable;

class Coordenador extends Authenticatable
{
    use Notifiable;

    // Se o nome da tabela no banco de dados for diferente de 'coordenadors'
    protected $table = 'coordenador';

    // Quais campos podem ser preenchidos via atribuição em massa
    protected $fillable = [
        'nome',
        'email',
        'password', // adicione os campos que o coordenador possui
    ];

    // Se não deseja usar os campos `created_at` e `updated_at`
    public $timestamps = true; // Defina como false se não for usar timestamps
}
