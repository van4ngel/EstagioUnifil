<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateNotasTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('notas', function (Blueprint $table) {
         
            $table->dropForeign(['orientacao_id']);
            $table->dropColumn('orientacao_id');
            
  
            $table->unsignedBigInteger('banca_id')->after('id');
            $table->foreign('banca_id')->references('id')->on('bancas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('notas', function (Blueprint $table) {
            $table->dropForeign(['banca_id']);
            $table->dropColumn('banca_id');
            $table->unsignedBigInteger('orientacao_id')->after('id'); 
            $table->foreign('orientacao_id')->references('id')->on('orientacoes')->onDelete('cascade');
        });
    }
}
