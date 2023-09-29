<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // 作成したSeederクラスをcallメソッドに渡す
        // $this->call(QuizSeeder::class);
        // $this->call(QuestionSeeder::class);
        // $this->call(ChoiceSeeder::class);

        // ダミーデータ10件作成
        \App\Models\Quiz::factory(100)->create();


    }
}
