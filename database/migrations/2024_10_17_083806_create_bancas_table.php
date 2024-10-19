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
        // Verifica se a tabela já existe
        if (!Schema::hasTable('bancas')) {
            Schema::create('bancas', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('aluno_id');
                $table->unsignedBigInteger('orientador_id');
                $table->date('data_banca');
                $table->timestamps();
                
                // Definir as chaves estrangeiras
                $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade');
                $table->foreign('orientador_id')->references('id')->on('orientadores')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('bancas');
    }
};
