<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMediaToNovasNotasTable extends Migration
{
    public function up()
    {
        Schema::table('novas_notas', function (Blueprint $table) {
            $table->decimal('media', 5, 2)->nullable()->after('nota_relatorio'); // Adiciona a coluna 'media'
        });
    }

    public function down()
    {
        Schema::table('novas_notas', function (Blueprint $table) {
            $table->dropColumn('media'); // Remove a coluna 'media' se a migração for revertida
        });
    }
}
