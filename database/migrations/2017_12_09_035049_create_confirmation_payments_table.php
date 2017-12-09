<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfirmationPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirmation_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id');
            $table->date('transfer_date');
            $table->string('transfer_name');
            $table->decimal('amount',10,2);
            $table->integer('status');
            $table->timestamps();
            $table->integer('deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('confirmation_payments');
    }
}
