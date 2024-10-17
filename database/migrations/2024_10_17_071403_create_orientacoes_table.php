<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orientacoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('aluno_id');
            $table->unsignedBigInteger('orientador_id');
            $table->boolean('houve_orientacao');
            $table->text('motivo_nao_orientacao')->nullable();
            $table->text('descricao_orientacao');
            $table->date('data_orientacao');
            $table->timestamps();
        
            // Relacionamentos
            $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade');
            $table->foreign('orientador_id')->references('id')->on('orientadores')->onDelete('cascade');
        });
        
    }
    
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orientacoes');
    }
};
