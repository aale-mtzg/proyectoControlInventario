<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('activos', function (Blueprint $table) {
            $table->id('id_activo');
            $table->string('numero_serial',10);
            $table->string('numero_serial_dispositivo',10);
            $table->string('numero_serial_tecNM',10);
            $table->smallInteger('tipo_activo');
            $table->string('nombre_activo', 50);
            $table->timestamps();
            $table->dateTime('fecha_alta');
            $table->string('marca', 50);
            $table->string('modelo', 50);
            $table->string('color', 50);
            $table->string('descripcion', 50)->nullable();
            $table->binary('imagen')->nullable();
            $table->binary('codigo_qr');
            $table->smallInteger('tipo_ubicacion');
            $table->string('nombre_ubicacion', 50);
            $table->smallInteger('tipo_estatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activos');
    }
}
