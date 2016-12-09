<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
	<meta charset="utf-8">
	<title>
		@if($meta ->getTranslate('meta_title'))
			{{ $meta ->getTranslate('meta_title') }}
		@else Eurostandard
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

				<a class="main-resume" href="/{{ App::getLocale() }}/resume">{{ trans('base.resume') }}</a>

			</div>

			<ul class="col-xs-6 text-right lang">

				@foreach($langs as $lang)

					<li><a href="{{str_replace(url(App::getLocale()), url($lang->lang), Request::url())}}">{{$lang -> lang}}</a></li>

				@endforeach

			</ul>

		</div>

		<div class="row">

			<div class="col-md-12 fix-height">

				<nav class="navbar navbar-default">

					<div class="container-fluid">

						{{-- Brand and toggle get grouped for better mobile display --}}
						<div class="navbar-header">

							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<a class="navbar-brand" href="/{{ App::getLocale() }}">
								<img alt="Brand" src="/img/frontend/logo.jpg">
							</a>

							<p class="navbar-text"><a href="/{{ App::getLocale() }}">EUROSTANDARD sp. z o.o.</a></p>

						</div>

						{{-- Collect the nav links, forms, and other content for toggling --}}
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

							<ul class="nav navbar-nav navbar-right r-menu">

								<li @if(Request::is(App::getLocale())) class="active"@endif>
									<a href="/{{ App::getLocale() }}">
										<i class="fa fa-home"></i><br>
										{{ trans('base.home') }}
									</a>
								</li>

								<li @if(Request::is('*/company'))class="active"@endif>
									<a href="/{{ App::getLocale() }}/company">
										<i class="fa fa-paperclip"></i><br>
										{{ trans('base.company') }}
									</a>
								</li>

								<li @if(Request::is('*/news'))class="active"@endif>
									<a href="/{{ App::getLocale() }}/news"><i class="fa fa-newspaper-o"></i><br>
										{{ trans('base.news') }}
									</a>
								</li>

								<li @if(Request::is('*/works'))class="active"@endif>
									<a href="/{{ App::getLocale() }}/works"><i class="fa fa-user"></i><br>
										{{ trans('base.works') }}
									</a>
								</li>

								<li @if(Request::is('*/gallery'))class="active"@endif>
									<a href="/{{ App::getLocale() }}/gallery"><i class="fa fa-camera"></i><br>
										{{ trans('base.gallery') }}
									</a>
								</li>

								<li @if(Request::is('*/contacts'))class="active"@endif>
									<a href="/{{ App::getLocale() }}/contact"><i class="fa fa-envelope"></i><br>
										{{ trans('base.contacts') }}
									</a>
								</li>

							</ul>

						</div>{{-- /.navbar-collapse --}}

					</div>{{-- /.container-fluid --}}

				</nav>
			</div>

		</div>

		<div class="row" style="min-height: 600px;">

			@yield('content')

			@if(!(Request::is(App::getLocale())))

				<div class="col-md-4">

					@if(!(Request::is('*/works')) and !(Request::is('*/news/article-*')) )

						<div class="panel panel-default wow fadeInDown">

						<div class="panel-heading">{{ trans('base.latest_jobs') }}</div>

						<div class="panel-body">

							<div class="row">

								@foreach($last_works as $last_work)

									<div class="r-block-item">

										<div class="col-md-12">

											<h4 class="col-sm-6 col-md-6 text-left r-prof">{{ $last_work->getTranslate('title') }}</h4>

											<h4 class="col-sm-6 col-md-6 text-right r-price">{!! $last_work->getTranslate('price') !!}</h4>

											<p>{!! str_limit($last_work->getTranslate('short_description'), 215) !!}</p>

											<a href="/{{ App::getLocale() }}/works/article-{{ $last_work -> id }}" class="pull-right">{{ trans('base.more') }}<i class="fa fa-angle-right fa-lg"></i></a>

										</div>

										<hr>

									</div>

								@endforeach

							</div>

							<p><a class="btn btn-primary btn-lg" style="width: 100%;" href="/{{ App::getLocale() }}/works" role="button">{{ trans('base.all_jobs') }}</a></p>

						</div>

					</div>

					@endif

					@if(!(Request::is('*/news')) and !(Request::is('*/works/article-*')) )

						<div class="panel panel-default wow fadeInUp">

						<div class="panel-heading">{{ trans('base.latest_news') }}</div>

						<div class="panel-body">

							<div class="row">

								@foreach($last_news as $last_new)

									<div class="r-block-item">

										<div class="col-md-12"><h4>{{ $last_new->getTranslate('title') }}</h4></div>

										@if(count($last_new->getImages()) > 0)

											<div class="col-md-4">

													<a href="/{{ App::getLocale() }}/news/article-{{ $last_new -> id }}" class="thumbnail">
														<img src="/{{$last_new->getImages()[0]['min']}}" alt="...">
													</a>

											</div>

											<div class="col-md-8">

										@else

											<div class="col-md-12">

										@endif

											{!! str_limit($last_new->getTranslate('short_description'), 140) !!}

											<a href="/{{ App::getLocale() }}/news/article-{{ $last_new -> id }}" class="pull-right">{{ trans('base.read_full_news') }}<i class="fa fa-angle-right fa-lg"></i></a>

										</div>

										<hr>

									</div>

								@endforeach
							</div>

							<p><a class="btn btn-primary btn-lg" style="width: 100%;" href="/{{ App::getLocale() }}/news" role="button">{{ trans('base.all_news') }}</a></p>

						</div>

					</div>

					@endif

				</div>

			@endif

		</div>

	</div> {{-- /container --}}

	{{-- Site footer --}}
	<footer>

		<div class="container">

			<div class="row">

				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 wow fadeInUp min-center">

					<a class="navbar-brand" href="/{{ App::getLocale() }}">
						<img alt="Brand" src="/img/frontend/logo.jpg">
					</a>

					<p class="navbar-text"><a href="/{{ App::getLocale() }}">EUROSTANDARD sp. z o.o.</a></p>

				</div>

				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-6 text-center wow fadeInDown min-center">

					<i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>
					<p>	{{  $texts->get('header.address') }}<br>
						{{  $texts->get('header.address_poland') }}
					</p>

				</div>

				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 text-right wow fadeInLeft min-center">

					<i class="fa fa-phone fa-3x" aria-hidden="true"></i>

					<ul class="phone">
						<li>{{  $texts->get('header.tel1') }}</li>
						<li>{{  $texts->get('header.tel2') }}</li>
					</ul>

				</div>

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