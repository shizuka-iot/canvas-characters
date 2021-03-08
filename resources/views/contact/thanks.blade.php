
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

			<!-- お問い合わせ -->
			<div class="container column center">
				<h2>{{ __('お問い合わせ内容を送信しました') }}</h2>
			</div>

		</main>

		@component ('components.footer')
		@endcomponent
	</div>
</body>
</html>
