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
        Schema::table('orientadores', function (Blueprint $table) {
         
            $table->string('password')->nullable(); // Adiciona o campo de senha
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orientadores', function (Blueprint $table) {
            $table->dropColumn(['email', 'password']); // Remove os campos caso a migração seja revertida
        });
    }
};
