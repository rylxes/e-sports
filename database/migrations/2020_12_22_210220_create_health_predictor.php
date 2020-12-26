<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthPredictor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_predictor', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('blood_group')->nullable();
            $table->boolean('is_hereditary_issue')->nullable();
            $table->boolean('is_current_health_injury')->nullable();
            $table->boolean('is_receiving_treatment')->nullable();
            $table->boolean('is_long_term_injury')->nullable();
            $table->string('hereditary_issue')->nullable();
            $table->string('long_term_injury')->nullable();
            $table->string('treatment_type')->nullable();
            $table->string('current_health_injury')->nullable();
            $table->boolean('is_personal_health_challenge')->nullable();
            $table->string('personal_health_challenge')->nullable();
            $table->enum('injury_seriousness',['Minor','Medium','Major'])->nullable();
            $table->enum('medical_treatment',['Specialist','Traditional'])->nullable();
            $table->enum('injury_location',['On-Field','Off-Field'])->nullable();
            $table->string('genotype')->nullable();
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
        Schema::dropIfExists('health_predictor');
    }
}
