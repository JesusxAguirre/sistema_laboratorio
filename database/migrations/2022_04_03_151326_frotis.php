<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Frotis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frotis', function (Blueprint $table) {
            $table->id();
           $table->unsignedBigInteger('pacientes_id');
           $table->longText('observacione');
           $table->longText('observacionl');
           $table->longText('observaciont');
           $table->longText('observacion');
           $table->date('fecha');
            $table->timestamps();
            $table->foreign("pacientes_id")
            ->references("id")
            ->on("pacientes")->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::enableForeignKeyConstraints();
 
        Schema::dropIfExists('frotis');
        
        Schema::disableForeignKeyConstraints();
    }
}
