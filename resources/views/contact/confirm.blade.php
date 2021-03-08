
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
				<h2>お問い合わせ内容確認画面</h2>

				<form id="contact_form" class="column" method="POST" action="{{ route('contact.send') }}">
					@csrf


					<div class="confirm_input_items_wrapper">
						<label for="">メールアドレス</label>
						<span class="confirm_input_item">{{ $inputs['email'] }}</span>
						<input type="hidden" name="email" value="{{ $inputs['email'] }}">
					</div>


					<div class="confirm_input_items_wrapper">
						<label for="">タイトル</label>
						<span class="confirm_input_item">{{ $inputs['title'] }}</span>
						<input type="hidden" name="title" value="{{ $inputs['title'] }}">
					</div>


					<div class="confirm_input_items_wrapper">
						<label for="">お問い合わせ内容</label>
						<span class="confirm_input_item">{!! nl2br(e($inputs['body'])) !!}</span>
						<input type="hidden" name="body" value="{{ $inputs['body'] }}">
					</div>


					<div class="contact_fix_button center">
						<button type="submit" name="action" value="back">
							入力内容修正
						</button>
					</div>

					<div class="confirm_button center">
						<button type="submit" name="action" value="submit">
							送信する
						</button>
					</div>

				</form>
			</div>
		</main>

		@component ('components.footer')
		@endcomponent
	</div>
</body>
</html>
