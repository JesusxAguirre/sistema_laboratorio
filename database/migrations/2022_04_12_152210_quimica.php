<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Quimica extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quimica', function (Blueprint $table) {
            $table->id();
           $table->unsignedBigInteger('pacientes_id');
           $table->string('glucosa')->nullable();
           $table->string('urea')->nullable();
           $table->string('creatinina')->nullable();
            $table->string('alt')->nullable();
            $table->string('ast')->nullable();
            $table->string('ggt')->nullable();
            $table->string('LDH')->nullable();
            $table->string('fosfatasa')->nullable();
            $table->string('amilasa')->nullable();
            $table->string('lipasa')->nullable();
            $table->string('bilirrubinaT')->nullable();
            $table->string('bilirrubinaD')->nullable();
            $table->string('bilirrubinaI')->nullable();
            $table->string('proteinasT')->nullable();
            $table->string('albumina')->nullable();
            $table->string('globulinas')->nullable();
            $table->string('relacionag')->nullable();
            $table->string('colesterolT')->nullable();
            $table->string('calcio')->nullable();
            $table->string('fosforo')->nullable(); 
            $table->string('sodio')->nullable();
            $table->string('cloro')->nullable();
            $table->string('potasio')->nullable();
           
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
 
        Schema::dropIfExists('quimica');
        
        Schema::disableForeignKeyConstraints();
    }
}
