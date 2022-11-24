<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HematologiaCompleta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hematologia_completa', function (Blueprint $table) {
            $table->id();
           $table->unsignedBigInteger('pacientes_id');
           ;
            $table->string('hemoglobina');
            $table->string('hematocrito');
            $table->string('leucocitosT');
            $table->string('plaquetas');
            $table->string('neutrofilosS');
            $table->string('neutrofilosB');
            $table->string('linfocitos');
            $table->string('monocitos');
            $table->string('eosinofilos');
            $table->string('basofilos')->nullable();
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
 
        Schema::dropIfExists('hematologia_completa');
        
        Schema::disableForeignKeyConstraints();
    }
}
