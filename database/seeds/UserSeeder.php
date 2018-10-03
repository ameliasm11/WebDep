<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
     {
        DB::table('tm_user')->insert([
            'name' => 'Administrator 1',
            'role_id' => '1',
            'email' => 'admin@depapps.com',
            'password' => bcrypt('admin')
        ]);

        DB::table('tm_user')->insert([
            'name' => 'User',
            'role_id' => '2',
            'email' => 'user@depapps.com',
            'password' => bcrypt('admin')
        ]);
    }
}
