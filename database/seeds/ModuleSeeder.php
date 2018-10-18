<?php

use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tm_module')->insert([
            'name' => 'Administrator',
            'description' => 'Module',
            'icon' => 'fa fa-users',
            'order' => '1',
            'segment' => 'Administrator'
        ]);

        DB::table('tm_module')->insert([
            'name' => 'Master Data',
            'description' => 'Module',
            'icon' => 'fa fa-tasks',
            'order' => '2',
            'segment' => 'MasterData'
        ]);

        DB::table('tm_module')->insert([
            'name' => 'Report',
            'description' => 'Module',
            'icon' => 'fa fa-file',
            'order' => '3',
            'segment' => 'Report'
        ]);

    }
}
