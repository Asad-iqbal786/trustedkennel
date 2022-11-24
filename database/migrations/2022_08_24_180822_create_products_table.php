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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
           
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->unsignedBigInteger('admin_id');
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->unsignedBigInteger('produt_type_id');
            $table->foreign('produt_type_id')->references('id')->on('product_types')->onDelete('cascade');
            $table->string('slug')->unique();
            
            $table->string('sire_name');
            $table->string('sire_registration');
            $table->string('sire_pedigree_link');
            $table->string('type');
            $table->string('sire_weight');
            $table->string('sire_height');
            $table->string('sire_health_tests');
            $table->string('dam_name_with_titles');
            $table->string('dam_registration_number');
            $table->string('dam_pedigree_link');
            $table->string('dam_weight');
            $table->string('dam_height');
            $table->string('dam_health_tests_conducted');
            $table->string('description');
            $table->text('reason')->nullable();
            $table->string('image')->nullable();
            $table->enum('gender',['Male','Female']);
            $table->tinyInteger('status');
            $table->tinyInteger('trending');
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
        Schema::dropIfExists('products');
    }
};
