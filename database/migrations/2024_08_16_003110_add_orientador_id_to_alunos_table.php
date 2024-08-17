<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */public function up()
    {
        Schema::table('alunos', function (Blueprint $table) {
            // Adiciona a coluna 'orientador_id' como chave estrangeira
            $table->foreignId('orientador_id')->nullable()->constrained('orientadores')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */public function down()
    {
        Schema::table('alunos', function (Blueprint $table) {
            // Remove a chave estrangeira e a coluna 'orientador_id'
            $table->dropForeign(['orientador_id']);
            $table->dropColumn('orientador_id');
        });
    }
};
