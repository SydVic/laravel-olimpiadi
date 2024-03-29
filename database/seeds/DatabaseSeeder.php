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
        $this->call(NationsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(AthletesTableSeeder::class);

    }
}
