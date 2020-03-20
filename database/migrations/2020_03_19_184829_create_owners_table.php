<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->char('uid',36);
            $table->char('rut',10);
            $table->string('nameowner',150);
            $table->string('mobile',12);
            $table->string('phone',12);
            $table->string('email',120);
            $table->string('address',250);
            $table->integer('idcomuna');
            $table->integer('idregion');
            

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
        Schema::dropIfExists('owner');
    }
}
