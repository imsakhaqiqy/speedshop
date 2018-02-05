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
          ['id' => 1, 'name' => 'KULIT JOK X-RIDE', 'image' => '1515782463.jpg', 'description' => 'Kulit original motor yamaha x-ride untuk universal motor matic.',
          'stock' => 5, 'minimum_stock' => 1, 'amount' => '120000.00', 'family_id' => 12, 'category_id' => 29, 'unit_id' => 1,
          'creator' => 2, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 2, 'name' => 'SEIN MIO MX', 'image' => '1515785000.jpg', 'description' => 'Lampu sein untuk mio sporty dan smile sudah berikut lampu dan plug and play',
          'stock' => 5, 'minimum_stock' => 1, 'amount' => '150000.00', 'family_id' => 13, 'category_id' => 30, 'unit_id' => 1,
          'creator' => 2, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 3, 'name' => 'Tameng knalpot zoomer', 'image' => '1515785179.jpg', 'description' => 'Tameng knalpot zoomer blue dan rainbow xxx untuk motor honda beat dan scoopy', 
          'stock' => 5, 'minimum_stock' => 1, 'amount' => '220000.00', 'family_id' => 1, 'category_id' => 1, 'unit_id' => 1,
          'creator' => 2, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 4, 'name' => 'Handgrip', 'image' => '1515785301.jpg', 'description' => 'Handgrip merk fastbike motif bintang untuk universal motor', 
          'stock' => 5, 'minimum_stock' => 1, 'amount' => '50000.00', 'family_id' => 6, 'category_id' => 12, 'unit_id' => 1,
          'creator' => 2, 'created_a' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
          ['id' => 5, 'name' => 'Tutup kipas beat fi', 'image' => '1515785513.jpg', 'description' => 'Tutup kipas karbon untuk motor honda beat fi', 
          'stock' => 5, 'minimum_stock' => 1, 'amount' => '70000.00', 'family_id' => 14, 'category_id' => 31, 'unit_id' => 1,
          'creator' => 2, 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s'), 'deleted' => 0],
        ];

        \DB::table('products')->insert($products);
    }
}
