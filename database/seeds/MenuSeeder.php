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
            'url' => '',
        ]);

        DB::table('tm_menu')->insert([
            'name' => 'User Web Registration',
            'module_id' => '1',
            'url' => '',
        ]);

        DB::table('tm_menu')->insert([
            'name' => 'Product Category',
            'module_id' => '2',
            'url' => '',
        ]);

        DB::table('tm_menu')->insert([
            'name' => 'Product',
            'module_id' => '2',
            'url' => '',
        ]);

        DB::table('tm_menu')->insert([
            'name' => 'Partner/Company',
            'module_id' => '2',
            'url' => '',
        ]);

        DB::table('tm_menu')->insert([
            'name' => 'Payment Type',
            'module_id' => '2',
            'url' => '',
        ]);

        DB::table('tm_menu')->insert([
            'name' => 'Payment Method',
            'module_id' => '2',
            'url' => '',
        ]);

    }
}
