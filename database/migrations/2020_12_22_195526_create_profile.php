<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_details', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('first_name')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('mother_maiden_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('height')->nullable();
            $table->string('body_weight')->nullable();
            $table->string('phone')->nullable();
            $table->string('sm_handle')->nullable();
            $table->enum('highest_education',['Primary','Secondary','Tertiary','Post-Graduate'])->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('school')->nullable();
            $table->string('career_preference')->nullable();
            $table->boolean('is_still_schooling')->nullable();
            $table->text('contact_address')->nullable();
            $table->timestamp('dob')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('state_of_origin')->nullable();
            $table->integer('zipcode')->nullable();
            $table->timestamps();
           // $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile');
    }
}
