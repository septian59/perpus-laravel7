<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(AdminUserSeeder::class);
        $this->call(AuthorsTableSeeder::class);
        $this->call(BooksTableSeeder::class);
    }
}
