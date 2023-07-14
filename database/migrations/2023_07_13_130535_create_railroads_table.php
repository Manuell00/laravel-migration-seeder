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
        // Inserisco i valori dello schema
        Schema::create('railroads', function (Blueprint $table) {
            $table->id();

            $table->string('company', 64);
            $table->string('station_start', 64);
            $table->string('station_arrive', 64);
            $table->dateTime('hour_start');
            $table->dateTime('hour_arrive');
            $table->string('train_code', 10)->unique();
            $table->integer('carriage_number');
            $table->boolean('in_time')->default(true);
            $table->boolean('cancelled')->default(false);


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
        Schema::dropIfExists('railroads');
    }
};
