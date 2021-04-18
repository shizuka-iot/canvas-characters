

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

			<div class="introduction column center">
				<!-- Todo: キャンバスキャラクターズについての紹介文入れる -->
			</div>

			<div class="select_mode row between">
				<div class="mode left column">
					<img src="{{ asset('/imgs/topPage_character1.gif') }}" alt="" class="topPage_character">
					<a href="{{ asset('/question') }}" class="select_mode_btn">
						<h2>簡単作成</h2>
					</a>
					<div class="explain_mode">
						<p>
							質問に答えるだけでキャラクターが作成できます。<br>
							手軽に作成できますが自由度は低めです。
						</p>
					</div>
				</div>

				<div class="mode right column">
					<img src="{{ asset('/imgs/topPage_character2.gif') }}" alt="" class="topPage_character">
					<a href="{{ asset('/create_free') }}" class="select_mode_btn">
						<h2>自由に作る</h2>
					</a>
					<div class="explain_mode">
						<p>
							自由にパラメーターをスライダーで細かく調整することが出来ます。<br>
							幅広いキャラクターを作成することが出来ますが難易度も高めです。
						</p>
					</div>
				</div>
			</div>
		</main>

		@component ('components.footer')
		@endcomponent
	</div>

	<script src="{{ asset('js/functions.js') }}"></script>

</body>
</html>
