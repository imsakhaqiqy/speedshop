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
        ['id'=>1, 'name'=>'Pcs', 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        ['id'=>2, 'name'=>'Volume', 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')],
        ['id'=>3, 'name'=>'Meter', 'created_at'=>date('Y-m-d h:i:s'), 'updated_at'=>date('Y-m-d h:i:s')]
      ];

      \DB::table('units')->insert($units);
    }
}
