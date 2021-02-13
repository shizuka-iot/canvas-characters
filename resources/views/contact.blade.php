
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
				<div class="contact_form_wrap center column">
					<h2 class="">お問い合わせ<i class="fas fa-envelope"></i></h2>
					<form action="" method="post" class="contact_form">
						<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
						<div class="input_wrap">
							<p>メールアドレス <span class="require">必須</span></p>
							<input type="text" name="email" placeholder="メールアドレス" required>
						</div>
						<div class="input_wrap">
							<p>名前 <span class="require">必須</span></p>
							<input type="text" name="name" placeholder="名前" required>
						</div>
						<div class="input_wrap">
							<p>件名 <span class="require">必須</span></p>
							<input type="text" name="subject" placeholder="件名" required>
						</div>
						<div class="input_wrap">
							<p>本文 <span class="require">必須</span></p>
							<textarea id="body" name="body" cols="30" rows="10" required></textarea>
						</div>
						<div class="">
						<button type="submit" class="send_contact_button" name="submit">お問い合わせ内容を送信する</button>
						</div>
					</form>
				</div>
			</div>
		</main>

		@component ('components.footer')
		@endcomponent
	</div>
</body>
</html>
