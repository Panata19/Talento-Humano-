<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformacionLaboralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacion_laborals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trabajador_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('motivacion');
            $table->string('nro_informe');
            $table->foreignId('cargo_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('servicio_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('regimen_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('informacion_laborals');
    }
}
