<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillReport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_report', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->enum('speed', ['A', 'B', 'C', 'D', 'E', 'F'])->nullable();
            $table->enum('passing', ['A', 'B', 'C', 'D', 'E', 'F'])->nullable();
            $table->enum('shooting', ['A', 'B', 'C', 'D', 'E', 'F'])->nullable();
            $table->enum('dribbling', ['A', 'B', 'C', 'D', 'E', 'F'])->nullable();
            $table->enum('heading', ['A', 'B', 'C', 'D', 'E', 'F'])->nullable();
            $table->enum('ball_control', ['A', 'B', 'C', 'D', 'E', 'F'])->nullable();
            $table->enum('fitness', ['A', 'B', 'C', 'D', 'E', 'F'])->nullable();
            $table->enum('movement', ['A', 'B', 'C', 'D', 'E', 'F'])->nullable();
            $table->enum('awareness', ['A', 'B', 'C', 'D', 'E', 'F'])->nullable();
            $table->enum('decisions', ['A', 'B', 'C', 'D', 'E', 'F'])->nullable();
            $table->enum('workrate', ['A', 'B', 'C', 'D', 'E', 'F'])->nullable();
            $table->enum('strength', ['A', 'B', 'C', 'D', 'E', 'F'])->nullable();
            $table->enum('crossing', ['A', 'B', 'C', 'D', 'E', 'F'])->nullable();
            $table->enum('finishing', ['A', 'B', 'C', 'D', 'E', 'F'])->nullable();
            $table->enum('positioning', ['A', 'B', 'C', 'D', 'E', 'F'])->nullable();
            $table->enum('anticipation', ['A', 'B', 'C', 'D', 'E', 'F'])->nullable();
            $table->string('total')->nullable();
            $table->enum('overall_grade', ['A', 'B', 'C', 'D', 'E', 'F'])->nullable();
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
        Schema::dropIfExists('skill_report');
    }
}
