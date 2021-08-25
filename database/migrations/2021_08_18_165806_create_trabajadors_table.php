<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabajadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajadors', function (Blueprint $table) {
            $table->id();
            $table->text('nombre_completo');
            $table->string('cedula', 20);
            $table->date('fecha_nac');
            $table->string('tipo_sangre');
            $table->string('email')->unique();
            $table->string('direccion');
            $table->string('estado_civil');
            $table->string('nacionalidad');
            $table->integer('n_hijos');
            $table->string('telefono');
            $table->integer('activo');
            $table->string('foto');
            $table->string('curriculo');
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
        Schema::dropIfExists('trabajadors');
    }
}
