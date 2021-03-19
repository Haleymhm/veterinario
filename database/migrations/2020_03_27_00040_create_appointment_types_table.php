<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('uid',36)->unique()->index();
            $table->char('veterinary_uid',36)->index();
            $table->string('name', 100);
            $table->string('color', 8);
            $table->string('icon', 25);
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
        Schema::dropIfExists('appointment_types');
    }
}
