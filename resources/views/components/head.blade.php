<meta charset="UTF-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('const.SITE_TITLE') }}</title>
<link rel="stylesheet" href="{{ asset('css/vender/styles.css') }}">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200&display=swap" rel="stylesheet">
<script src="{{ asset('js/app.js') }}"></script>
<script>
	const public_path = '{{ asset('/') }}';
</script>
