<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditTableUnit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('units',function(Blueprint $table){
            $table->integer('creator')->after('name');
            $table->integer('deleted')->after('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('units',function(Blueprint $table){
            $table->dropColumn(['creator','deleted']);

        });
    }
}
