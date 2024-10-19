<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update2NotasTable extends Migration
{
    public function up()
    {
        Schema::table('notas', function (Blueprint $table) {
            $table->unsignedBigInteger('orientador1_id')->after('banca_id'); 
            $table->unsignedBigInteger('orientador2_id')->nullable()->after('orientador1_id'); 
            $table->unsignedBigInteger('orientador3_id')->nullable()->after('orientador2_id'); 
            $table->decimal('nota_relatorio_1', 5, 2)->nullable()->after('nota_orientacao'); 
            $table->decimal('nota_relatorio_2', 5, 2)->nullable()->after('nota_relatorio_1'); 
            $table->decimal('nota_relatorio_3', 5, 2)->nullable()->after('nota_relatorio_2'); // Adicionando coluna para o terceiro orientador
            $table->decimal('nota_apresentacao_1', 5, 2)->nullable()->after('nota_relatorio_3'); 
            $table->decimal('nota_apresentacao_2', 5, 2)->nullable()->after('nota_apresentacao_1'); 
            $table->decimal('nota_apresentacao_3', 5, 2)->nullable()->after('nota_apresentacao_2'); // Adicionando coluna para o terceiro orientador

            // Adicione as chaves estrangeiras se necessário
            $table->foreign('orientador1_id')->references('id')->on('orientadores')->onDelete('cascade');
            $table->foreign('orientador2_id')->references('id')->on('orientadores')->onDelete('cascade');
            $table->foreign('orientador3_id')->references('id')->on('orientadores')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('notas', function (Blueprint $table) {
            $table->dropForeign(['orientador1_id']);
            $table->dropForeign(['orientador2_id']);
            $table->dropForeign(['orientador3_id']);
            $table->dropColumn(['orientador1_id', 'orientador2_id', 'orientador3_id', 'nota_relatorio_1', 'nota_relatorio_2', 'nota_relatorio_3', 'nota_apresentacao_1', 'nota_apresentacao_2', 'nota_apresentacao_3']); // Remover também as colunas de apresentação
        });
    }
}
