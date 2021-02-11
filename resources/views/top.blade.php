

<!DOCTYPE html>
<html lang="ja">
<head>
	@component ('components.head')
	@endcomponent
</head>

<body>
	@component ('components.header')
	@endcomponent

	<main class="column center">
		<div class="select_mode row between">
			<a href="{{ asset('/question') }}" class="select_mode_btn">
				<h2>診断する</h2>
			</a>

			<a href="{{ asset('/question') }}" class="select_mode_btn">
				<h2>自由に作る</h2>
			</a>
		</div>
	</main>

	@component ('components.footer')
	@endcomponent
</body>
</html>
