<?php

use Illuminate\Database\Seeder;
use App\Language;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::create([
            'name' => 'Русский',
            'description' => ''
        ]);

        Language::create([
            'name' => 'Английский',
            'description' => ''
        ]);

    }
}
