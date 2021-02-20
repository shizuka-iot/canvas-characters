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
		// 1
		['男', '女', 'その他'],

		// 2
		['はい', 'いいえ', 'どちらも重要', 'わからない',], 

		// 3
		['はい', 'いいえ', 'わからない', ], 

		// 4
		['尊敬する存在', '超えるべき存在', '大嫌いな存在', '温かい存在',], 

		// 5
		['はい', 'いいえ', 'わからない', ], 

		// 6
		['はい', 'いいえ', 'わからない', ], 

		// 7
		['肉体派', '頭脳派', '両方の特性を兼ね備えたハイブリッド', 'どちらもないポンコツ',], 

		// 8
		['はい', 'いいえ', 'わからない', ], 

		// 9
		['家でゆっくりしている', '外出することが多い', '引きこもっている', 'その日の気分で決める',], 

		// 10
		['多い', '少ない', '普通', '一人もいない',], 

		// 11
		['デザイン', '実用性', 'どちらも同じ位重視する', 'なにも思わない',], 

		// 12
		['生きるためなら何でもする', '他人を犠牲にするくらいなら死を受け入れる', 'わからない', ], 

		// 13
		['はい', 'いいえ', 'わからない',], 

		// 14

		// 15

		// 16

		// 17

		// 18

		// 19

		// 20
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
