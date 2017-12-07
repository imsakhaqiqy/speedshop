<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnPembayaranDllAddTableOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('orders', function($table){
        $table->text('address')->after('customer_id');
        $table->enum('delivery_method', ['jne', 'j&t', 'gojek'])->after('address');
        $table->enum('payment_method', ['mandiri', 'bri', 'bca'])->after('delivery_method');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('orders', function($table){
        $table->dropColumn(['address','delivery_method','payment_method']);
      });
    }
}
