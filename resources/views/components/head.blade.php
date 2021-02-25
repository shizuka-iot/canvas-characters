

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- csrf-token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- ツイッターカード -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@shizuka-iot">
<meta name="twitter:creator" content="@shizuka-iot">
<meta name="twitter:title" content="Webブラウザで自在にキャラメイク出来るサイト : キャンバスキャラクターズ">
<meta name="twitter:description" content="スライダーを動かすことで細かく自由にキャラメイクできます">
<meta name="twitter:image" content="">

<!-- title -->
<title>{{ config('const.SITE_TITLE') }}</title>


<!-- style -->
<link rel="stylesheet" href="{{ asset('css/vender/styles.css') }}">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200&display=swap" rel="stylesheet">


<!-- fontawesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">


<!-- favicon -->
<link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">
<link rel="apple-touch-icon" href="{{ asset('/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" href="{{ asset('/android-chrome-256x256.png') }}">


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-B6F180G26T"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-B6F180G26T');
</script>


<!-- js -->
<script src="{{ asset('js/app.js') }}"></script>
<script>
	const public_path = '{{ asset('/') }}';
</script>
