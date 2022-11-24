<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Urianalisis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urianalisis', function (Blueprint $table) {
            $table->id();
           $table->unsignedBigInteger('pacientes_id');;
           $table->string('color');
           $table->string('hematies');
           $table->string('olor');
            $table->string('leucocitos');
            $table->string('aspecto');
            $table->string('bacterias');
            $table->string('densidad');
            $table->string('otros');
            $table->string('ph');
            $table->string('planas');
            $table->string('glucosa');
            $table->string('transcicionales');
            $table->string('proteinas');
            $table->string('redondasp');
            $table->string('nitritos');
            $table->string('redondasg');
            $table->string('cetonas');
            $table->string('caudadas');
            $table->string('bilirrubina');
            $table->string('cumulos') ;
            $table->string('urobilinogeno');
            $table->string('cilindros');
            $table->string('sangre');
            $table->string('cristales');
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
 
        Schema::dropIfExists('urianalisis');
        
        Schema::disableForeignKeyConstraints();
    }
}
