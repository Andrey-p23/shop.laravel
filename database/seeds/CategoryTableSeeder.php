<?php

use Illuminate\Database\Seeder;
use App\Category;
use Carbon\Carbon;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Компьютерные технологии', 'slug' => 'computerTech', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Бизнес-литература', 'slug' => 'business', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Популярная психология, саморазвитие', 'slug' => 'selfDevelopment', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Дом и хобби', 'slug' => 'homeAndHoby', 'created_at' => $now, 'updated_at' => $now],
        ]);


    }
}
