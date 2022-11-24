<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Hematologia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hematologia', function (Blueprint $table) {
            $table->id();
           $table->unsignedBigInteger('pacientes_id');
           
            $table->string('eritrocitos');
            $table->string('hemoglobina');
            $table->string('hematocrito');
            $table->string('vcm');
            $table->string('chcm');
            $table->string('reticulocitos');
            $table->string('leucocitosT');
            $table->string('plaquetas');
            $table->string('proteinasPT');
            $table->string('neutrofilosS');
            $table->string('neutrofilosB');
            $table->string('linfocitos');
            $table->string('monocitos');
            $table->string('eosinofilos');
            $table->string('observacion')->nullable();
            
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
 
        Schema::dropIfExists('hematologia');
        
        Schema::disableForeignKeyConstraints();
    }
}
