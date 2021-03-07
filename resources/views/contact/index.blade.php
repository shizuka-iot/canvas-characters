

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
				<h2>お問い合わせ</h2>

				<form method="POST" action="{{ route('contact.confirm') }}">
					@csrf


					<label for="">メールアドレス</label>
					<input type="text" name="email" value="{{ old('email') }}">
					@if ($errors->has('email'))
						<p class="error-message">{{ $errors->first('email') }}</p>
					@endif


					<label for="">タイトル</label>
					<input type="text" name="title" value="{{ old('title') }}">
					@if ($errors->has('title'))
						<p class="error-message">{{ $errors->first('title') }}</p>
					@endif


					<label for="">お問い合わせ内容</label>
					<textarea id="" name="body" cols="30" rows="10">{{ old('body') }}</textarea>
					@if ($errors->has('body'))
						<p class="error-message">{{ $errors->first('body') }}</p>
					@endif


					<button type="submit">入力内容確認</button>


				</form>
			</div>
		</main>

		@component ('components.footer')
		@endcomponent
	</div>
</body>
</html>
