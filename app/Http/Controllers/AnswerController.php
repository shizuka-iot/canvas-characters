<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;

class AnswerController extends Controller
{
	public function index(Request $request)
	{
		$request->session()->put('question_no', $request->session()->get('question_no', 1)+1);
		$new_question_no = $request->session()->get('question_no');
		$questions = Question::all();
		$answers = Answer::all();
		return view('index', [
			'questions' => $questions,
			'answers' => $answers,
			'question_no' => $new_question_no,
		]);
	}
}
