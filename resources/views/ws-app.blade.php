<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
	<meta charset="utf-8">
	<title>
		@if($meta ->getTranslate('meta_title'))
			{{ $meta ->getTranslate('meta_title') }}
		@else
			Візи в Польщу
		@endif
	</title>

	@if(isset($meta))
		<meta name="description" content="{{ $meta ->getTranslate('meta_description') }}">
		<meta name="keywords" content="{{ $meta ->getTranslate('meta_keywords') }}">
	@endif

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="{{ asset('/img/favicon/favicon.ico') }}" type="image/x-icon">
	<link rel="apple-touch-icon" href="{{ asset('/img/favicon/apple-touch-icon.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/img/favicon/apple-touch-icon-114x114.png') }}">

	{{-- Bootstrap core CSS --}}
	<link href="{{ asset('/css/frontend/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/frontend/flex-light-theme.css') }}?ver={{ $version }}" rel="stylesheet">
	<link href="{{ asset('/css/frontend/main.css') }}?ver={{ $version }}" rel="stylesheet">
	<link href="{{ asset('/css/frontend/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/libs/unitegallery/dist/css/unite-gallery.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/plugins/sweetalert.css') }}" rel="stylesheet">

</head>

<body>

	<div class="container">

		<div class="row">

			<div class="col-xs-6 resume-block">



			</div>

			<ul class="col-xs-6 text-right lang">

				@foreach($langs as $lang)

					<li><a href="{{str_replace(url(App::getLocale()), url($lang->lang), Request::url())}}">{{$lang -> lang}}</a></li>

				@endforeach

			</ul>

		</div>

		<div class="row">

			<div class="col-md-12 fix-height">


			</div>

		</div>

		<div class="row" style="min-height: 600px;">





		</div>

	</div> {{-- /container --}}

	{{-- Site footer --}}
	<footer>

		<div class="container">

			<div class="row">



			</div>

		</div>

	</footer>


<script src="{{ asset('/js/frontend/jquery-11.0.min.js') }}"></script>
<script src="{{ asset('/js/frontend/bootstrap.js') }}"></script>
<script src="{{ asset('/libs/unitegallery/dist/js/unitegallery.js') }}"></script>
<script src="{{ asset('/libs/unitegallery/dist/themes/slider/ug-theme-slider.js') }}"></script>
<script src="{{ asset('/libs/unitegallery/dist/themes/carousel/ug-theme-carousel.js') }}"></script>
<script src="{{ asset('/libs/unitegallery/dist/themes/tilesgrid/ug-theme-tilesgrid.js') }}"></script>
<script src="{{ asset('/js/plugins/sweetalert.min.js') }}"></script>
<script src="{{ asset('/js/common.js') }}?ver={{ $version }}"></script>

<script src="http://azmind.com/demo/andia-agency/v2-1/assets/js/wow.min.js" type="application/javascript"></script>
<link href="http://azmind.com/demo/andia-agency/v2-1/assets/css/animate.css" rel="stylesheet">
<script>
	new WOW().init();
</script>
</body>
</html>