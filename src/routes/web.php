<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\QuizController;
use PHPUnit\Framework\Attributes\PostCondition;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//topとして表示されるもの
Route::get('/', function () {
    return view('welcome');
});

// users確認（test）
Route::get('/test', [TestController::class, 'test'])->name('test');

// POSSE website home
Route::get('/home', function () {
    return view('user.home.index');
})->name('home');
// ↑名前つけとくと、blade.phpで <a href="{{ route('home') }}"></a> って書けばリンクになる

// POSSE website quiz
// クイズ一覧
Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');
// 各クイズの表示
Route::get('/quizzes/detail/{quiz}', [QuizController::class, 'detail'])->name('quizzes.detail');


// 管理画面top
Route::get('/admin', function () {
    return view('admin.home.index');
})->middleware(['auth', 'admin'])->name('admin');

// ミドルウェア使うもの（管理者画面）
Route::middleware(['auth', 'admin'])->group(function () {
    // 問題一覧表示
    Route::get('/admin/quizzes', [QuizController::class, 'admin'])->name('admin.quizzes.index');
    // 各クイズの表示
    Route::get('/admin/quizzes/detail/{quiz}', [QuizController::class, 'admin_detail'])->name('admin.quizzes.detail');
    // 設問一覧ページ
    Route::get('admin/quizzes/questions', [QuizController::class, 'admin_questions'])->name('admin.quizzes.questions');

    // クイズタイトル編集・更新機能（データを更新するメソッドはpatch）
    Route::get('post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::patch('post/{post}', [PostController::class, 'update'])->name('post.update');
    // 削除機能
    Route::delete('post/{post}', [PostController::class, 'destroy'])->name('post.destroy');
    // 新規登録機能
    Route::get('post/create', [PostController::class, 'create'])->name('post.create');
    // 変更保存用
    Route::post('post', [PostController::class, 'store'])->name('post.store');

    // question新規作成
    Route::get('admin/quizzes/new-question', [PostController::class, 'new_question'])->name('admin.quizzes.new-question');
    // question保存用
    Route::post('post/store-question', [PostController::class, 'store_question'])->name('post.store.question');
    // question編集用
    Route::get('admin/quizzes/{post}/edit-question', [PostController::class, 'edit_question'])->name('admin.quizzes.edit.question');
    Route::patch('admin/quizzes/{post}', [PostController::class, 'update_question'])->name('admin.quizzes.update.question');
    // question削除機能
    Route::get('admin/quizzes/{post}', [PostController::class, 'destroy_question'])->name('admin.quizzes.destroy.question');
    Route::delete('admin/quizzes/{post}', [PostController::class, 'destroy_question'])->name('admin.quizzes.destroy.question');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
