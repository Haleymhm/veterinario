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
            $table->bigIncrements('id');
            $table->char('veterinary_uid',36)->index();
            $table->char('uid',36)->unique()->index();
            $table->char('rut',10);
            $table->string('nameowner',150);
            $table->string('mobile',12);
            $table->string('phone',12)->nullable();
            $table->string('email',120);
            $table->integer('idcomuna');
            $table->integer('idregion');
            $table->string('address',250);

            $table->timestamps();
            $table->softDeletes();
            $table->foreign('veterinary_uid')->references('uid')->on('veterinaries');
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
