
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

				<form method="POST" action="{{ route('contact.send') }}">
					@csrf


					<label for="">メールアドレス</label>
					{{ $inputs['email'] }}
					<input type="hidden" name="email" value="{{ old('email') }}">


					<label for="">タイトル</label>
					{{ $inputs['title'] }}
					<input type="hidden" name="title" value="{{ old('title') }}">


					<label for="">お問い合わせ内容</label>
					{!! nl2br(e($inputs['body'])) !!}
					<textarea id="" name="body" cols="30" rows="10">{{ old('body') }}</textarea>


					<button type="submit" name="action" value="back">
						入力内容修正
					</button>

					<button type="submit" name="action" value="submit">
						送信する
					</button>

				</form>
			</div>
		</main>

		@component ('components.footer')
		@endcomponent
	</div>
</body>
</html>
