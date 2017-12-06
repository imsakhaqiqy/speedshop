<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnPricePerItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('order__details', function($table){
        $table->decimal('price_per_item',10,2)->after('quantity');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('order__details', function($table){
        $table->dropColumn(['price_per_item']);
      });
    }
}
