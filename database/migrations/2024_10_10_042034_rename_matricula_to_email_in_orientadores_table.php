<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameMatriculaToEmailInOrientadoresTable extends Migration
{
    public function up()
    {
        Schema::table('orientadores', function (Blueprint $table) {
            $table->renameColumn('matricula', 'email');
        });
    }

    public function down()
    {
        Schema::table('orientadores', function (Blueprint $table) {
            $table->renameColumn('email', 'matricula');
        });
    }
}
