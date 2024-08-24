<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBancasTable extends Migration
{
    public function up()
    {
        Schema::create('bancas', function (Blueprint $table) {
            $table->id();
            $table->date('data_banca') ; // Supondo que você queira armazenar a data da banca
            $table->foreignId('aluno_id')->constrained('alunos')->onDelete('cascade'); // Certifique-se de que a tabela é 'alunos'
            $table->foreignId('orientador_id')->constrained('orientadores')->onDelete('cascade'); // Certifique-se de que a tabela é 'orientadores'
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bancas');
    }
}
