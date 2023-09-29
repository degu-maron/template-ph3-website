<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Question;
use App\Models\Choice;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function edit(Quiz $post) {
        return view('post.edit', compact('post'));
    }
    public function update(Request $request, Quiz $post) {
        // 引数で送信内容と更新する$nameを受け取っている
        $validated = $request->validate([
            'name' => 'required|max:30',
        ]);
        $post->update($validated);
        return redirect('/admin/quizzes')->with('message', '更新しました');
    }
    public function destroy(Quiz $post) {
        $post->delete();
        return redirect('/admin/quizzes')->with('message', '削除しました');
    }
    public function create() {
        return view('admin.quizzes.create');
    }
    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|max:100',
        ]);
        $post = Quiz::create($validated);
        return redirect('/admin/quizzes')->with('message', '保存しました');
    }

    // question
    public function new_question() {
        $quizzes = Quiz::get();
        return view('admin.quizzes.new-question', compact('quizzes'));
    }
    public function store_question(Request $request) {
        $validated = $request->validate([
            'quiz_id' => 'required',
            'content' => 'required|max:200',
        ]);
        if ($request->correct == 1) {
            $iscorrect_1 = 1;
            $iscorrect_2 = 0;
            $iscorrect_3 = 0;
        } else if ($request->correct == 2) {
            $iscorrect_1 = 0;
            $iscorrect_2 = 1;
            $iscorrect_3 = 0;
        } else if ($request->correct == 3) {
            $iscorrect_1 = 0;
            $iscorrect_2 = 0;
            $iscorrect_3 = 1;
        }
        $choice_validated = $request->validate([
            'text1' => 'required|max:100',
            'text2' => 'required|max:100',
            'text3' => 'required|max:100',
            'correct' => 'required|min:1|max:3',
        ]);
        // $post = Quiz::create($validated);
        $question = Question::create($validated);
        $question->choices()->createMany([
            ['text' => $request->text1, 'is_correct' => $iscorrect_1], 
            ['text' => $request->text2, 'is_correct' => $iscorrect_2], 
            ['text' => $request->text3, 'is_correct' => $iscorrect_3], 
        ]);
        return redirect('/admin/quizzes/questions')->with('message', '保存しました');
    }
    public function edit_question(Question $post) {
        $quizzes = Quiz::get();
        return view('admin.quizzes.edit-question', compact('post', 'quizzes'));
    }
    public function update_question(Request $request, Question $post) {
        // 引数で送信内容と更新する$nameを受け取っている
        $questionId = $request->questionId;
        $validated = $request->validate([
            'quiz_id' => 'required',
            'content' => 'required|max:200',
        ]);
        if ($request->correct == 1) {
            $iscorrect_1 = 1;
            $iscorrect_2 = 0;
            $iscorrect_3 = 0;
        } else if ($request->correct == 2) {
            $iscorrect_1 = 0;
            $iscorrect_2 = 1;
            $iscorrect_3 = 0;
        } else if ($request->correct == 3) {
            $iscorrect_1 = 0;
            $iscorrect_2 = 0;
            $iscorrect_3 = 1;
        }
        $choice_validated = $request->validate([
            'text1' => 'required|max:100',
            'text2' => 'required|max:100',
            'text3' => 'required|max:100',
            'correct' => 'required|min:1|max:3',
        ]);
        // $post = Quiz::create($validated);
        $post->update($validated);
        $choices = Choice::where('question_id', $questionId)->get();
        foreach ($choices as $key => $choice) {
            if ($key == 1) {
                Choice::find($choice->id)->update(['text' => $request->text1, 'is_correct' => $iscorrect_1]);
            } else if ($key == 2) {
                Choice::find($choice->id)->update(['text' => $request->text2, 'is_correct' => $iscorrect_2]);
            } else if ($key == 3) {
                Choice::find($choice->id)->update(['text' => $request->text3, 'is_correct' => $iscorrect_3]);
            }
            
        }
        return redirect('/admin/quizzes/questions')->with('message', '更新しました');
    }
    
    public function destroy_question(Question $post) {
        $post->delete();
        return redirect('/admin/quizzes')->with('message', '削除しました');
    }
}
