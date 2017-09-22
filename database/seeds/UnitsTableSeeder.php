<?php

use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('units')->delete();
      $units = [
        ['id'=>1, 'name'=>'Pcs', 'creator'=> 1, 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s'), 'deleted' => 0],
        ['id'=>2, 'name'=>'Volume', 'creator'=> 1, 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s'), 'deleted' => 0],
        ['id'=>3, 'name'=>'Meter', 'creator'=> 1,'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s'), 'deleted' => 0]
      ];

      \DB::table('units')->insert($units);
    }
}
