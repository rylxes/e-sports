<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubAssesment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_assesment', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->boolean('enjoy_practice_routines')->nullable();
            $table->boolean('is_participated_in_competitions')->nullable();
            $table->boolean('is_selected_to_represent')->nullable();
            $table->text('competitions')->nullable();
            $table->text('motivation')->nullable();
            $table->text('achievement')->nullable();
            $table->string('admired_sportsperson')->nullable();
            $table->text('top_athlete_plans')->nullable();
            $table->string('current_team')->nullable();
            $table->timestamp('date_joined_team')->nullable();
            $table->string('favourite_jersey_number')->nullable();
            $table->string('nickname')->nullable();
            $table->string('favourite_sports_team')->nullable();
            $table->string('why_like_team')->nullable();
            $table->integer('no_of_teams_played_for')->nullable();
            $table->string('why_leave')->nullable();
            $table->boolean('can_improve_in_team')->nullable();
            $table->boolean('is_like_coach_team')->nullable();
            $table->enum('positions_play',['Forward','Midfielder','Defender','Goalkeeper'])->nullable();
            $table->enum('preferred_foot',['Left','Right'])->nullable();
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
        Schema::dropIfExists('club_assesment');
    }
}
