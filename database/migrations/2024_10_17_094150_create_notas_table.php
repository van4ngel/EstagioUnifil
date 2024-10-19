<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('banca_id'); 
            $table->decimal('nota_orientacao', 5, 2)->nullable();
            $table->decimal('nota_relatorio', 5, 2)->nullable();
            $table->decimal('nota_apresentacao', 5, 2)->nullable();
            $table->decimal('media', 5, 2)->nullable();
            $table->timestamps();
            
         
            $table->foreign('banca_id')->references('id')->on('bancas')->onDelete('cascade'); 
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('notas');
    }
}
