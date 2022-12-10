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
        Schema::create('chat_messages', function (Blueprint $table) {
            $table->id();
            $table->integer('sender_id');
            $table->integer('receiver_id');
            $table->string('messages')->nullable();
            $table->string('images')->nullable();
            $table->tinyInteger('status')->default(0);


            // $table->integer('chat_id')->nullable();
            // $table->integer('user_id')->nullable();
            // $table->integer('vendor_id')->nullable();
            // $table->integer('product_id')->nullable();
            // $table->longText('messages')->nullable();
            // $table->string('text')->nullable();
            // $table->string('images')->nullable();
            // $table->tinyInteger('status');
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
        Schema::dropIfExists('chat_messages');
    }
};
