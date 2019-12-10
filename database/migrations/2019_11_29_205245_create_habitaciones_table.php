<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('precio');
            $table->string('tipo_habitacion',20);
            $table->string('nro_piso',10);
            $table->integer('huesped_id')->unsigned()->nullable(false);
            $table->foreign('huesped_id')->references('id')->on('huespedes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habitaciones');
    }
}
