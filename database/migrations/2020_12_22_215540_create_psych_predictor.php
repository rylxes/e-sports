<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsychPredictor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psych_predictor', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('time_practice_in_week');
            $table->integer('hours_practice_in_week');
            $table->boolean('is_parent_in_support')->nullable();
            $table->boolean('is_team_player')->nullable();

            $table->string('parent_in_support_reason')->nullable();
            $table->string('challenges')->nullable();


            $table->string('greatest_motivation')->nullable();
            $table->string('strength')->nullable();







            $table->string('weakness')->nullable();
            $table->boolean('can_overcome_challenges')->nullable();
           // $table->integer('sports_id')->nullable();
            $table->enum('time_start_sport',['Childhood','Teenager','Adult'])->nullable();
            $table->enum('rating_sports',['1','2','3','4','5'])->nullable();
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
        Schema::dropIfExists('psych_predictor');
    }
}
