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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();

           

            $table->string('kennel_name');
            $table->string('email');
            $table->string('slug')->unique(); // slug creted in vendor modal file in
            $table->string('owner_First_neame')->nullable();
            $table->string('owner_last_name')->nullable();
            $table->string('location')->nullable();
            $table->string('kennel_affiliations')->nullable();
            $table->string('registration_number')->nullable();
            $table->text('vendor_about')->nullable();
            $table->string('established_year')->nullable();

            $table->string('number_of_litters')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('phone')->nullable();
            $table->string('breeds')->nullable();
            $table->string('health_check')->nullable();
            $table->string('how_many_champions')->nullable();
            $table->string('website')->nullable();
            $table->string('instagram_url')->nullable();
            
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('kennel_img')->nullable();
            $table->string('recent_img')->nullable();
            $table->string('multiple_img')->nullable();
            $table->string('agree')->nullable();

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
        Schema::dropIfExists('vendors');
    }
};
