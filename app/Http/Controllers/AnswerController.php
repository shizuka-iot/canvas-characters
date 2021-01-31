<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Question;
use App\Answer;

class AnswerController extends Controller
{
	public function index(Request $request)
	{
		// TODO 質問Noと回答Noを条件にDBから値を取り出してセッションに格納

		// 質問Noを更新
		$request->session()->put('question_no', $request->session()->get('question_no', 1)+1);
		// 質問Noを取り出し
		$new_question_no = $request->session()->get('question_no');

		$numbers_of_questions = DB::table('questions')->count();
		if ( $new_question_no > $numbers_of_questions )
		{
		return view('index', [
			'message' => '全ての質問が終わりました',
		]);
		}


		$questions = Question::all();
		$answers = Answer::all();
		return view('index', [
			'questions' => $questions,
			'answers' => $answers,
			'question_no' => $new_question_no,
		]);
	}
}
