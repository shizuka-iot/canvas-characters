<?php

use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	private $questions_arr = [
		// 1
		'あなたの性別を教えてください',

		// 2
		'人は見た目ではなく中身だと思いますか？',

		// 3
		'あなたにとって人生とは退屈なものですか?',

		// 4
		'あなたにとって親とはどういう存在ですか?',

		// 5
		'普通よりは個性的なほうが良いと思いますか?',

		// 6
		'かわいいよりはキレイな子が好きですか?',

		// 7
		'あなたは肉体派ですか？それとも頭脳派ですか?',

		// 8
		'未来のことよりも今、楽しいことが重要ですか?',

		// 9
		'休みの日はどう過ごしていますか?',
		
		// 10
		'あなたは友達が多いほうですか？',

		// 11
		'デザインと実用性どちらを重視しますか?',

		// 12
		'生きるためなら何をしてもいいと思いますか？',

		// 13
		'最後の質問です。あなたは今しあわせですか？',

		// 14

		// 15

		// 16

		// 17

		// 18

		// 19

		// 20
	];
		private function _insertQuestions(array $questions_arr)
		{
			foreach ($questions_arr as $question)
			{
				DB::table('questions')->insert([
					'question' => $question,
					'created_at' => date('Y-m-d H:i:s'),
					'updated_at' => date('Y-m-d H:i:s'),
				]);
			}
		}
    public function run()
    {
			$this->_insertQuestions($this->questions_arr);
    }
}
