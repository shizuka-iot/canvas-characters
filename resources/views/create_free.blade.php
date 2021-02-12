
<!DOCTYPE html>
<html lang="ja">
<head>
	@component ('components.head')
	@endcomponent
</head>

<body>
	@component ('components.header')
	@endcomponent

	<main class="row">
		<div class="">
			<div class="row center" id="save_btn_wrapper">
				<button id="save_chara_btn" type="button">保存する</button>
			</div>

			<div class="sticky">

				<div id="canvas_wrapper" class="row center">
					<canvas id="can" width="800" height="640">
				</div>

			</div>
		</div>

		<aside>
			@component ('components.select_parameters')
			@endcomponent
		</aside>

	</main>
	
	@component ('components.footer')
	@endcomponent

	<script src="{{ asset('js/functions.js') }}"></script>
	<script src="{{ asset('js/answers.js') }}"></script>
	<script src="{{ asset('js/coordinates.js') }}"></script>
	<script src="{{ asset('js/DrawFace.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<script src="{{ asset('js/updateQuestion.js') }}"></script>
</body>
</html>
