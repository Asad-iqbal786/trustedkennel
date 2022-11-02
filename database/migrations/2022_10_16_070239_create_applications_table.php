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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
         
            $table->string('home_style')->nullable();
            $table->string('fence')->nullable();
            $table->string('house_members')->nullable();
            $table->string('special_member')->nullable();
            $table->string('other_dog')->nullable();
            $table->string('other_cat')->nullable();
            $table->string('previous_expierience')->nullable();
            $table->string('total_dog')->nullable();
            $table->string('rised_puppy')->nullable();
            $table->string('surrendered_dog')->nullable();
            $table->string('plan_for_other_puppy')->nullable();
            $table->string('how_to_integrate')->nullable();
            $table->string('descrbe_living_secuation')->nullable();
            $table->string('puppu_spent_night')->nullable();
            $table->string('traning_type')->nullable();
            $table->string('socialization')->nullable();
            $table->string('planning_another_puppy')->nullable();
            $table->string('puppies_often_have')->nullable();
            $table->string('please_tell_use_more')->nullable();
            $table->string('coat_color')->nullable();
            $table->string('prefer')->nullable();
            $table->string('when_you_ideal')->nullable();
            $table->string('energy_level')->nullable();
            $table->string('puppy_intended')->nullable();
            $table->string('if_you_checked')->nullable();
            $table->string('email')->nullable();
           

            $table->string('agree')->nullable();
            $table->string('signature')->nullable();
            $table->timestamps();
        });
    }

    // Schema::table('employees', function (Blueprint $table) {
    //     $table->integer('user_id')->unsigned()->after('emp_id');
    //     $table->foreign('user_id')->references('user_id')->on('departments')->onDelete('cascade')->change();
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
};
