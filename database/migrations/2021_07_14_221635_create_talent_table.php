<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talent', function (Blueprint $table) {
            $table->id();
            $table->string('profile_url')->nullable();
            $table->string('qualifications')->nullable();
            $table->string('scheme')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('email')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();


            $table->integer('age')->nullable();

            $table->string('languages')->nullable();
            $table->string('city_id')->nullable();
            $table->string('genotype')->nullable();
            $table->string('blood_group')->nullable();
            $table->text('sports')->nullable();
            $table->text('positions')->nullable();
            $table->text('educational_background')->nullable();
            $table->string('nationality')->nullable();
            $table->float('height')->nullable();
            $table->float('weight')->nullable();
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
        Schema::dropIfExists('talent');
    }
}
