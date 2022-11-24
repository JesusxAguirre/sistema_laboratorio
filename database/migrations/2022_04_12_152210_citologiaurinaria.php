<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CitologiaUrinaria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citologiaurinaria', function (Blueprint $table) {
            $table->id();
           $table->unsignedBigInteger('pacientes_id');;
           $table->string('extraccion');
            $table->string('diagnostico'); 
            $table->string('imagen1')->nullable();
            $table->string('imagen2')->nullable();
            $table->string('imagen3')->nullable();
            $table->string('imagen4')->nullable();
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
 
        Schema::dropIfExists('citologiaurinaria');
        
        Schema::disableForeignKeyConstraints();
    }
}
