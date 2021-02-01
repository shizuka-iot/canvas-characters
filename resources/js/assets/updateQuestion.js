
$(function(){
	'use strict';

	//$('.answer_btn').on('click', function(){
	$(document).on('click', ".answer_btn", function(){
		// ajaxで_ajax.php(UpdateQuestionController)に送るもの
		// 1. 質問No
		// 2. 回答No
		let question_no = $(this).data('question_no');
		let answer_id = $(this).val();

		$(this).parent().children().remove();

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
			console.log("question" + data);
			if (data !== null)
			{
				$('.question_body').text(data.id + ":" + data.question).hide().fadeIn();
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
			console.log(data);
			
			if (data.length !== 0)
			{
				data.forEach(function( answer ){
					let html = 
								'<button class="answer_btn" type="button" value="' + 
						answer.id + '" data-question_no="'+ 
						answer.question_id +'">' + 
						answer.answer + '</button>';
					$('.answers_wrapper').append(html).hide().fadeIn();
				});
			}
			else
			{
				console.log("test");
				$('.answers_wrapper').append('<p>全ての質問が終わりました</p>');
			}
			
		}).fail(function(XMLHttpRequest, textStatus, errorThrown){
			console.log(XMLHttpRequest.status);
			console.log(textStatus);
			console.log(errorThrown);
		});
		return false;
	});
});
