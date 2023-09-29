<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //ここに初期データ書いておく
        // Question::create([
        //     'content' => 'デグーは何科の動物？',
        //     'image' => 'quiz01_01',
        //     'quiz_id' => '1'
        // ]);
        // Question::create([
        //     'content' => 'デグーは暑がり？寒がり？',
        //     'image' => 'quiz01_02',
        //     'quiz_id' => '1'
        // ]);
        // Question::create([
        //     'content' => 'デグーは何を食べる？',
        //     'image' => 'quiz01_03',
        //     'quiz_id' => '1'
        // ]);
        Question::create([
            'content' => 'みかんの生産量1位は？',
            'image' => 'quiz03_01',
            'quiz_id' => '3'
        ]);
        Question::create([
            'content' => 'みかんを食べすぎるとどうなる？',
            'image' => 'quiz03_02',
            'quiz_id' => '3'
        ]);
        Question::create([
            'content' => 'みかんとオレンジの違いは？',
            'image' => 'quiz03_03',
            'quiz_id' => '3'
        ]);
    }
}
