<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Choice;

class QuizController extends Controller
{

    public function index()
    {
        // $quizzes = Quiz::get();
        $quizzes = Quiz::paginate(20);
        return view('user.quizzes.index', compact('quizzes'));
    }

    public function detail(Quiz $quiz)
    {
        $quizWithQuestionsAndChoices = $quiz->load('questions.choices');
        return view('user.quizzes.details', ['quiz' => $quizWithQuestionsAndChoices]);
    }

    public function admin()
    {
        $quizzes = Quiz::withTrashed()->paginate(20);
        return view('admin.quizzes.index', compact('quizzes'));
    }

    public function admin_detail(Quiz $quiz)
    {
        $quizWithQuestionsAndChoices = $quiz->load('questions.choices');
        return view('admin.quizzes.details', ['quiz' => $quizWithQuestionsAndChoices]);
    }

    public function admin_questions()
    {
        $questions = Question::paginate(20);
        $choices = Choice::get();
        return view('admin.quizzes.questions', compact('questions', 'choices'));
    }
}