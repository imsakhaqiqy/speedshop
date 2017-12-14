<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->delete();
        $products = [
          ['id' => 1, 'name' => 'TAMENG KNALPOT MIO', 'image' => 'tamengknalpotmio.jpg', 'description' => 'COVER PELINDUNG TAMENG KNALPOT MIO SOUL MIO 2008 SMILE ORIGINAL YAMAHA',
          'stock' => 5, 'minimum_stock' => 5, 'amount' => '10000.00', 'family_id' => 1, 'category_id' => 1, 'unit_id' => 1,
          'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 2, 'name' => 'TAMENG KNALPOT BEAT', 'image' => 'tamengknalpotbeat.jpg', 'description' => 'COVER PELINDUNG TAMENG KNALPOT BEAT 2008 ORIGINAL HONDA',
          'stock' => 5, 'minimum_stock' => 5, 'amount' => '20000.00', 'family_id' => 1, 'category_id' => 1, 'unit_id' => 1,
          'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 3, 'name' => 'CORONG KNALPOT UNIVERSAL', 'image' => 'corongknalpot.jpg', 'description' => '', 'stock' => 5, 'minimum_stock' => 5, 'amount' => '30000.00', 'family_id' => 1, 'category_id' => 2, 'unit_id' => 1,
          'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 4, 'name' => 'SELANG REM MORIN', 'image' => 'selangrem.jpg', 'description' => '', 'stock' => 5, 'minimum_stock' => 5, 'amount' => '40000.00', 'family_id' => 2, 'category_id' => 3, 'unit_id' => 1,
          'creator' => 1, 'created_a' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 5, 'name' => 'SELANG REM PSI', 'image' => 'selangrempsi.jpg', 'description' => '', 'stock' => 5, 'minimum_stock' => 5, 'amount' => '50000.00', 'family_id' => 2, 'category_id' => 3, 'unit_id' => 1,
          'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 6, 'name' => 'HANDLE REM TWO TONE', 'image' => 'handleremtwotone.jpg', 'description' => '', 'stock' => 5, 'minimum_stock' => 5, 'amount' => '60000.00', 'family_id' => 2, 'category_id' => 4, 'unit_id' => 1,
          'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 7, 'name' => 'HANDLE REM CRG', 'image' => 'handleremcrg.jpg', 'description' => '', 'stock' => 5, 'minimum_stock' => 5, 'amount' => '70000.00', 'family_id' => 2, 'category_id' => 4, 'unit_id' => 1,
          'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 8, 'name' => 'MUR AS RODA BELAKANG YAMAHA', 'image' => 'murasrodabelakangyamaha.jpg', 'description' => '', 'stock' => 5, 'minimum_stock' => 5, 'amount' => '80000.00', 'family_id' => 3, 'category_id' => 5, 'unit_id' => 1,
          'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 9, 'name' => 'MUR AS RODA BELAKANG HONDA', 'image' => 'murasrodabelakanghonda.jpg', 'description' => '', 'stock' => 5, 'minimum_stock' => 5, 'amount' => '90000.00', 'family_id' => 3, 'category_id' => 5, 'unit_id' => 1,
          'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 10, 'name' => 'BAUT PROBOLT BLUE', 'image' => 'bautproboltblue.jpg', 'description' => '', 'stock' => 5, 'minimum_stock' => 5, 'amount' => '100000.00', 'family_id' => 3, 'category_id' => 6, 'unit_id' => 1,
          'creator' => 1, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
        ];

        \DB::table('products')->insert($products);
    }
}
