<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tm_menu')->insert([
            'name' => 'Manajemen Role',
            'module_id' => '1',
            'url' => 'superadmin.role.index',
        ]);

        DB::table('tm_menu')->insert([
            'name' => 'Registrasi User Web',
            'module_id' => '1',
            'url' => 'superadmin.user.data',
        ]);

        DB::table('tm_menu')->insert([
            'name' => 'Kategori Produk',
            'module_id' => '2',
            'url' => 'category',
        ]);

        DB::table('tm_menu')->insert([
            'name' => 'Produk',
            'module_id' => '2',
            'url' => 'superadmin.futsal.jadwal',
        ]);

        DB::table('tm_menu')->insert([
            'name' => 'Perusahaan',
            'module_id' => '2',
            'url' => 'partner_company',
        ]);

        DB::table('tm_menu')->insert([
            'name' => 'Tipe Pembayaran',
            'module_id' => '2',
            'url' => 'payment_type',
        ]);

        DB::table('tm_menu')->insert([
            'name' => 'Metode Pembayaran',
            'module_id' => '2',
            'url' => 'payment_method',
        ]);

        DB::table('tm_menu')->insert([
            'name' => 'Order',
            'module_id' => '3',
            'url' => 'order',
        ]);

    }
}
