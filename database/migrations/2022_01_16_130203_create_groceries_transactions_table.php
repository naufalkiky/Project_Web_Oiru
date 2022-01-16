<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroceriesTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groceries_transactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('groceries_id');
            $table->foreign('groceries_id')->references('id')->on('groceries')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('quantity');
            $table->integer('total_bage_points');
            $table->string('note')->default('');
            $table->string('status')->default('Belum diverifikasi');
            $table->integer('invoice_number')->default(0);
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
        Schema::dropIfExists('groceries_transactions');
    }
}
