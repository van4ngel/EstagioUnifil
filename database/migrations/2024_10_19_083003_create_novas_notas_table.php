<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNovasNotasTable extends Migration
{
    public function up()
    {
        Schema::create('novas_notas', function (Blueprint $table) {
            $table->id(); // Cria uma coluna "id" auto-incremento
            $table->unsignedBigInteger('banca_id'); // Referência para a tabela de bancas
            $table->unsignedBigInteger('orientador_id'); // Referência para a tabela de orientadores
            $table->decimal('nota_orientacao', 5, 2)->nullable();
            $table->decimal('nota_apresentacao', 5, 2)->nullable();
            $table->decimal('nota_relatorio', 5, 2)->nullable();
            $table->timestamps(); // Cria as colunas created_at e updated_at

            // Adiciona chaves estrangeiras, se necessário
            $table->foreign('banca_id')->references('id')->on('bancas')->onDelete('cascade');
            $table->foreign('orientador_id')->references('id')->on('orientadores')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('novas_notas'); // Remove a tabela caso a migração seja revertida
    }
}

