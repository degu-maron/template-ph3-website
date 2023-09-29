<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ここに初期データを入れておく
        Quiz::create([
            'name' => 'デグーのクイズ',
            'image' => 'degu_hero.png',
            'description' => 'デグーについて知りましょう'
        ]);
        Quiz::create([
            'name' => 'みかんのクイズ',
            'image' => 'orange_hero.png',
            'description' => 'みかんについて知りましょう'
        ]);
    }
}
