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
        //$this->call(UsersTableSeeder::class);

        $this->call(AuthorsTableSeeder::class);
        $this->call(PublisherTableSeeder::class);
        $this->call(CoversTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(CouponsTableSeeder::class);
    }
}
