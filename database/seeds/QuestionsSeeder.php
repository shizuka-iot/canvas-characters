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
		'あなたの性別を教えてください',// 1
		'あなたにとって人生とは退屈なものですか?',// 2
		'あなたにとって親とはどういう存在ですか?',// 3
		'普通よりは個性的なほうが良いと思いますか?',// 4
		'かわいいよりはキレイな子が好きですか?',// 5
		'未来のことよりも今、楽しいことが重要ですか?',// 6
		'体を動かすことは好きですか?',// 7
		'一番好きな食べ物を選んでください。',// 8
		'あなたを生き物に例えるならばこの中でどれですか?',// 9
		'',// 10
		'',// 11
		'',// 12
		'',// 13
		'',// 14
		'',// 15
		'',// 16
		'',// 17
		'',// 18
		'',// 19
		'',// 20
		'',// 21
		'',// 22
		'',// 23
		'',// 24
		'',// 25
		'',// 26
		'',// 27
		'',// 28
		'',// 29
		'',// 30
		'',// 31
		'',// 32
		'',// 33
		'',// 34
		'',// 35
		'',// 36
		'',// 37
		'',// 38
		'',// 39
		'',// 40
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
