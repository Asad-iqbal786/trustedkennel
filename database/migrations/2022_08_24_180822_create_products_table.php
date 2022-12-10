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
           
            $table->unsignedBigInteger('vendor_id');
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade');

            $table->unsignedBigInteger('produt_type_id');
            $table->foreign('produt_type_id')->references('id')->on('product_types')->onDelete('cascade');
            
            $table->string('product_name');
            $table->date('date_of_birth');
            $table->enum('gender',['Male','Female']);
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('price');
            $table->string('reservation')->nullable();
            $table->string('shipping_fee');
            $table->string('description');
            $table->string('product_images');

            $table->string('sire_name');
            $table->string('sire_title');
            $table->string('sire_registration');
            $table->string('pedigree_link');
            $table->string('sire_height');
            $table->string('sire_weight');
            $table->string('sire_health_tests_conducted');
            $table->string('sire_image');

            $table->string('dam_name');
            $table->string('dam_title');
            $table->string('dam_registration');
            $table->string('dam_link');
            $table->string('dam_height');
            $table->string('dam_weight');
            $table->string('dam_health_tests_conducted');
            $table->string('dam_image');

            $table->text('reason')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('trending')->default(0);
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
