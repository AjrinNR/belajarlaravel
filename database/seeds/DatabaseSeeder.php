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
        $this->call(Moad::class);
        $this->call(SiswaSeeder::class);
        $this->call(PostsTableSeeder::class);

    }
}
