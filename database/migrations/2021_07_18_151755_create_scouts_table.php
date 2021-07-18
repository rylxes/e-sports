<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scouts', function (Blueprint $table) {
            $table->id();
            $table->string('profile_url')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('scouting_age')->nullable();
            $table->string('scouting_gender')->nullable();
            $table->text('sports')->nullable();
            $table->text('specialization')->nullable();
            $table->text('language')->nullable();
            $table->text('nationality')->nullable();
            $table->string('city_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('email')->nullable();
            $table->string('employment_type')->nullable();
            $table->string('scouting_level')->nullable();
            $table->string('qualifications')->nullable();
            $table->string('team_club')->nullable();
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
        Schema::dropIfExists('scouts');
    }
}
