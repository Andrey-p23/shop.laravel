<?php

use Illuminate\Database\Seeder;
use App\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Author::create([
            'name' => 'Ричард Кох',
            'description' => ''
        ]);

        Author::create([
            'name' => 'Маршалл Голдсмит',
            'description' => ''
        ]);

        Author::create([
            'name' => 'Марк Мэнсон',
            'description' => ''
        ]);

        Author::create([
            'name' => 'Дмитрий Соколов-Митрич',
            'description' => ''
        ]);

        Author::create([
            'name' => 'Патрик Ленсиони',
            'description' => ''
        ]);

        Author::create([
            'name' => 'Стивен Р. Кови',
            'description' => ''
        ]);

        Author::create([
            'name' => 'Наполеон Хилл',
            'description' => ''
        ]);

        Author::create([
            'name' => 'Хэл Элрод',
            'description' => ''
        ]);

        Author::create([
            'name' => 'Мари Кондо',
            'description' => ''
        ]);

        Author::create([
            'name' => 'Рюта Кавашима',
            'description' => ''
        ]);

        Author::create([
            'name' => 'Андрей Курпатов',
            'description' => ''
        ]);

        Author::create([
            'name' => 'Рохит Бхаргава',
            'description' => ''
        ]);

        Author::create([
            'name' => 'Лоис Блайт',
            'description' => ''
        ]);

        Author::create([
            'name' => 'Никита Непряхин',
            'description' => ''
        ]);

        Author::create([
            'name' => 'Эрик Берн',
            'description' => ''
        ]);

        Author::create([
            'name' => 'Ирина Хакамада',
            'description' => ''
        ]);

        Author::create([
            'name' => 'Ричард Брэнсон',
            'description' => ''
        ]);

        Author::create([
            'name' => 'Стив Харви',
            'description' => ''
        ]);
    }
}
