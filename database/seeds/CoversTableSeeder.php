<?php

use Illuminate\Database\Seeder;
use App\Cover;

class CoversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cover::create([
            'name' => 'Мягкий',
            'description' => ''
        ]);

        Cover::create([
            'name' => 'Твёрдый',
            'description' => ''
        ]);

        Cover::create([
            'name' => 'Обложка с клапанами',
            'description' => ''
        ]);
    }
}
