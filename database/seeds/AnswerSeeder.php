<?php

use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			DB::table('answers')->insert([
				'question_id' => '1',
				'answer' => '男',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			]);
			DB::table('answers')->insert([
				'question_id' => '1',
				'answer' => '女',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			]);
			DB::table('answers')->insert([
				'question_id' => '1',
				'answer' => 'その他',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			]);
			DB::table('answers')->insert([
				'question_id' => '2',
				'answer' => 'YES',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			]);
			DB::table('answers')->insert([
				'question_id' => '2',
				'answer' => 'NO',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			]);
			DB::table('answers')->insert([
				'question_id' => '3',
				'answer' => '陽気なキャラ',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			]);
			DB::table('answers')->insert([
				'question_id' => '3',
				'answer' => '陰気なキャラ',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			]);
			DB::table('answers')->insert([
				'question_id' => '3',
				'answer' => 'どちらかといえば陽気なキャラ',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			]);
			DB::table('answers')->insert([
				'question_id' => '3',
				'answer' => 'どちらかといえば陰気なキャラ',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			]);
			DB::table('answers')->insert([
				'question_id' => '4',
				'answer' => 'YES',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			]);
			DB::table('answers')->insert([
				'question_id' => '4',
				'answer' => 'NO',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			]);
    }
}
