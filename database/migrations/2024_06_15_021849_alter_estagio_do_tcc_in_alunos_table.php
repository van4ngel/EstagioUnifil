<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterEstagioDoTccInAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alunos', function (Blueprint $table) {
            // Alterando a coluna estagio_do_tcc para ser do tipo enum
            $table->enum('estagio_do_tcc', ['1', '2', '3', '4'])->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alunos', function (Blueprint $table) {
            // Revertendo a alteração para string
            $table->string('estagio_do_tcc')->change();
        });
    }
}
