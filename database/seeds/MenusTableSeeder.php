<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('menus')->delete();
      $users = [
        ['id'=>1, 'modules'=>'Customer', 'urutan'=>0, 'parent'=>0, 'icon'=>'', 'description'=>''],
        ['id'=>2, 'modules'=>'Supplier', 'urutan'=>0, 'parent'=>0, 'icon'=>'', 'description'=>''],
      ];

      \DB::table('menus')->insert($users);
    }
}
