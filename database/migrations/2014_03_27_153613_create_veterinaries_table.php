<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeterinariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veterinaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('uid',36)->unique()->index();
            $table->string('name',150);
            $table->string('address',250);
            $table->string('telephone',12);
            $table->string('movil',12);
            $table->string('logo',200);
            $table->string('email',100);
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
        Schema::dropIfExists('veterinaries');
    }
}
