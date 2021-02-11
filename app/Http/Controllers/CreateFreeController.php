<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Question;
use App\Answer;

class CreateFreeController extends Controller
{
	public function index(Request $request)
	{
		$request->session()->put('question_no', 1);
		$question_no = $request->session()->get('question_no');
		$question = Question::find(1);
		$answers = DB::table('answers')->where('question_id', 1)->get();
		return view('create_free', [
			'question' => $question,
			'answers' => $answers,
		]);
	}
}
