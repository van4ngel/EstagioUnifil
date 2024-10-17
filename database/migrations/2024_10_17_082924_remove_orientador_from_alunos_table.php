<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveOrientadorFromAlunosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('alunos', function (Blueprint $table) {
            $table->dropColumn('orientador'); // Remove a coluna 'orientador'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('alunos', function (Blueprint $table) {
            $table->string('orientador')->nullable(); // Recria a coluna caso precise reverter
        });
    }
}
