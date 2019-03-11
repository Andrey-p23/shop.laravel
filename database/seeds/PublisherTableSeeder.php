<?php

use Illuminate\Database\Seeder;
use App\Publisher;

class PublisherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publisher::create([
            'name' => 'Манн, Иванов и Фербер',
            'description' => ''
        ]);

        Publisher::create([
            'name' => 'Альпина Паблишер',
            'description' => ''
        ]);

        Publisher::create([
            'name' => 'Олимп-Бизнес',
            'description' => ''
        ]);

        Publisher::create([
            'name' => 'Эксмо',
            'description' => ''
        ]);

        Publisher::create([
            'name' => 'Прайм-Еврознак',
            'description' => ''
        ]);

        Publisher::create([
            'name' => 'Питер',
            'description' => ''
        ]);

        Publisher::create([
            'name' => 'Капитал, Курпатов А.В.',
            'description' => ''
        ]);

    }
}
