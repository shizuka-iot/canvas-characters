
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
			<!-- キャンバス・キャラクターズについて-->
			<h1 class="about_h1">キャンバス・キャラクターズについて</h1>

			<div class="talk_wrapper">

				<h3>キャンバスって何？</h3>
				<div class="character_talk row height_center">
					<img src="{{ asset('/imgs/fs05.png')}}" alt="">
					<div class="talk_message balloon-left">
						<p>
							このサイトで作れる絵はcanvasというAPIを使って作られているんだよ！
							<br>
							canvasを使えばWEBブラウザ上で絵を描いたり図形を描いたりゲームだって作ることが出来るんだぜ、すごいだろ？
							<br>canvasで作られるキャラクターだからキャンバス・キャラクターズなんだ。
						</p>
					</div>
				</div>

				<h3>使い方は？</h3>
				<div class="character_talk row height_center">
					<img src="{{ asset('/imgs/fs05.png')}}" alt="">
					<div class="talk_message balloon-left">
						<p>
							質問に答えるとその選択次第で様々なキャラクターが出来上がるんだ。
							<br>
							質問の内容と回答は製作者がかなり適当に考えたもので出来上がるキャラクターズに法則性のようなものはないぜ。
							<br>
							自由に作りたい場合はトップページの自由に作るを選択してパラメーターを調整していく必要があるぜ。慣れないと難しいぜ。
						</p>
					</div>
				</div>

				<h3>もっと可愛い髪型を増やしてほしい。パーツのバリエーションが少なすぎる</h3>
				<div class="character_talk row height_center">
					<img src="{{ asset('/imgs/fs05.png')}}" alt="">
					<div class="talk_message balloon-left">
						<p>俺達はまだ完成してねぇ。どんどんアップデートされる予定だ。<br>俺達だってこのままで終わるつもりはねぇ。もっと個性豊かなキャラクターズが生まれるはずだぜ。<br>要望があれば製作者のツイッターにメッセージ送ればいいと思うぜ。</p>
					</div>
				</div>

			</div><!-- talk_wrapper -->

		</main>

		@component ('components.footer')
		@endcomponent
	</div>
</body>
</html>
