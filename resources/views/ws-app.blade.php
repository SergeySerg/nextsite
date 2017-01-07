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

	{{-- CSS --}}

	<link rel="stylesheet" href="{{ asset('/libs/normalize.css/normalize.css') }}">
	<link rel="stylesheet" href="{{ asset('/libs/bootstrap-grid-only/css/grid12.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/frontend/fonts.css') }}">
	<link href="{{ asset('/css/frontend/main.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/plugins/sweetalert.css') }}" rel="stylesheet">

</head>

<body>
<div class="header-line">
	<div class="wrapper wrapper_header-line clearfix">
		<img src="{{ asset('/img/frontend/flags.jpg') }}" alt="" class="logo" width="42" height="48">
		<div class="logo-text">
			{!! $texts->get('header.name') !!}
		</div>
		<ul class="phones">
			<li class="phones_item">{{ $texts->get('header.tel1') }}</li>
			<li class="phones_item phones_item__bg">{{ $texts->get('header.tel2') }}</li>
		</ul>
	</div>
</div>

<div class="section_1">
	<div class="wrapper wrapper_section-1 clearfix">
		<div class="women"></div>
		<div class="section-1_wrapper-text">
			<div class="social">
				<span class="soc-name">{{ trans('base.social') }}</span>
				<ul class="soc-list clearfix">
					<li class="soc-item"><a class="soc-item_vk" href="{{ $texts->get('social_vk') }}"></a></li>
					<li class="soc-item"><a class="soc-item_fb" href="{{ $texts->get('social_fb') }}"></a></li>
				</ul>
			</div>
			<div class="section-1_text"></div>
			<button class="button button_section-1">{{ trans('base.check_visa') }}</button>
		</div>
	</div>
	<div class="wrapper wrapper_section-1 clearfix">
		<ul class="visa-type clearfix">
			@for($i=0; $i < count($visas); $i++)
				<li class="visa-type_item">
					<div class="visa-type_img visa-type_img__{{$i+1}}"></div>
					{!! $visas[$i]->getTranslate('title') !!}
					<div class="visa-type_price">{{ $visas[$i]->price }}<span class="visa-type_price-value">{{ $texts->get('symbol-price') }}</span></div>
					<button class="button_red">{{ trans('base.check_visa') }}</button>
				</li>
			@endfor
		</ul>
		<div class="info">
			<div class="info-text">{{ trans('base.info') }}</div>
			<div class="info-phone">{{ $texts->get('header.tel1') }}</div>
		</div>
	</div>
	<div class="arrow-top"></div>
</div>

<div class="section-1_bg"></div>

<div class="section_2">
	<div class="wrapper wrapper_section-2 clearfix">
		<h2 class="section-name section-name_registration">{{ trans('base.registry_visa_center') }}</h2>
			@foreach($visas_center as $visa_center)
				<div class="region-block">
					<div class="region-name">{{ $visa_center->getTranslate('title') }}</div>
					<div class="region-include">{!! $visa_center->getTranslate('short_description') !!}</div>
					<div class="region-term"><span class="number">{{ $visa_center->term }}</span> {{ trans('base.days') }}</div>
					<div class="region-price">{{ trans('base.from') }} <span class="number">{{ $visa_center->price }}</span> грн.</div>
				</div>

				<div class="map">
					<div class="map_1"></div>
				</div>
				<button class="button button_section-2">{{ trans('base.registry') }}</button>
		@endforeach
		<div class="info_section-2">Об этом заявил руководитель фракции НФ Максим Бурбак во время общения с журналистами, сообщает Цензор.НЕТ со ссылкой на "112 Украина". Источник: http://censor.net.ua/n420629</div>
	</div>
	<div class="arrow-top arrow-top_section-2"></div>
</div>

<div class="section-2_bg"></div>

<div class="section_3">
	<div class="wrapper wrapper_section-3 clearfix">
		<h2 class="section-name section-name_news">{{ trans('base.news') }}</h2>
		<div class="social_section-3">
			<div class="soc-name_section-3">{{ trans('base.news_soc') }}</div>
			<ul class="left clearfix">
				<li class="soc-item"><a class="soc-item_vk" href="{{ $texts->get('social_vk') }}"></a></li>
				<li class="soc-item"><a class="soc-item_fb" href="{{ $texts->get('social_fb') }}"></a></li>
			</ul>
		</div>
		<ul class="news-block clearfix">
			@foreach($news as $new)
				<li class="news-block_item">
					<div class="news-block_img" style="background-image: url('{{ asset('/img/frontend/imgForSprite/news1.jpg') }}');"></div>
					<div class="news-text-wrap">
						<h3 class="news-block_title">{!! str_limit($new->getTranslate('title'), 20, '...') !!}</h3>
						<p class="news-block_short-description">{!! str_limit($new->getTranslate('short_description'), 80, '...') !!}</p>
						<button class="button_red">{{ trans('base.more') }}</button>
					</div>
				</li>
			@endforeach
		</ul>
		<div class="subscribe-news">{{ trans('base.subscribe_news') }}</div>
	</div>
	<div class="arrow-top arrow-top_section-3"></div>
</div>

<div class="section-3_bg"></div>

<div class="section_4">
	<div class="wrapper wrapper_section-4 clearfix">
		<div class="insurance-block">
			<h2 class="section-name section-name_insurance">{{ trans('base.insurance') }}</h2>
			{!! $texts->get('insurance') !!}
			<button class="button button_section-4">{{ trans('base.order_insurance') }}</button>
		</div>
		<div class="hands"></div>
		<div class="info_section info_section-4">Об этом заявил руководитель фракции НФ Максим Бурбак во время общения с журналистами, сообщает Цензор.НЕТ со ссылкой на "112 Украина". Источник:</div>
	</div>
	<div class="arrow-top"></div>
</div>

<div class="section-4_bg"></div>

<div class="section_5">
	<div class="wrapper wrapper_section-5 clearfix">
		<h2 class="section-name section-name_services">{{ trans('base.services') }}</h2>
		<div class="info info_services">
			<div class="info-text">{{ trans('base.info') }}</div>
			<div class="info-phone">{{ $texts->get('header.tel1') }}</div>
		</div>
		<ul class="news-block clearfix">
			<li class="services-block_item">
				<div class="services-block_img services-block_img__passport"></div>
				<h3 class="services-block_title">Термінові Загран Паспорта</h3>
				<p class="services-block_short-description">Об этом заявил руководитель фракции НФ Максим Бурбак во время общения с журналистами, сообщает Цензор.НЕТ со ссыл- кой на "112 Украина". Источник:</p>
			</li>
			<li class="services-block_item">
				<div class="services-block_img services-block_img__map"></div>
				<h3 class="services-block_title">Карта Поляка</h3>
				<p class="services-block_short-description">Об этом заявил руководитель фракции НФ Максим Бурбак во время общения с журналистами, сообщает Цензор.НЕТ со ссыл- кой на "112 Украина". Источник: http://censor.net.ua/n420629</p>
			</li>
			<li class="services-block_item">
				<div class="services-block_img services-block_img__education"></div>
				<h3 class="services-block_title">Освіта в Польщі</h3>
				<p class="services-block_short-description">Об этом заявил руководитель фракции НФ Максим Бурбак во время общения с журналистами, сообщает Цензор.НЕТ со ссыл- кой на "112 Украина". Источник: http://censor.net.ua/n420629</p>
			</li>
			<li class="services-block_item">
				<div class="services-block_img services-block_img__house"></div>
				<h3 class="services-block_title">Реєстрація	Фірми в	Польщі</h3>
				<p class="services-block_short-description">Об этом заявил руководитель фракции НФ Максим Бурбак во время общения с журналистами, сообщает Цензор.НЕТ со ссыл- кой на "112 Украина". Источник:</p>
			</li>
		</ul>
		<div class="info_section info_section-5">Об этом заявил руководитель фракции НФ Максим Бурбак во время общения с журналистами, сообщает Цензор.НЕТ со ссылкой на "112 Украина". Источник:</div>
		<button class="button button_section-5">{{ trans('base.callback') }}</button>
	</div>
	<div class="arrow-top"></div>
</div>

<div class="section-5_bg"></div>

<div class="section_6">
	<div class="wrapper wrapper_section-6 clearfix">
		<div class="advice-block">
			<h2 class="section-name section-name_advice">{{ trans('base.advices') }}</h2>
			<ul class="advice-list">
				@for($i = 0; $i < count($advices); $i++)
					<li class="advice-list_item clearfix">
						<div class="advice-list_item-number">{{  $i+1 }}</div>
						<p class="advice-list_item-text">{!! $advices[$i]->getTranslate('short_description') !!}</p>
					</li>
				@endfor
			</ul>
			<button class="button_red button_section-6">{{ trans('base.learn_more') }}</button>
		</div>
		<div class="men"></div>
	</div>
	<div class="arrow-top"></div>
</div>

<div class="section-6_bg"></div>

<div class="section_7">
	<div class="wrapper wrapper_section-7 clearfix">
		<h2 class="section-name section-name_contact">{{ trans('base.want') }}</h2>
		<div class="contact-map">
			{!! $texts->get('footer.maps') !!}}
		</div>
		<div class="contact-data">
			<div class="contact-data_address">
				<div class="section-name_contact-title">{{ trans('base.contact') }}</div>
				<div class="contact-data_text">Маіл: {{ $texts->get('header.mail') }} <br>
					Tel {{ $texts->get('header.tel1') }} <br>
					Tel {{ $texts->get('header.tel2') }} <br>
					{{ $texts->get('footer.address_1') }} <br>
					{{ $texts->get('header.address_2') }}
				</div>
			</div>
			<form action="POST" class="callback">
				<div class="section-name_contact-title">{{ trans('base.callback') }}</div>
				<input class="callback-item" type="text" name="name" placeholder="{{ trans('base.put_name') }}">
				<input class="callback-item" type="text" name="e-mail" placeholder="{{ trans('base.put_email') }}">
				<textarea class="callback-item" name="text" cols="30" rows="10" placeholder="{{ trans('base.message') }}"></textarea>
				<button class="button button_callback-section">{{ trans('base.send') }}</button>
			</form>
		</div>
	</div>
</div>

<footer class="footer">© ООО "IP-home", 2017 г. Все права защищены.</footer>

{{-- JS --}}
<script src="{{ asset('/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('/js/plugins/sweetalert.min.js') }}"></script>
<script src="{{ asset('/js/common.js') }}"></script>

<!--<script src="http://azmind.com/demo/andia-agency/v2-1/assets/js/wow.min.js" type="application/javascript"></script>
<link href="http://azmind.com/demo/andia-agency/v2-1/assets/css/animate.css" rel="stylesheet">-->

</body>
</html>