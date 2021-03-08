

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
				<h2>お問い合わせ</h2>

				<form id="contact_form" class="column" method="POST" action="{{ route('contact.confirm') }}">
					@csrf


					<div class="contact_form_item column">
						<label for="">
							<span class="require">必須</span>メールアドレス
							@if ($errors->has('email'))
								<span class="error-message">{{ $errors->first('email') }}</span>
							@endif
						</label>
						<input type="text" name="email" value="{{ old('email') }}">
					</div>


					<div class="contact_form_item column">
						<label for="">
							<span class="require">必須</span>タイトル
							@if ($errors->has('title'))
								<span class="error-message">{{ $errors->first('title') }}</span>
							@endif
						</label>
						<input type="text" name="title" value="{{ old('title') }}">
					</div>


					<div class="contact_form_item column">
						<label for="">
							<span class="require">必須</span>お問い合わせ内容
							@if ($errors->has('body'))
								<span class="error-message">{{ $errors->first('body') }}</span>
							@endif
						</label>
						<textarea id="" name="body" cols="30" rows="10">{{ old('body') }}</textarea>
					</div>


					<div class="contact_form_button center">
						<button type="submit">入力内容確認</button>
					</div>


				</form>
		</main>

		@component ('components.footer')
		@endcomponent
	</div>
</body>
</html>
