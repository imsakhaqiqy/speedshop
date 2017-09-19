<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditTableMenus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('menus', function($table){
          $table->integer('urutan')->after('link_modules');
          $table->integer('parent')->after('urutan');
          $table->string('icon')->after('parent');
          $table->string('description')->after('icon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menus', function($table){
          $table->dropColumn(['urutan','parent','icon','description']);
        });
    }
}
