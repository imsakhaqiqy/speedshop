<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->delete();
        $categories = [
          ['id' => 1, 'name' => 'TAMENG KNALPOT', 'amount'=> '10000.00', 'stock'=> '10', 'family_id' => 1, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 2, 'name' => 'CORONG KNALPOT', 'amount'=> '20000.00', 'stock'=> '20', 'family_id' => 1, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 3, 'name' => 'SELANG REM', 'amount'=> '30000.00', 'stock'=> '30', 'family_id' => 2, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 4, 'name' => 'HANDLE REM', 'amount'=> '40000.00', 'stock'=> '40', 'family_id' => 2, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 5, 'name' => 'MUR AS RODA BELAKANG', 'amount'=> '50000.00', 'stock'=> '50', 'family_id' => 3, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 6, 'name' => 'BAUT PROBOLT BODY', 'amount'=> '60000.00', 'stock'=> '60', 'family_id' => 3, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 7, 'name' => 'TAMENG DEPAN', 'amount'=> '70000.00', 'stock'=> '70', 'family_id' => 4, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 8, 'name' => 'DEK PARU DAN KOLONG', 'amount'=> '80000.00', 'stock'=> '80', 'family_id' => 4, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 9, 'name' => 'SHOCKBREAKER YSS', 'amount'=> '90000.00', 'stock'=> '90', 'family_id' => 5, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 10, 'name' => 'SHOCKBREAKER FASTBIKES', 'amount'=> '100000.00', 'stock'=> '100', 'family_id' => 5, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 11, 'name' => 'BANDUL ATAU JALU STANG', 'amount'=> '10000.00', 'stock'=> '10', 'family_id' => 6, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 12, 'name' => 'HANDGRIP', 'amount'=> '20000.00', 'stock'=> '20', 'family_id' => 6, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 13, 'name' => 'SPION HONDA', 'amount'=> '30000.00', 'stock'=> '30', 'family_id' => 7, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 14, 'name' => 'SPION YAMAHA', 'amount'=> '40000.00', 'stock'=> '40', 'family_id' => 7, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 15, 'name' => 'VELG YOKO TWO TONE', 'amount'=> '50000.00', 'stock'=> '50', 'family_id' => 8, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
        ];

        \DB::table('categories')->insert($categories);
    }
}
