<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 30);
            $table->string('arrival_station', 60);
            $table->string('departure_station', 60);
            $table->time('time_of_departure');
            $table->time('time_of_arrival');
            $table->string('train_code', 10);
            $table->tinyInteger('number_of_coach');
            $table->boolean('is_in_time');
            $table->boolean('is_deleted');
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
        Schema::dropIfExists('trains');
    }
};
