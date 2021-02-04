<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountAnswersView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			// answersテーブルにquesitonsテーブルをjoinし、
			// questions.questionに対するanswersの数を求めるviewを作るSQL
			$sql = 'create view count_answers_view as 
				select question_id, questions.question, count(*) as answers 
					from answers
					join questions on question_id = questions.id 
					group by question_id';
			DB::statement($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
			// ロールバックで何故か実行されず、already existsとなる。
			// なのでMariaDBに入って直接消してる
			DB::statement('drop view count_answers_view');
    }
}
