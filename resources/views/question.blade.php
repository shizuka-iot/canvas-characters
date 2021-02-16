
<!DOCTYPE html>
<html lang="ja">
<head>
	@component ('components.head')
	@endcomponent
</head>

<body>
	<div id="wrapper">
		@component ('components.header')
		@endcomponent

		<main class="row">
			<div class="main">

				<div class="sticky">

					<div class="question_wrapper center">

						<form class="question_form column center" action="" method="">
							@csrf

							<div class="question_title row center">
								<h2 class="question_body">
									{{ $question->id}} : {{ $question->question}}
								</h2>
							</div>
							<div class="answers_wrapper center">
									@foreach ($answers as $index => $answer)
									<div class="answer_btn_wrapper">
										<button class="answer_btn" type="button" value="{{ $answer->id }}" 
														data-question_no="{{$question->id}}" 
														data-answer_no="{{ $index }}">
											{{ $answer->answer}}
										</button>
									</div>
									@endforeach
							</div>

						</form>
					</div>

					<div id="canvas_wrapper" class="row center">
						<canvas id="can" width="800" height="640" class="hide">
					</div>

				</div>
			</div>

		</main>
		
		@component ('components.footer')
		@endcomponent
	</div>

	<script src="{{ asset('js/functions.js') }}"></script>
	<script src="{{ asset('js/answers.js') }}"></script>
	<script src="{{ asset('js/coordinates.js') }}"></script>
	<script src="{{ asset('js/DrawFace.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<script src="{{ asset('js/updateQuestion.js') }}"></script>
</body>
</html>
