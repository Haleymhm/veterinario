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
            $table->char('veterinary_uid',36)->index();
            $table->char('uid',36)->unique()->index();
            $table->char('rutowner',10)->comment('Propietario de la Mascota');
            $table->string('namepet',150)->comment('Nombre de la Mascota');
            $table->date('birthday')->comment('Fecha de Nacimiento de la Mascota');
            $table->integer('kind_id')->comment('Especie de la de Mascota');
            $table->integer('race_id')->comment('Raza de la Mascota');
            $table->string('gender',6)->comment('Genero de la Mascota');
            $table->string('color',150)->comment('Rasgos de la Piel/Pelaje');
            $table->string('holding',150)->comment('Para que ocupa la mascota');
            $table->string('procurement',150)->comment('Como Obtuvo la mascota');
            $table->string('microchip',150);
            /*           
            
            */

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
        Schema::dropIfExists('pets');
    }
}
