<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Choice;

class ChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //ここに初期データ書いておく
        // Choice::create([
        //     'question_id' => 1,
        //     'text' => 'デグー科',
        //     'is_correct' => 1,
        // ]);
        // Choice::create([
        //     'question_id' => 1,
        //     'text' => 'ネズミ科',
        //     'is_correct' => 0,
        // ]);
        // Choice::create([
        //     'question_id' => 1,
        //     'text' => '齧歯科',
        //     'is_correct' => 0,
        // ]);

        // Choice::create([
        //     'question_id' => 2,
        //     'text' => '暑がり',
        //     'is_correct' => 0,
        // ]);
        // Choice::create([
        //     'question_id' => 2,
        //     'text' => '寒がり',
        //     'is_correct' => 0,
        // ]);
        // Choice::create([
        //     'question_id' => 2,
        //     'text' => 'どっちも',
        //     'is_correct' => 1,
        // ]);

        // Choice::create([
        //     'question_id' => 3,
        //     'text' => '果物',
        //     'is_correct' => 0,
        // ]);
        // Choice::create([
        //     'question_id' => 3,
        //     'text' => '木の実',
        //     'is_correct' => 0,
        // ]);
        // Choice::create([
        //     'question_id' => 3,
        //     'text' => '草',
        //     'is_correct' => 1,
        // ]);
        Choice::create([
            'question_id' => 7,
            'text' => '愛媛県',
            'is_correct' => 0,
        ]);
        Choice::create([
            'question_id' => 7,
            'text' => '静岡県',
            'is_correct' => 0,
        ]);
        Choice::create([
            'question_id' => 7,
            'text' => '和歌山県',
            'is_correct' => 1,
        ]);

        Choice::create([
            'question_id' => 8,
            'text' => '匂いがつく',
            'is_correct' => 0,
        ]);
        Choice::create([
            'question_id' => 8,
            'text' => '手が黄色くなる',
            'is_correct' => 1,
        ]);
        Choice::create([
            'question_id' => 8,
            'text' => '健康になる',
            'is_correct' => 0,
        ]);

        Choice::create([
            'question_id' => 9,
            'text' => '見た目',
            'is_correct' => 0,
        ]);
        Choice::create([
            'question_id' => 9,
            'text' => '味',
            'is_correct' => 0,
        ]);
        Choice::create([
            'question_id' => 9,
            'text' => '両方！',
            'is_correct' => 1,
        ]);
    }
}
