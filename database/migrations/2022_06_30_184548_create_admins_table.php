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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            // $table->string('type');
            // $table->string('vendor_type')->nullable();
            // $table->decimal('total_sale')->nullable();
            // $table->decimal('commission')->nullable();
            $table->string('mobile');
            $table->string('email')->unique();
            $table->string('password');
            // $table->string('admin_image')->nullable();
            $table->string('image')->nullable();
            // $table->tinyInteger('status');
            // $table->tinyInteger('approved')->nullable();
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
        Schema::dropIfExists('admins');
    }
};
