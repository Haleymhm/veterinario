<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->char('uid',36)->unique()->index();
            $table->char('veterinary_uid',36)->index();
            $table->dateTime('date_appointment');
            $table->integer('appointment_type_id');
            $table->char('rutowner',10);
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
        Schema::dropIfExists('appointments');
    }
}
