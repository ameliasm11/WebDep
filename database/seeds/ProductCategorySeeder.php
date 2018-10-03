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
          'name' => 'Hiburan',
          'description' => 'Penyewaan Organ, Penyewaan Sandiwara',
      ]);

      DB::table('tm_category_product')->insert([
          'name' => 'Tempat',
          'description' => 'Pemesanan Tempat Futsal, Pemesanan Hotel, Pemesanan Restoran',
      ]);

      DB::table('tm_category_product')->insert([
          'name' => 'Tiket',
          'description' => 'Pemesanan Tiket Kereta Api, Pemesanan Tiket Pesawat, Pemesanan Tiket Travel',
      ]);
    }
}
