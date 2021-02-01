<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Question;

class UpdateQuestionController extends Controller
{
	public function post(Request $request)
	{
		if (!isset($_POST['mode']))
		{
			throw new \Exception('mode not set');
		}

		return $this->_updateQuestion($request);
	}

	private function _updateQuestion($request)
	{
		header("Content-Type: application/json; charset=UTF-8");
		$question = Question::find($request->question_no);
		echo json_encode($question);
		exit;
		//return $question;
	}
}
