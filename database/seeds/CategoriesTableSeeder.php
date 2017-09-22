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
          ['id' => 1, 'name' => 'TAMENG KNALPOT', 'family_id' => 1, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 2, 'name' => 'CORONG KNALPOT', 'family_id' => 1, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 3, 'name' => 'SELANG REM', 'family_id' => 2, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 4, 'name' => 'HANDLE REM', 'family_id' => 2, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 5, 'name' => 'MUR AS RODA BELAKANG', 'family_id' => 3, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 6, 'name' => 'BAUT PROBOLT BODY', 'family_id' => 3, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 7, 'name' => 'TAMENG DEPAN', 'family_id' => 4, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 8, 'name' => 'DEK PARU DAN KOLONG', 'family_id' => 4, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 9, 'name' => 'SHOCKBREAKER YSS', 'family_id' => 5, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 10, 'name' => 'SHOCKBREAKER FASTBIKES', 'family_id' => 5, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 11, 'name' => 'BANDUL ATAU JALU STANG', 'family_id' => 6, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 12, 'name' => 'HANDGRIP', 'family_id' => 6, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 13, 'name' => 'SPION HONDA', 'family_id' => 7, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 14, 'name' => 'SPION YAMAHA', 'family_id' => 7, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 15, 'name' => 'VELG YOKO TWO TONE', 'family_id' => 8, 'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
        ];

        \DB::table('categories')->insert($categories);
    }
}
