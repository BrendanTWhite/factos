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
        Schema::create('faves', function (Blueprint $table) {
            $table->id();

            $table->string('name');


            $table->enum('type',['real_time','end_of_day','no_travel_today']);
            $table->integer('sequence');
            $table->string('address');
            $table->string('google_type');
            $table->double('latitude');
            $table->double('longitude');
            $table->foreignId('place_id')->constrained();
            $table->boolean('major_shopping_centre');            

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
        Schema::dropIfExists('faves');
    }
};
