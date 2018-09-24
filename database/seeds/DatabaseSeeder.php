    <?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // DB::table('superadmin_account')->insert([
        //     'name' => 'Administrator',
        //     'email' => 'admin@proyekmagang.com',
        //     'password' => bcrypt('admin')
        // ]);

        DB::table('tm_role')->insert([
            'name' => 'Administrator',
            'level' => 'Admin',
            'description' => 'Role for administrator'
        ]);

        DB::table('tm_role')->insert([
            'name' => 'User',
            'level' => 'User',
            'description' => 'Role for user'
        ]);

        $this->call([
            UserSeeder::class,
        ]);

        $this->call([
            ModuleSeeder::class,
        ]);

        $this->call([
            MenuSeeder::class,
        ]);
        
        $this->call([
            AccessSeeder::class,
        ]);
    }
}
