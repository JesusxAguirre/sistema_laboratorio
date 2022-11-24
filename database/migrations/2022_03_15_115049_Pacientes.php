<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pacientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('especie');
            $table->string('sexo');
            $table->string('raza');
            $table->string('edad');
            $table->string('remitente');
            $table->string('propietario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
 
        Schema::dropIfExists('pacientes');
        
    }
}

