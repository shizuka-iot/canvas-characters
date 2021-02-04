<?php

use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	private $answers_arr = [
		['男', '女', 'オカマ', 'おなべ',], // 1
		['', '', '', '',], // 2
		['', '', '', '',], // 3
		['', '', '', '',], // 4
		['', '', '', '',], // 5
		['', '', '', '',], // 6
		['', '', '', '',], // 7
		['', '', '', '',], // 8
		['', '', '', '',], // 9
		['', '', '', '',], // 10
		['', '', '', '',], // 11
		['', '', '', '',], // 12
		['', '', '', '',], // 13
		['', '', '', '',], // 14
		['', '', '', '',], // 15
		['', '', '', '',], // 16
		['', '', '', '',], // 17
		['', '', '', '',], // 18
		['', '', '', '',], // 19
		['', '', '', '',], // 20
		['', '', '', '',], // 21
		['', '', '', '',], // 22
		['', '', '', '',], // 23
		['', '', '', '',], // 24
		['', '', '', '',], // 25
		['', '', '', '',], // 26
		['', '', '', '',], // 27
		['', '', '', '',], // 28
		['', '', '', '',], // 29
		['', '', '', '',], // 30
		['', '', '', '',], // 31
		['', '', '', '',], // 32
		['', '', '', '',], // 33
		['', '', '', '',], // 34
		['', '', '', '',], // 35
		['', '', '', '',], // 36
		['', '', '', '',], // 37
		['', '', '', '',], // 38
		['', '', '', '',], // 39
		['', '', '', '',], // 40
	];

		private function _insertAnswersIntoEachQuestion($question_id, array $answers_arr)
		{
			foreach ($answers_arr as $answer)
			{
				DB::table('answers')->insert([
					'question_id' => $question_id,
					'answer' => $answer,
					'created_at' => date('Y-m-d H:i:s'),
					'updated_at' => date('Y-m-d H:i:s'),
				]);
			}
		}
    public function run()
    {
			foreach ($this->answers_arr as $index => $answers)
			{
				$this->_insertAnswersIntoEachQuestion($index + 1, $answers);
			}
    }
}
