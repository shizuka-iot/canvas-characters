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
		'体を動かすことは好きですか?',
		
		// 10
		'あなたは友達が多いほうですか？',

		// 11
		'親友と呼べる人は何人いますか？',

		// 12
		'電車での帰り、車窓からは雨が降っているのが見えます。何を思いますか？',

		// 13
		'①人類②あなたの最愛の人、救えるのはどちらか一方だとしたらどちらを選びますか？　どちらを選んでもあなたは生き残ります。',

		// 14
		'おしゃれと実用性どちらを重視しますか?',

		// 15
		'恋人がいる人を好きになりました。どうしますか？',

		// 16
		'家の鍵を締め忘れたか気になって仕方ないことが度々ありますか？',

		// 17
		'学歴は重要だと思いますか?',

		// 18
		'生きるためなら何をしてもいいと思いますか？',

		// 19
		'本気で何かに挑戦し達成したことがありますか？',

		// 20
		'最後の質問です。あなたは今しあわせですか？',
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
