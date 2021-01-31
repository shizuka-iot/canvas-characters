<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;

class QandAPullController extends Controller
{
	public function pull(Request $request)
	{
		if ($request->question === '' || $request->question === NULL)
		{
			$request->question = 1;
		}
		$questions = Question::all();
		$answers = Answer::all();
		return view('index', [
			'questions' => $questions,
			'answers' => $answers,
			'question_no' => $request->question,
		]);
	}
}
