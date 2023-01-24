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
        Schema::create('checkins', function (Blueprint $table) {
            $table->id();

            $table->foreignId('location_id')->constrained();

            $table->enum('stage',['new','sent','done','error'])->default('new');
            $table->date('checkin_at');

            $table->enum('type',['real_time','end_of_day','no_travel_today']);
            $table->integer('sequence')->nullable();

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
        Schema::dropIfExists('checkins');
    }
};
