<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;

class QandAPullController extends Controller
{
	public function pull(Request $request)
	{
		$request->session()->put('question_no', 1);
		$question_no = $request->session()->get('question_no');
		$request->session()->put('answer' . $question_no , [
			'iris_color_r' => 200,
			'iris_color_g' => 200,
			'iris_color_b' => 200,
		]);
		$questions = Question::all();
		$answers = Answer::all();
		return view('index', [
			'questions' => $questions,
			'answers' => $answers,
			'question_no' => $question_no,
			's' => $request->session()->get('answer' . $question_no),
		]);
	}
}
