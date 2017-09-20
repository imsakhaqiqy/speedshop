<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('roles')->delete();
      $users = [
        ['id'=>1, 'code'=>'SA', 'name'=>'SUPER ADMIN', 'label'=>'Hak akses seluruh sistem'],
        ['id'=>2, 'code'=>'ADM', 'name'=>'ADMINISTRATOR', 'label'=>''],
        ['id'=>3, 'code'=>'MK', 'name'=>'MARKETING', 'label'=>''],
        ['id'=>4, 'code'=>'PST', 'name'=>'POSTINGER', 'label'=>''],
        ['id'=>5, 'code'=>'SL', 'name'=>'SALES', 'label'=>'Sales'],
      ];

      \DB::table('roles')->insert($users);
    }
}
