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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number')->nullable();
            $table->integer('vendor_id');
            // $table->integer('admin_id');
            $table->integer('puppy_id');
            $table->integer('user_id');
            $table->string('price')->nullable();
            $table->string('shipping_charges')->nullable();
            $table->string('tex')->nullable();
            $table->string('reservation_charges')->nullable();
            $table->string('grand_total')->nullable();
            $table->string('admin_commission')->nullable();
            $table->tinyInteger('status')->default(0);
            // $table->enum('status',['Submitted','Processing','Accepted','Rejected','To be reserved','Reserved']);
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
        Schema::dropIfExists('orders');
    }
};
