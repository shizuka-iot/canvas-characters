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
		'人は見た目ではなく中身だと思いますか？',// 8
		'あなたにとって人生とは退屈なものですか?',// 2
		'あなたにとって親とはどういう存在ですか?',// 3
		'普通よりは個性的なほうが良いと思いますか?',// 4
		'かわいいよりはキレイな子が好きですか?',// 5
		'あなたは肉体派ですか？それとも頭脳派ですか?',// 19
		'未来のことよりも今、楽しいことが重要ですか?',// 6
		'体を動かすことは好きですか?',// 7
		'あなたは友達が多いほうですか？',// 9
		'親友と呼べる人は何人いますか？',// 10
		'電車での帰り、車窓からは雨が降っているのが見えます。何を思いますか？',// 11
		'①人類②あなたの最愛の人、救えるのはどちらか一方だとしたらどちらを選びますか？　どちらを選んでもあなたは生き残ります。',// 12
		'おしゃれと実用性どちらを重視しますか?',// 13
		'恋人がいる人を好きになりました。どうしますか？',// 14
		'家の鍵を締め忘れたか気になって仕方ないことが度々ありますか？',// 15
		'学歴は重要だと思いますか?',// 16
		'生きるためなら何をしてもいいと思いますか？',// 17
		'本気で何かに挑戦し達成したことがありますか？',// 18
		'最後の質問です。あなたは今しあわせですか？',// 20
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
