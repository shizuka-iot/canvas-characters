<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Question;
use App\Answer;

// AjaxでDBから新しい質問を取り出してJSに返す。
class UpdateQuestionController extends Controller
{
	public function post(Request $request)
	{
		if (!isset($_POST['mode']))
		{
			throw new \Exception('mode not set');
		}

		if ( $request->mode === 'question')
		{
			$this->_updateQuestion($request);
		}
		elseif ( $request->mode === 'answer')
		{
			$this->_updateAnswer($request);
		}
	}

	private function _updateQuestion($request)
	{
		header("Content-Type: application/json; charset=UTF-8");
		$question = Question::find($request->question_no + 1);
		echo json_encode($question);
		exit;
	}

	private function _updateAnswer($request)
	{
		header("Content-Type: application/json; charset=UTF-8");
		$answer = DB::table('answers')->where('question_id', $request->question_no + 1)->orderBy('id', 'asc')->get();
		echo json_encode($answer);
		exit;
	}
}
