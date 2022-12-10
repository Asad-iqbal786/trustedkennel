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
        Schema::create('puppy_applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('family_and_home')->nullable();
            $table->string('residence')->nullable();
            $table->string('fenced')->nullable();
            $table->string('house_member')->nullable();
            $table->string('special_person')->nullable();
            $table->string('why_you_chose_this_breeds')->nullable();
            $table->string('puppy_experience')->nullable();
            $table->string('many_dogs')->nullable();
            $table->string('raised_a_puppy')->nullable();
            $table->string('surrendered_a_dog')->nullable();
            $table->string('how_you_plan_puppy')->nullable();
            $table->string('living_situation_puppy')->nullable();
            $table->string('puppy_night')->nullable();
            $table->string('puppy_training')->nullable();
            $table->string('socialization')->nullable();
            $table->string('plan_new_dog')->nullable();
            $table->string('plan_for_anyother_dog')->nullable();
            $table->string('patience_level')->nullable();
            $table->string('tell_us_more')->nullable();
            $table->string('color')->nullable();
            $table->string('gender')->nullable();
            $table->string('ideal_time')->nullable();
            $table->string('agree')->nullable();
            $table->string('signature')->nullable();
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
        Schema::dropIfExists('puppy_applications');
    }
};
