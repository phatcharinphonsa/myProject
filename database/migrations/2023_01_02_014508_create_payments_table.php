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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('refinance_id');
            $table->integer('payterm_count');
            $table->integer('payment');
            $table->integer('fine')->nullable();
            $table->integer('discount')->nullable();
            $table->string('status');
            $table->timestamps();

            $table->foreign('refinance_id')->references('id')->on('refinance')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
