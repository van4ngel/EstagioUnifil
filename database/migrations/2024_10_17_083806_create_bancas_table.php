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
        Schema::create('bancas', function (Blueprint $table) {
            $table->id(); // Coluna de ID
            $table->foreignId('aluno_id')->constrained()->onDelete('cascade'); // Chave estrangeira para alunos
            $table->foreignId('orientador_id')->constrained()->onDelete('cascade'); // Chave estrangeira para orientadores
            $table->date('data_banca'); // Coluna para a data da banca
            $table->timestamps(); // Colunas para created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('bancas');
    }
};
