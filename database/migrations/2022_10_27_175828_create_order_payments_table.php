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
        Schema::create('order_payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->integer('admin_id');
            $table->integer('puppy_id');
            $table->integer('user_id');
            $table->string('price')->nullable();
            $table->string('grand_total')->nullable();
            $table->string('invoice_number')->nullable();
            $table->string('shipping_charges')->nullable();
            $table->string('tex')->nullable();
            $table->string('reservation_charges')->nullable();
            $table->string('admin_commission')->nullable();       
            $table->enum('status',['accept','reservation_booked','rejact']);
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
        Schema::dropIfExists('order_payments');
    }
};
