<meta charset="UTF-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('const.SITE_TITLE') }}</title>
<link rel="stylesheet" href="{{ asset('css/vender/styles.css') }}">
<script src="{{ asset('js/app.js') }}"></script>
<script>
	const public_path = '{{ asset('/') }}';
</script>
