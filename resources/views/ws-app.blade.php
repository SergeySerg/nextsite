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
				@if (!$visas->isEmpty())
					@foreach($visas as $visa)
						<div style="float: left;border:1px red solid;margin-right: 10px">
							<div style="font-size: 14px">{{ $visa->getTranslate('title') }}</div>
							<div>{{ $visa->getTranslate('price') }}</div>
							<button type="button" data-title="{{ $visa->getTranslate('title') }}" class="show-popup" data-toggle="modal" data-target="#myModal">
								Зворотній зв'язок
							</button>
						</div>
					@endforeach
				@endif
			</div>
			<div class="col-md-12 fix-height">
				@if (!$visas_center->isEmpty())
					@foreach($visas_center as $visa_center)
						<div style="float: left;border:1px red solid;margin-right: 10px">
							<div style="font-size: 14px">{{ $visa_center->getTranslate('title') }}</div>
							<div>{{ $visa_center->getTranslate('price') }}</div>
							<button type="button" data-title="{{ $visa_center->getTranslate('title') }}" class="show-popup" data-toggle="modal" data-target="#myModal">
								Зворотній зв'язок
							</button>
						</div>
					@endforeach
				@endif
			</div>
				{{-- Modal --}}
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

					<div class="modal-dialog" role="document">

						<form id="popup" method="post">

							<div class="modal-content">

								<div class="modal-header">

									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

									<h4 class="modal-title" id="myModalLabel" style="text-align: center">Зворотній звязок</h4>

								</div>

								<div class="modal-body">

									<div class="row-fluid">

										<div class="span6">

											<div class="control-group">

												<div class="input-group input-group-sm">
													<input type="hidden" name="type">
												</div>

												<div class="input-group input-group-sm">

													<input type="number" required  name="phone"  id="phone" class="form-control span12" placeholder="Тел" aria-describedby="sizing-addon3">

												</div>

												<div class="input-group input-group-sm">

													<input type="text" name="name" id="name" class="form-control span12" placeholder="ПІБ" aria-describedby="sizing-addon3">

												</div>

												<input type="hidden" name="_token" value="{{csrf_token()}}"/>

											</div>

										</div>

									</div>

								</div>

								<div class="modal-footer" style="text-align: center">

									<input name="submit" class="btn btn-primary" id="submit-send" tabindex="5" value="Заказать" type="submit">

								</div>

								<div id="token" style="display: none">{{csrf_token()}}</div>

							</div>

						</form>

					</div>

				</div>
				{{-- /Modal --}}

			</div>

		</div>

		<div class="row" style="min-height: 600px;">
			<div class="col-md-12 fix-height">
				@if (!$services->isEmpty())
					@foreach($services as $service)
						<div style="float: left;border:1px red solid;margin-right: 10px">
							<div style="font-size: 14px">{{ $service->getTranslate('title') }}</div>
							<div>{{ $service->getTranslate('price') }}</div>
							<button type="button" data-title="{{ $service->getTranslate('title') }}" class="show-popup" data-toggle="modal" data-target="#myModal">
								Зворотній зв'язок
							</button>
						</div>
					@endforeach
				@endif
			</div>
			<button type="button" class="show-popup" data-toggle="modal" data-target="#myModal_forService">
				Зворотній зв'язок для послуг
			</button>
			{{-- Modal --}}
			<div class="modal fade" id="myModal_forService" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

				<div class="modal-dialog" role="document">

					<form id="popup-services" method="post">

						<div class="modal-content">

							<div class="modal-header">

								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

								<h4 class="modal-title" id="myModalLabel" style="text-align: center">Зворотній звязок для послуг</h4>

							</div>

							<div class="modal-body">

								<div class="row-fluid">

									<div class="span6">

										<div class="control-group">

											<div class="input-group input-group-sm">

												<input type="hidden" name="type">

											</div>

											<div class="input-group input-group-sm">

												<input type="number" required  name="phone"  id="phone" class="form-control span12" placeholder="Тел" aria-describedby="sizing-addon3">

											</div>

											<div class="input-group input-group-sm">

												<input type="text" name="name" id="name" class="form-control span12" placeholder="ПІБ" aria-describedby="sizing-addon3">

											</div>

												<input type="hidden" name="_token" value="{{csrf_token()}}"/>

										</div>

									</div>

								</div>

							</div>

							<div class="modal-footer" style="text-align: center">

								<input name="submit" class="btn btn-primary" id="submit" tabindex="5" value="Отправить" type="submit">

							</div>

							<div id="token" style="display: none">{{csrf_token()}}</div>

						</div>

					</form>

				</div>

			</div>
			{{-- /Modal --}}



		</div>

	</div> {{-- /container --}}
	{{--Файл переводов--}}
	<script>
		var trans = {
			'base.success': '{{ trans('base.success_send_contact') }}',
			'base.error': '{{ trans('base.error_send_contact') }}',
		};
	</script>
	{{--Файл переводов--}}

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