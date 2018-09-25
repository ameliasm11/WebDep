<?php

use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tm_category_product')->insert([
          'name' => 'Futsal',
          'description' => 'Pemesanan Tempat Futsal',
      ]);

      DB::table('tm_category_product')->insert([
          'name' => 'Hiburan',
          'description' => 'Penyewaan hiburan Organ, Sandiwara',
      ]);

      DB::table('tm_category_product')->insert([
          'name' => 'Hotel',
          'description' => 'Pemesanan Hotel',
      ]);

      DB::table('tm_category_product')->insert([
          'name' => 'Restoran',
          'description' => 'Pemesanan Restoran',
      ]);

      DB::table('tm_category_product')->insert([
          'name' => 'Tiket',
          'description' => 'Tiket Pesawat, Tiket Kereta, Tiket Travel',
      ]);
    }
}
