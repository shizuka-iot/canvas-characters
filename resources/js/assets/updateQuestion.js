
$(function(){
	'use strict';

	$('.answer_btn').on('click', function(){
		// ajaxで_ajax.php(UpdateQuestionController)に送るもの
		// 1. 質問No
		// 2. 回答No
		let question_no = $(this).data('question_no');
		let answer_id = $(this).val();

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
					mode: 'post',
				}
			}
		).done(function(data){
			console.log(data);
			console.log("通信成功");
		}).fail(function(XMLHttpRequest, textStatus, errorThrown){
			console.log(XMLHttpRequest.status);
			console.log(textStatus);
			console.log(errorThrown);
		});
	});
});
