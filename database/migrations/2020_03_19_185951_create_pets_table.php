<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->char('uid',36);
            $table->char('rutowner',10)->comment('Propietario de la Mascota');;
            $table->string('namepet',150)->comment('Nombre de la Mascota');
            $table->date('birthday')->comment('Fecha de Nacimiento de la Mascota');
            $table->string('kind',150)->comment('Tipo de Mascota');
            $table->integer('idbreed')->comment('Raza de la Mascota');
            $table->integer('gender')->comment('Genero de la Mascota');
            $table->string('color',150)->comment('Rasgos de la Piel/Pelaje');
            $table->string('holding',150)->comment('Para que ocupa la mascota');
            $table->string('procurement',150)->comment('Como Obtuvo la mascota');
            $table->string('microchip',150);
            

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
