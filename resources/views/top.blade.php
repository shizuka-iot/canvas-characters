

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

		<main class="column center">
			<div class="select_mode row between">
				<div class="left column center">
					<img src="{{ asset('/imgs/fs_left.png')}}" alt="">
					<a href="{{ asset('/question') }}" class="select_mode_btn">
						<h2>診断する</h2>
					</a>
				</div>

				<div class="right column center">
					<img src="{{ asset('/imgs/fs_right.png')}}" alt="">
					<a href="{{ asset('/create_free') }}" class="select_mode_btn">
						<h2>自由に作る</h2>
					</a>
				</div>
			</div>
		</main>

		@component ('components.footer')
		@endcomponent
	</div>
</body>
</html>
