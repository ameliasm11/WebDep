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
            'name' => 'Role Management',
            'module_id' => '1',
            'url' => 'superadmin.role.index',
        ]);

        DB::table('tm_menu')->insert([
            'name' => 'User Web Registration',
            'module_id' => '1',
            'url' => 'superadmin.user.data',
        ]);

        DB::table('tm_menu')->insert([
            'name' => 'Product Category',
            'module_id' => '2',
            'url' => 'category',
        ]);

        DB::table('tm_menu')->insert([
            'name' => 'Product',
            'module_id' => '2',
            'url' => 'superadmin.futsal.jadwal',
        ]);

        DB::table('tm_menu')->insert([
            'name' => 'Partner/Company',
            'module_id' => '2',
            'url' => 'partner_company',
        ]);

        DB::table('tm_menu')->insert([
            'name' => 'Payment Type',
            'module_id' => '2',
            'url' => 'payment_type',
        ]);

        DB::table('tm_menu')->insert([
            'name' => 'Payment Method',
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
