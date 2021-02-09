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
		['男', '女',], // 1
		['はい', 'いいえ', 'わからない', 'その他',], // 2
		['尊敬する存在', '超えるべき存在', '大嫌いな存在', '温かい存在',], // 3
		['はい', 'いいえ', 'わからない', 'その他',], // 4
		['はい', 'いいえ', 'わからない', 'その他',], // 5
		['はい', 'いいえ', 'わからない', 'その他',], // 6
		['はい', 'いいえ', 'わからない', 'その他',], // 7
		['はい', 'いいえ', 'どちらも重要', 'わからない',], // 8
		['はい', 'いいえ', 'わからない', 'その他',], // 9
		['はい', 'いいえ', 'わからない', 'その他',], // 10
		['雨に濡れそうで嫌だ', '風情があって好きだ', '雨は実は空気中の汚れを吸ってかなり汚れているのだ', 'その他',], // 11
		['人類', '最愛の人', 'どちらも選べない', 'どっちも救う！',], // 12
		['おしゃれ', '実用性', 'どちらも同じ位重視する', 'なにも思わない',], // 13
		['はい', 'いいえ', 'わからない', 'その他',], // 14
		['はい', 'いいえ', 'わからない', 'その他',], // 15
		['はい', 'いいえ', 'わからない', 'その他',], // 16
		['はい', 'いいえ', 'わからない', 'その他',], // 17
		['はい', 'いいえ', 'わからない', 'その他',], // 18
		['はい', 'いいえ', 'わからない', 'その他',], // 19
		['はい', 'いいえ', 'わからない', 'その他',], // 20
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
