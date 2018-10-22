<?php

use Illuminate\Database\Seeder;

class AccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tm_access')->insert([
          'role_id' => '1',
          'module_id' => '1',
          'menu_id' => '1',
          'do_insert' => '1',
          'do_update' => '1',
          'do_delete' => '1',

      ]);
      DB::table('tm_access')->insert([
          'role_id' => '1',
          'module_id' => '1',
          'menu_id' => '2',
          'do_insert' => '1',
          'do_update' => '1',
          'do_delete' => '1',

      ]);
      DB::table('tm_access')->insert([
          'role_id' => '1',
          'module_id' => '2',
          'menu_id' => '1',
          'do_insert' => '1',
          'do_update' => '1',
          'do_delete' => '1',

      ]);
      DB::table('tm_access')->insert([
          'role_id' => '1',
          'module_id' => '2',
          'menu_id' => '2',
          'do_insert' => '1',
          'do_update' => '1',
          'do_delete' => '1',

      ]);
      DB::table('tm_access')->insert([
          'role_id' => '1',
          'module_id' => '2',
          'menu_id' => '3',
          'do_insert' => '1',
          'do_update' => '1',
          'do_delete' => '1',
      ]);
      DB::table('tm_access')->insert([
          'role_id' => '1',
          'module_id' => '2',
          'menu_id' => '4',
          'do_insert' => '1',
          'do_update' => '1',
          'do_delete' => '1',
      ]);
      DB::table('tm_access')->insert([
          'role_id' => '1',
          'module_id' => '2',
          'menu_id' => '5',
          'do_insert' => '1',
          'do_update' => '1',
          'do_delete' => '1',
      ]);
      DB::table('tm_access')->insert([
          'role_id' => '1',
          'module_id' => '3',
          'menu_id' => '1',
          'do_insert' => '1',
          'do_update' => '1',
          'do_delete' => '1',
      ]);
      DB::table('tm_access')->insert([
          'role_id' => '2',
          'module_id' => '2',
          'menu_id' => '2',
          'do_insert' => '1',
          'do_update' => '1',
          'do_delete' => '1',

      ]);
    }
}
