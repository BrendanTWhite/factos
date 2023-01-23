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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('place_id')->constrained();

            $table->string('description');
            $table->dateTime('last_visited_at');
            $table->dateTime('starred_at')->nullable();
            $table->string('address');
            $table->string('google_type');
            $table->double('latitude');
            $table->double('longitude');
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
        Schema::dropIfExists('locations');
    }
};
