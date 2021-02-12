
$(function(){
	'use strict';

	//$('.answer_btn').on('click', function(){
	$(document).on('click', ".answer_btn", function(){
		// ajaxで_ajax.php(UpdateQuestionController)に送るもの
		// 1. 質問No
		// 2. 回答No
		let question_no = $(this).data('question_no');
		let answer_no = $(this).data('answer_no');
		let answer_id = $(this).val();

		// 問題NOと回答NOの一致するものを配列から取り出して
		// DrawFaceクラスのプロパティに代入

		let keys = Object.keys(answers[question_no][answer_no]);
		//console.log(keys);

		getKeys(answers[question_no][answer_no], 'coordinates');


		//$(this).parent().children().remove();
		$(this).parent().parent().children().remove();

		//$.ajax({}).done(function(){});
		$.ajax
		(
			{
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				url: public_path + '_ajax',
				type: 'post',
				data:
				{
					question_no: question_no,
					answer_id: answer_id,
					mode: 'question',
				}
			}
		).done(function(data){
			if (data !== null)
			{
				$('.question_body').text(data.question_id + ":" + data.question).hide().fadeIn();
			}
			else
			{
				$('.question_body').remove();
			}
			
		}).fail(function(XMLHttpRequest, textStatus, errorThrown){
			console.log(XMLHttpRequest.status);
			console.log(textStatus);
			console.log(errorThrown);
		});
		$.ajax
		(
			{
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				url: public_path + '_ajax',
				type: 'post',
				data:
				{
					question_no: question_no,
					answer_id: answer_id,
					mode: 'answer',
				}
			}
		).done(function(data){
			if (data.length !== 0)
			{
				data.forEach(function( answer, index ){
					let html = 
								'<div class="answer_btn_wrapper">'+
								'<button class="answer_btn" type="button" value="' + 
						answer.id + '" data-question_no="'+ 
						answer.question_id +'" data-answer_no="' + index +'">' + 
						answer.answer + '</button></div>';
					$('.answers_wrapper').append(html).hide().fadeIn();
				});
			}
			else
			{
				document.getElementById("canvas_wrapper").style.display = "block";
				$('.answers_wrapper').append('<p>全ての質問が終わりました</p>');
				$('.answers_wrapper').append(
					'<div class="row center" id="save_btn_wrapper"><button id="save_chara_btn" type="button">保存する</button></div>');
			}
			
		}).fail(function(XMLHttpRequest, textStatus, errorThrown){
			console.log(XMLHttpRequest.status);
			console.log(textStatus);
			console.log(errorThrown);
		});
		return false;
	});
});
