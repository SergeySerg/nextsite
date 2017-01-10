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
	<link href="{{ asset('/libs/owlcarousel/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/libs/owlcarousel/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">
</head>

<body>

	<div class="header-line">
		<div class="wrapper wrapper_header-line clearfix">
			<div class="logo-wrap wow slideInLeft clearfix">
				<img src="{{ asset('/img/frontend/flags.jpg') }}" alt="" class="logo" width="42" height="48">
				<div class="logo-text">
					{!! $texts->get('header.name') !!}
					<span class="logo-text_pl">{!! $texts->get('header.describe') !!}</span>
				</div>
			</div>
{{--
			<ul class="lang">
				@foreach($langs as $lang)
					<li><a style="color: black;" href="{{str_replace(url(App::getLocale()), url($lang->lang), Request::url())}}">{{$lang -> lang}}</a></li>
				@endforeach
			</ul>
--}}

			<ul class="phones wow slideInRight">
				<li class="phones_item">{{ $texts->get('header.tel1') }}</li>
				<li class="phones_item phones_item__bg">{{ $texts->get('header.tel2') }}</li>
			</ul>
		</div>
	</div>

	<div class="section_1">
		<div class="wrapper wrapper_section-1 clearfix">
			<div class="women"></div>
			<div class="section-1_wrapper-text wow zoomIn">
				<div class="social">
					<span class="soc-name">{{ trans('base.social') }}</span>
					<ul class="soc-list clearfix">
						<li class="soc-item"><a class="soc-item_vk" href="{{ $texts->get('social_vk') }}"></a></li>
						<li class="soc-item"><a class="soc-item_fb" href="{{ $texts->get('social_fb') }}"></a></li>
					</ul>
				</div>
				<div class="section-1_text"></div>
				<button class="button button_section-1 show-popup">{{ trans('base.check_visa') }}</button>
			</div>
		</div>
		<div class="wrapper wrapper_section-1 clearfix">
			<ul class="visa-type clearfix">
				@foreach($visas as $visa)
					<li class="visa-type_item wow zoomIn">
						<div class="visa-type_img">
							@if(count($visa -> getImages()) > 0)
								<img src="/{{ $visa->getImages()[0]['min'] }}" alt="">
							@else
								No Image
							@endif
						</div>
						<h3 class="visa-type_name">{{ $visa->getTranslate('title') }}</h3>
						<h4 class="visa-type_name-description">
							{{ $visa->getTranslate('specification') }}
							<span class="visa-type_name-number">{{ $visa->code }}</span>
						</h4>
						<div class="visa-type_price">{{ $visa->price }}<span class="visa-type_price-value">{{ $texts->get('symbol-price') }}</span></div>
						<button class="button_red show-popup" data-title="{{ $visa->getTranslate('title') }}">{{ trans('base.check_visa') }}</button>
					</li>
				@endforeach
			</ul>
			<div class="info wow rotateIn">
				<div class="info-text">{{ trans('base.info') }}</div>
				<div class="info-phone">{{ $texts->get('header.tel1') }}</div>
			</div>
		</div>
		<div class="arrow-top"></div>
	</div>

	<div class="section-1_bg"></div>

	<div class="section_2">
		<div class="wrapper wrapper_section-2 clearfix">
			<h2 class="section-name section-name_registration wow wobble">{{ trans('base.registry_visa_center') }}</h2>
			<div class="wrapper_region-block wow slideInLeft">
				@foreach($visas_center as $visa_center)
					<div class="region-block" data-region-type="{{ $visa_center -> code }}">
						<div class="region-name">{{ $visa_center->getTranslate('title') }}</div>
						<div class="region-include">{!! $visa_center->getTranslate('short_description') !!}</div>
						<div class="region-term"><span class="number">{{ $visa_center->term }}</span> {{ trans('base.days') }}</div>
						<div class="region-price">{{ trans('base.from') }} <span class="number">{{ $visa_center->price }}</span> грн.</div>
					</div>
				@endforeach
			</div>
			<div class="map wow slideInRight">
				<div class="map-part west"></div>
				<div class="map-part_red west_red"></div>
				<div class="map-part north-west"></div>
				<div class="map-part_red north-west_red"></div>
				<div class="map-part center"></div>
				<div class="map-part_red center_red"></div>
				<div class="map-part north"></div>
				<div class="map-part_red north_red" style="display: block"></div>
				<div class="map-part south"></div>
				<div class="map-part_red south_red"></div>
				<div class="map-part east"></div>
				<div class="map-part_red east_red"></div>
				<div class="crimea"></div>
				<img src="/img/frontend/imgForSprite/clean_map.png" style="position: relative;z-index: 1;" usemap="#my_map" alt="">
				<map id="my_map" style="position: relative;z-index: 3" name="my_map">
					<area data-hover-img="south" shape="poly" href="/#19" coords="352,289,351,290,349,290,348,289,349,291,351,293,351,295,351,297,349,298,348,298,346,296,344,294,344,295,343,297,341,297,338,297,337,296,336,295,333,296,329,297,327,295,325,293,323,290,320,288,317,290,314,292,314,294,314,295,312,296,310,296,311,298,312,300,315,301,317,303,320,301,322,300,323,300,324,301,326,305,328,310,327,311,327,313,328,313,329,313,329,315,329,317,328,317,327,317,326,320,325,323,325,325,325,328,325,329,325,330,323,330,321,331,323,332,325,333,325,334,325,335,329,339,333,343,333,345,332,347,333,347,334,348,335,347,336,345,338,345,340,345,341,347,343,349,343,350,343,352,342,353,341,353,341,357,341,361,339,362,338,363,340,363,343,363,343,364,344,366,343,369,342,372,344,373,345,375,348,377,350,379,352,379,354,379,356,382,359,384,359,385,359,386,358,386,357,386,358,387,359,388,359,394,359,400,358,401,356,403,359,405,362,406,362,407,362,408,365,409,368,411,370,411,371,411,372,413,373,414,374,414,375,414,376,414,377,414,377,416,377,419,378,420,379,421,377,423,374,426,373,426,372,426,368,422,364,419,364,416,364,414,360,414,356,414,354,416,353,418,351,416,350,415,348,413,347,410,346,409,344,408,344,410,344,412,342,413,340,414,339,414,338,414,335,410,332,406,331,409,330,412,328,409,326,407,326,408,326,410,324,411,322,413,321,413,320,412,320,407,321,403,320,403,320,403,318,404,316,405,314,406,312,407,310,407,309,407,309,409,310,412,310,415,310,419,313,421,315,423,315,424,315,425,311,429,308,432,309,433,310,434,310,436,310,438,305,440,300,442,299,445,299,449,299,450,299,451,296,452,292,454,291,456,290,458,288,458,287,458,287,460,287,462,287,464,287,467,286,469,284,472,279,472,275,471,273,473,272,474,273,476,275,478,275,480,276,483,280,486,283,489,285,489,288,489,289,490,290,491,293,491,296,491,296,488,296,486,298,486,300,485,302,486,304,488,306,485,308,482,310,482,312,482,315,480,317,478,322,478,327,478,331,480,336,481,338,483,340,484,340,488,340,491,340,492,341,492,342,492,342,491,343,488,343,484,343,481,342,477,339,478,337,478,337,470,336,463,337,461,338,459,339,455,339,452,339,451,339,450,342,450,344,450,344,455,343,460,345,461,346,463,345,464,345,465,346,465,348,465,348,464,348,463,347,461,346,460,347,458,347,456,350,455,353,455,353,454,353,453,356,452,359,450,361,451,363,451,363,452,363,453,370,446,377,440,380,434,384,429,384,429,384,430,390,424,396,417,397,414,399,411,400,405,401,400,407,398,413,397,412,392,412,387,408,382,405,378,406,377,406,376,408,377,410,377,413,381,416,384,416,390,416,396,420,397,423,398,426,396,429,393,427,391,426,389,427,388,428,387,430,388,431,388,433,386,434,383,436,383,437,383,437,385,437,386,436,388,434,390,433,393,431,397,432,397,434,397,435,396,435,395,438,395,442,396,444,397,447,397,448,396,448,394,447,390,446,386,449,382,452,379,451,378,449,377,449,375,449,373,447,373,446,372,447,369,447,366,446,365,445,363,446,362,446,361,447,361,448,361,450,363,452,365,451,368,450,370,452,370,454,370,454,371,454,372,454,373,454,374,456,376,457,378,456,381,455,383,454,385,453,386,453,388,453,391,457,395,461,399,461,400,461,401,465,399,468,397,470,399,472,400,472,404,471,407,473,407,475,406,476,406,477,406,478,407,478,409,477,410,476,411,473,411,470,411,467,410,465,408,456,408,447,408,448,408,448,409,451,409,455,409,456,411,458,413,458,414,458,415,456,417,455,419,453,419,452,419,453,421,454,422,457,422,459,422,460,424,461,426,463,426,466,426,467,426,468,426,468,429,468,431,471,432,475,433,477,435,480,436,481,435,482,433,489,432,497,432,499,432,502,432,502,431,503,429,506,429,510,430,510,428,511,426,512,425,514,425,514,427,514,430,516,431,518,433,518,432,519,432,521,435,524,437,525,436,527,435,526,433,526,432,527,430,528,429,530,430,531,430,531,428,530,426,532,424,534,422,535,423,536,424,538,423,540,422,542,423,544,424,546,424,549,424,550,426,552,429,554,429,556,430,556,428,555,427,556,426,557,424,555,423,554,422,555,420,556,419,558,419,559,419,561,423,563,426,566,425,568,425,571,427,573,429,575,427,576,425,578,426,579,426,584,426,588,427,590,424,593,421,596,421,599,421,598,416,598,412,598,410,598,408,594,407,591,405,591,404,591,403,589,403,587,404,584,402,581,399,583,397,584,395,581,394,578,393,578,392,578,390,580,389,583,388,583,387,583,386,583,385,583,384,584,383,585,382,584,379,582,377,580,376,577,375,575,370,573,366,572,365,571,363,570,358,570,353,566,353,562,353,560,350,559,347,559,345,560,344,555,344,551,344,551,346,551,347,552,347,553,347,554,346,555,345,556,346,558,347,557,349,557,350,554,350,551,350,550,351,549,352,549,355,549,357,545,361,542,364,542,366,542,368,539,370,536,373,536,375,536,378,534,380,533,382,533,383,534,384,532,386,531,387,528,387,525,386,523,387,521,389,518,389,516,389,516,389,516,388,517,386,519,383,522,382,525,381,527,381,528,382,529,376,530,371,533,369,536,367,537,363,538,359,540,357,542,356,544,353,545,350,545,347,545,344,544,343,543,343,543,340,544,338,541,339,538,340,533,340,528,341,527,339,526,338,527,335,528,332,526,333,525,333,525,335,524,338,521,338,517,338,517,339,516,340,513,339,510,337,509,336,508,334,506,335,503,335,502,333,500,331,499,327,499,323,500,321,502,320,502,317,503,314,501,311,500,309,500,305,499,302,497,302,495,302,495,304,495,307,494,307,492,308,491,307,489,307,489,308,489,310,487,310,485,310,484,315,483,319,479,319,475,318,472,320,469,321,468,319,466,318,464,320,461,322,459,322,457,322,457,319,457,317,454,317,452,317,452,319,451,320,447,320,444,320,444,319,445,317,445,314,446,311,443,308,440,306,440,303,440,300,441,300,442,300,439,299,435,297,434,299,433,300,430,300,428,300,428,299,429,297,427,297,425,297,424,296,424,295,421,295,418,295,417,293,415,291,415,290,415,289,413,289,412,290,411,289,411,288,408,290,405,292,397,292,389,293,388,294,387,296,384,294,381,293,379,294,377,295,371,294,364,294,362,291,360,289,359,290,357,290,355,289,353,287">
					<area data-hover-img="west" shape="poly" href="/#31" coords="106,104,106,108,105,110,104,113,101,115,98,116,94,116,89,116,88,119,88,121,80,126,73,131,62,141,52,152,43,160,35,169,36,170,38,171,38,179,38,187,37,189,36,192,38,195,40,199,41,201,42,203,41,205,39,206,34,204,29,203,28,202,28,201,27,201,26,201,26,202,26,203,22,207,17,212,17,215,17,219,15,221,14,224,9,228,5,232,4,236,2,241,5,243,7,244,8,247,10,251,10,253,11,255,13,255,16,255,18,257,19,259,20,263,20,266,25,266,29,266,31,268,33,269,33,271,33,273,32,274,30,275,30,276,30,277,31,277,32,277,32,276,32,274,33,274,35,274,37,274,39,274,42,271,45,268,47,268,49,268,51,270,53,271,53,273,53,275,55,276,56,277,62,278,68,279,72,281,77,283,80,283,84,283,87,284,89,285,91,287,92,288,96,288,99,288,102,286,104,285,107,286,109,287,109,288,109,289,107,288,104,288,102,289,101,290,106,290,111,290,111,289,110,288,111,288,112,287,114,290,115,294,118,297,122,301,123,303,124,305,125,302,126,300,126,297,126,295,126,291,125,287,127,283,129,279,131,278,134,277,139,272,144,266,147,264,151,261,154,261,156,261,158,262,160,263,159,255,159,246,160,245,161,244,160,240,160,237,158,237,155,236,155,234,154,232,153,233,151,234,147,232,143,230,143,229,143,228,141,228,139,227,139,225,139,222,137,222,136,221,132,218,129,215,131,213,133,211,132,210,130,210,130,208,129,207,131,205,133,203,131,202,129,201,129,199,129,197,127,188,126,180,127,179,129,178,131,177,134,177,138,173,142,169,143,169,144,169,144,166,143,163,145,162,146,161,152,161,157,160,159,157,160,153,155,148,150,142,150,138,150,133,151,133,153,133,150,132,147,131,147,129,147,127,145,126,143,125,140,126,137,127,135,127,132,126,132,124,132,123,129,121,126,120,126,117,126,115,125,112,124,110,123,110,121,110,120,108,118,106,117,107,115,108,111,105,106,101">
					<area data-hover-img="center" shape="poly" href="/#32" coords="292,49,290,51,286,52,283,52,281,51,280,49,278,49,277,48,278,49,279,50,279,52,279,54,275,56,272,57,270,57,268,56,267,60,266,64,265,64,264,65,263,63,261,61,261,64,262,68,261,69,259,69,259,72,259,76,256,78,253,80,252,84,251,88,249,88,247,89,247,90,247,92,248,94,248,97,248,103,248,110,246,112,244,115,246,117,248,118,246,120,245,122,243,121,242,121,240,119,239,118,239,119,239,120,236,121,234,122,232,121,230,120,229,122,228,123,226,123,224,123,224,126,223,129,222,129,220,129,217,133,214,137,210,138,207,140,204,142,201,145,201,147,201,149,200,149,199,149,199,151,200,152,199,155,199,157,197,157,196,157,195,160,194,162,195,164,197,167,197,171,198,176,199,178,199,180,197,183,194,187,195,191,196,195,196,196,195,198,196,202,197,205,195,207,194,209,194,216,194,223,193,224,191,225,191,227,191,229,192,229,193,230,192,236,192,242,195,248,198,255,199,255,200,256,200,257,200,258,195,258,189,258,188,257,186,255,184,255,182,255,181,254,180,252,181,251,181,249,180,249,179,249,179,250,178,251,176,251,175,251,173,249,171,247,166,247,161,246,162,255,162,264,161,264,160,265,157,264,153,263,150,264,148,266,143,270,139,274,139,275,139,276,135,279,130,282,128,285,127,289,128,293,129,297,128,300,127,303,127,304,127,305,129,305,132,306,134,302,136,298,139,295,143,293,158,293,173,292,178,292,184,292,191,284,198,277,200,277,202,278,205,276,208,274,208,272,208,271,210,270,212,269,212,266,212,264,215,264,218,265,220,267,222,268,224,268,225,268,227,266,228,265,230,266,232,268,234,268,236,267,237,266,238,264,240,264,243,264,244,265,245,266,247,265,249,263,251,263,254,263,255,264,256,266,259,267,262,267,269,274,275,280,277,280,279,280,280,281,281,282,284,283,287,283,286,285,286,287,288,287,290,287,290,289,290,291,291,291,292,291,292,290,292,289,295,288,297,287,302,289,307,290,309,292,311,294,311,294,312,294,313,291,314,288,315,288,317,288,318,286,320,284,325,289,330,294,334,293,338,292,340,294,341,295,342,294,343,292,345,292,348,293,346,291,345,289,347,288,348,286,350,287,351,287,351,286,351,284,350,284,349,284,349,283,349,282,351,280,353,278,355,274,357,271,358,271,360,271,361,268,362,265,361,261,360,257,357,255,355,254,355,252,356,251,353,247,350,244,350,242,350,240,349,241,347,242,346,241,345,240,345,238,345,236,347,235,349,234,347,233,346,233,346,230,346,227,348,225,350,223,349,218,347,214,345,213,344,212,342,209,340,206,342,204,344,202,342,197,340,192,341,191,341,190,340,189,339,187,339,186,339,186,339,184,338,183,338,180,337,177,341,175,345,173,348,171,351,168,352,168,353,167,351,164,349,161,350,160,351,159,351,156,352,154,350,153,349,152,349,149,350,146,349,145,348,144,349,144,350,144,350,143,350,141,348,140,345,138,343,135,341,132,341,130,341,129,343,129,344,129,343,127,342,125,343,124,344,123,343,122,341,121,341,120,341,119,345,117,349,114,349,113,349,112,346,112,343,111,343,110,343,108,344,107,346,107,345,104,345,102,343,99,341,97,341,95,341,94,342,94,343,94,344,91,345,89,343,87,341,86,339,86,338,86,337,80,335,74,337,73,338,72,340,72,341,73,341,71,341,69,339,65,336,62,336,60,336,59,334,53,333,47,331,49,329,52,325,53,321,54,319,55,318,56,318,59,317,62,315,62,312,62,311,61,310,60,310,56,310,53,305,53,301,54,299,54,297,55,295,51,293,47">
					<area data-hover-img="north-west" shape="poly" href="/#34" coords="162,16,160,17,144,17,128,17,127,21,126,26,123,27,120,29,119,29,117,29,117,30,117,31,114,32,111,33,111,34,111,35,109,35,107,35,107,34,106,32,103,31,99,29,98,30,97,30,98,33,98,36,97,38,96,39,97,43,98,46,96,48,94,51,94,52,94,53,98,57,101,61,101,63,101,66,103,68,104,71,104,74,104,76,108,80,112,84,112,85,111,86,108,87,105,88,104,88,104,89,105,93,106,98,108,99,110,101,112,103,115,105,117,104,118,103,120,105,123,108,125,108,127,109,128,112,129,115,129,117,128,118,131,120,134,121,134,123,134,124,139,124,144,123,146,124,149,125,149,127,149,129,152,130,154,130,154,132,154,134,153,135,152,135,152,138,152,141,155,145,159,149,160,149,161,149,161,151,162,154,161,157,160,160,158,162,157,164,155,164,154,164,154,163,154,162,150,163,146,163,146,166,147,168,145,170,143,172,139,175,135,179,134,179,133,179,131,180,128,181,129,186,130,191,131,195,132,200,134,201,136,202,136,203,136,204,134,205,132,207,134,209,137,212,137,213,137,215,135,215,133,214,133,215,133,216,136,218,138,220,140,221,142,223,141,225,141,227,142,225,144,224,145,225,146,225,146,227,146,228,149,230,151,231,152,230,153,229,156,232,159,235,160,235,162,236,162,239,162,241,164,243,166,245,168,244,170,244,173,246,176,249,178,248,180,247,181,247,183,248,183,250,183,253,185,252,187,252,188,254,190,256,193,256,196,256,195,253,193,251,192,247,190,244,190,234,189,224,190,223,192,222,191,215,191,209,193,207,194,206,193,196,192,186,194,182,196,179,195,176,195,173,195,171,195,169,193,166,192,163,192,160,193,156,195,155,197,155,197,152,197,149,197,146,198,143,199,143,200,143,204,139,207,136,209,136,211,136,216,131,221,126,222,123,223,121,227,120,230,118,232,119,233,119,237,117,241,116,243,112,246,109,246,102,245,96,245,94,245,92,244,90,243,89,245,88,246,86,247,86,249,86,250,83,251,80,254,77,256,74,256,71,256,67,258,67,259,67,259,66,258,64,259,62,260,59,262,59,263,59,263,60,263,62,264,59,265,57,266,56,267,56,268,53,270,50,270,50,270,49,267,49,264,48,259,48,254,47,251,45,249,42,249,39,249,36,244,36,238,37,235,36,232,34,229,32,226,30,223,31,220,32,217,29,214,26,211,26,207,26,204,24,202,22,195,21,188,19,187,20,187,21,185,20,184,19,183,19,181,20,176,19,171,18,168,16,166,15,165,15,164,15">
					<area data-hover-img="east" shape="poly" href="/#41" coords="515,4,514,7,513,10,512,14,514,16,516,17,518,19,520,22,520,23,520,24,518,25,516,26,515,25,514,24,513,24,512,24,514,26,516,29,516,31,515,34,512,34,509,34,509,35,508,36,507,35,505,35,504,39,503,44,505,49,508,55,508,56,508,58,507,58,506,58,507,60,507,62,505,64,504,65,505,66,506,67,506,69,506,71,504,72,502,73,503,75,503,76,502,79,501,83,500,83,499,84,499,86,498,88,504,93,509,98,509,101,509,105,508,106,507,107,507,110,506,113,508,114,510,115,510,117,510,118,508,118,506,118,504,124,502,130,496,136,491,141,487,141,483,142,479,141,476,141,476,140,476,138,473,138,470,137,467,140,465,143,464,143,462,142,462,146,461,150,462,151,464,153,466,154,469,155,469,158,468,161,470,161,472,161,473,164,473,167,474,169,475,171,475,173,474,176,475,177,477,179,479,180,482,182,482,184,482,186,485,187,488,187,488,189,488,190,490,189,491,189,491,193,491,197,490,199,488,201,488,201,488,202,491,202,493,202,494,204,494,205,496,204,498,202,499,203,499,204,499,207,498,211,500,212,502,214,503,214,504,215,506,218,509,222,512,222,515,223,516,226,517,228,516,231,515,235,517,237,518,239,518,237,518,236,519,236,521,236,524,237,526,239,527,238,528,238,525,236,523,233,524,232,524,230,525,230,526,230,529,232,532,234,533,234,534,233,540,237,546,241,550,241,555,241,557,243,558,245,558,247,559,250,561,250,563,251,568,257,573,263,573,264,573,266,570,266,568,266,561,259,554,252,550,250,547,249,544,247,542,245,542,246,541,248,541,250,540,252,537,251,533,251,532,250,531,249,530,250,528,250,528,251,528,252,530,252,533,252,536,255,539,257,534,262,529,266,527,266,525,265,525,267,524,270,524,275,525,280,525,281,526,282,526,284,526,287,525,289,524,291,521,292,519,293,518,293,516,293,515,296,513,298,512,298,511,297,511,298,511,299,506,301,502,303,503,306,503,309,504,311,506,314,505,317,505,321,503,323,501,325,502,328,503,332,506,332,508,332,511,335,514,337,515,337,516,337,517,336,517,335,520,335,523,335,523,333,523,331,526,331,528,330,529,331,530,331,529,335,529,338,535,338,541,337,543,335,546,332,549,332,552,331,554,332,556,334,558,332,561,330,564,331,567,331,567,330,568,328,573,328,578,328,580,330,582,331,588,331,594,330,596,328,598,327,600,323,601,320,603,320,605,320,605,322,605,323,607,323,609,322,610,323,610,324,609,326,608,327,609,330,610,332,610,335,610,337,607,339,605,341,601,341,597,341,596,343,595,344,593,344,591,344,587,341,583,337,580,336,577,335,574,336,571,338,569,338,566,338,564,341,562,344,562,345,561,347,563,349,564,351,566,351,567,351,568,350,568,348,570,348,572,348,572,350,572,351,573,351,574,351,574,353,574,355,573,355,572,355,573,359,573,363,575,364,576,366,576,367,576,369,578,371,580,373,582,374,585,376,586,379,588,383,587,384,586,385,586,387,586,389,583,391,581,392,583,392,585,392,586,394,586,396,586,397,585,398,587,399,588,401,590,401,592,400,593,402,593,404,596,405,599,406,600,408,600,410,602,410,605,410,604,411,604,413,605,413,606,413,606,411,606,409,605,408,604,407,605,406,606,404,608,405,610,407,611,407,612,408,611,404,610,401,610,396,610,392,611,391,612,391,614,392,615,394,616,399,616,404,617,405,618,405,619,404,619,403,620,403,621,403,621,405,621,406,629,399,637,392,645,390,654,389,655,390,657,391,660,388,664,384,669,382,675,380,677,380,679,380,681,382,683,383,684,381,684,379,688,376,692,373,693,373,694,373,698,371,702,368,703,368,705,368,706,370,707,371,709,368,711,366,712,362,714,358,716,357,719,356,722,357,725,358,728,356,731,355,734,355,737,356,740,355,742,354,743,355,744,356,746,354,747,353,747,350,747,347,749,344,751,342,749,341,746,340,746,339,746,338,748,336,750,333,750,327,750,321,755,318,760,315,762,315,765,315,765,314,766,312,768,312,770,312,771,307,771,302,772,300,773,298,779,298,786,297,787,298,788,299,789,299,791,298,802,298,813,297,815,295,817,294,817,288,816,283,817,283,818,282,818,280,818,277,820,274,822,270,823,270,824,270,824,268,824,266,822,266,819,266,818,264,818,263,819,261,820,259,818,258,816,257,815,253,814,249,811,248,807,248,806,246,805,243,806,241,808,238,808,236,808,234,810,231,812,228,813,228,814,228,815,229,815,230,818,230,820,230,821,228,823,227,823,226,823,225,821,227,818,228,816,227,814,226,810,223,807,219,805,219,803,219,803,217,803,215,808,213,814,211,817,207,820,202,821,200,823,198,823,196,823,193,820,189,817,184,817,182,817,179,819,178,820,177,820,176,820,175,818,175,816,175,813,178,810,180,807,180,803,179,800,177,797,175,796,172,795,169,793,169,791,169,786,169,782,168,779,165,776,162,772,165,768,167,766,167,765,167,764,165,763,162,761,162,758,162,756,159,753,156,751,156,750,156,748,158,746,159,744,158,743,156,740,156,738,156,737,153,737,151,735,151,733,151,733,154,733,156,730,159,727,162,726,162,725,162,720,157,715,152,713,152,711,152,708,149,705,145,704,141,704,137,700,135,697,132,697,130,697,129,695,129,693,129,689,132,684,135,678,136,672,136,667,141,662,146,661,146,659,146,657,144,656,141,651,141,646,141,642,137,639,133,634,132,629,132,625,135,622,138,619,139,617,139,614,137,612,135,612,134,612,133,608,130,605,126,604,121,604,116,605,116,606,115,606,112,606,110,604,107,602,104,602,102,602,101,600,99,598,97,598,95,598,94,600,93,601,93,601,92,601,91,598,91,594,91,593,89,591,87,591,84,591,82,589,81,588,80,581,82,574,84,572,82,569,80,565,79,561,79,558,79,555,79,553,78,552,77,552,75,552,74,554,72,555,70,553,69,551,68,551,66,551,63,552,62,553,61,550,57,548,53,547,53,547,53,545,52,543,50,544,49,545,47,547,47,549,47,553,45,558,43,557,42,556,41,556,38,556,36,553,36,551,36,550,34,549,32,546,28,543,25,543,20,544,16,541,12,538,9,535,6,532,3,529,3,526,3,523,5,520,6,518,4,516,2">
					<area data-hover-img="north" shape="poly" href="/#50" coords="502,6,498,9,491,9,484,9,481,7,478,5,475,5,472,5,472,8,471,12,472,13,472,15,468,19,464,24,459,24,455,24,453,22,452,20,449,20,446,20,439,18,431,17,427,20,424,24,422,22,421,21,419,20,418,20,415,20,411,21,411,23,411,25,406,30,400,35,400,38,399,42,398,43,398,45,396,45,394,45,394,50,394,55,395,57,396,58,396,62,397,66,398,69,398,73,396,75,394,77,395,82,396,87,396,92,395,97,394,99,393,102,394,104,394,105,393,108,391,110,391,114,392,119,390,119,389,119,388,114,388,110,389,107,391,104,392,98,392,92,393,89,393,87,391,87,388,87,388,88,388,90,386,91,384,92,385,92,386,92,388,95,389,98,389,100,389,102,387,106,385,110,386,112,387,115,387,118,388,121,387,121,386,121,385,120,384,119,384,116,384,114,383,113,382,113,382,111,383,109,382,108,381,108,383,106,385,104,386,102,386,99,386,97,386,96,382,94,379,93,379,91,379,89,382,88,385,88,385,84,385,80,382,79,379,78,379,76,379,75,382,75,385,75,388,75,392,76,387,74,383,72,383,69,383,67,382,64,380,62,376,61,372,60,372,61,371,61,367,63,364,64,361,64,359,64,358,61,356,58,352,63,347,67,345,66,343,66,343,68,344,69,343,73,343,76,340,75,338,75,339,78,339,82,344,86,349,90,347,91,345,93,345,95,344,98,346,99,347,100,347,102,347,105,348,106,350,107,348,109,346,110,348,110,351,109,351,111,352,113,351,115,351,116,347,118,344,120,344,120,344,120,346,122,347,123,346,125,345,126,346,127,347,127,347,128,347,129,346,130,344,132,345,134,346,136,349,138,352,140,352,144,353,148,352,149,351,151,353,153,355,155,354,157,353,158,354,158,354,158,353,160,352,161,354,164,356,167,356,168,356,169,354,170,352,170,348,173,344,177,342,177,340,178,341,180,341,183,342,184,343,185,343,187,342,188,343,189,344,189,344,191,343,192,345,198,347,203,345,205,343,206,345,209,346,211,348,210,349,210,349,212,349,214,349,214,349,215,351,215,353,215,353,220,353,225,350,226,348,228,348,230,348,231,349,231,350,231,351,233,351,235,349,236,347,238,347,238,347,239,349,238,351,237,352,238,353,238,353,241,353,244,356,247,359,251,359,252,358,254,359,254,361,255,362,258,364,262,364,264,365,267,363,270,360,274,359,273,357,273,357,274,357,275,355,279,352,282,352,282,352,283,354,285,356,287,357,287,358,287,358,286,358,284,359,284,360,284,362,287,364,291,365,291,367,292,377,291,388,291,397,290,406,290,407,288,409,286,413,287,417,287,418,290,419,293,423,293,427,292,427,294,427,295,429,295,431,295,431,297,431,299,433,297,434,295,438,296,443,297,444,299,445,301,443,302,442,303,443,305,444,307,445,307,447,307,448,311,450,314,449,314,448,314,448,316,448,318,449,317,451,315,454,315,457,314,459,317,461,320,462,319,463,317,465,316,467,315,469,317,470,318,473,317,476,316,478,317,481,317,481,316,482,315,482,311,483,307,484,306,485,305,489,305,493,305,493,303,493,301,495,299,498,298,500,299,501,300,505,299,509,298,509,295,508,292,510,291,511,291,512,292,513,293,513,292,514,291,516,291,519,291,521,289,524,286,524,284,524,282,523,282,522,281,522,275,521,269,522,266,524,264,525,263,526,262,528,263,530,263,532,260,535,257,534,256,533,255,530,255,527,255,526,252,526,249,529,247,532,246,534,247,535,249,537,249,539,249,539,247,538,245,539,244,540,243,538,242,535,240,532,240,530,240,528,241,527,242,526,241,525,240,523,240,521,240,519,240,518,241,516,239,514,238,513,235,511,232,513,232,514,232,513,231,512,230,510,230,508,231,508,234,507,236,505,236,502,236,502,235,501,234,503,233,504,232,505,231,505,229,500,229,496,230,494,231,492,231,490,229,489,227,485,223,482,220,472,215,463,211,459,206,455,201,449,198,443,195,442,194,441,192,442,191,442,190,446,190,449,190,454,193,460,195,462,197,464,199,467,199,470,199,474,202,478,206,480,207,483,209,485,209,486,209,485,207,484,206,483,199,483,192,484,190,485,189,483,188,480,188,480,187,480,186,480,185,480,184,477,183,475,182,473,178,471,175,472,173,473,171,472,170,471,169,471,166,471,164,469,163,466,162,466,159,466,156,465,156,463,156,461,153,459,150,459,148,459,145,460,143,461,140,463,140,465,140,468,137,470,134,472,135,474,136,476,136,478,136,478,138,478,139,480,139,483,139,483,138,484,137,485,138,486,139,488,139,490,139,494,134,499,130,500,126,502,123,503,119,504,116,505,116,506,116,505,114,503,112,504,110,505,109,505,106,505,104,506,104,507,104,507,102,507,100,503,96,500,92,497,91,495,90,496,87,496,84,498,81,500,79,500,76,500,74,498,72,497,69,497,68,498,66,499,66,501,66,502,68,502,70,503,70,504,70,503,67,502,64,503,62,505,60,504,59,503,58,504,57,506,55,505,53,503,52,503,50,503,48,502,47,500,46,500,44,500,43,502,40,503,37,503,35,503,34,505,33,507,31,511,31,514,31,514,30,514,30,511,27,509,24,510,23,512,22,514,22,517,23,517,22,517,22,513,18,509,14,510,11,512,8,512,5,513,2,510,2,507,2">
				</map>
			</div>
			<button class="button button_section-2 show-popup">{{ trans('base.registry') }}</button>
			<div class="info_section wow rotateIn">{!! $texts->get('section_2.info') !!}</div>
		</div>
		<div class="arrow-top arrow-top_section-2"></div>
	</div>

	<div class="section-2_bg"></div>

<div class="section_3">
	<div class="wrapper wrapper_section-3 clearfix">
		<h2 class="section-name section-name_news wow wobble">{{ trans('base.news') }}</h2>
		<div class="social_section-3 wow rotateIn">
			<div class="soc-name_section-3">{{ trans('base.news_soc') }}</div>
			<ul class="left clearfix">
				<li class="soc-item"><a class="soc-item_vk" href="{{ $texts->get('social_vk') }}"></a></li>
				<li class="soc-item"><a class="soc-item_fb" href="{{ $texts->get('social_fb') }}"></a></li>
			</ul>
		</div>
		<div class="wrapper-news">
			<ul class="news-block owl-carousel clearfix">
				@foreach($news as $new)
					<li class="news-block_item item wow zoomIn">
						<div class="news-block_img" style="background-image: url('{{ $new->getImages()[0]['min'] }}');"></div>
						<div class="news-text-wrap">
							<h3 class="news-block_title">{!! str_limit($new->getTranslate('title'), 32, '...') !!}</h3>
							<div class="news-block_short-description">{!! str_limit($new->getTranslate('short_description'), 150, '...') !!}</div>
							<button class="button_red show-popup-news" data-new-id="{{ $new->id }}">{{ trans('base.more') }}</button>
						</div>
					</li>
				@endforeach
			</ul>
		</div>
		{{--News Popup--}}
		@foreach($news as $new)
			<div class="popup-news" data-id="{{ $new->id }}">
				<div class="close close_news"></div>
				<div class="news-block_img" style="background-image: url('{{ $new->getImages()[0]['min'] }}');"></div>
				<h3 class="popup-news_title">{!! str_limit($new->getTranslate('title'), 70, '...') !!}</h3>
				{!! $new->getTranslate('description') !!}
				<div class="popup-news_return close_news">повернутись назад</div>
			</div>
		@endforeach
		{{--END News Popup--}}
		<div class="subscribe-news show-popup">{{ trans('base.subscribe_news') }}</div>
	</div>
	<div class="arrow-top arrow-top_section-3"></div>
</div>

<div class="section-3_bg"></div>

<div class="section_4">
	<div class="wrapper wrapper_section-4 clearfix">
		<div class="insurance-block wow slideInRight">
			<h2 class="section-name section-name_insurance">{{ trans('base.insurance') }}</h2>
			{!! $texts->get('insurance') !!}
			<button class="button button_section-4 show-popup">{{ trans('base.order_insurance') }}</button>
		</div>
		<div class="hands"></div>
		<div class="info_section info_section-4 wow rotateIn">{!! $texts->get('section_4.info') !!}</div>
	</div>
	<div class="arrow-top"></div>
</div>

<div class="section-4_bg"></div>

<div class="section_5">
	<div class="wrapper wrapper_section-5 clearfix">
		<h2 class="section-name section-name_services wow wobble">{{ trans('base.services') }}</h2>
		<div class="info info_services wow rotateIn">
			<div class="info-text">{{ trans('base.info') }}</div>
			<div class="info-phone">{{ $texts->get('header.tel1') }}</div>
		</div>
		<ul class="news-block clearfix">
			@foreach($services as $service)
				<li data-service-id="{{ $service->id }}" class="services-block_item wow zoomIn">
					<div class="services-block_img">
						@if(count($service -> getImages()) > 0)
							<img src="/{{ $service->getImages()[0]['min'] }}" alt="">
						@else
							No Image
						@endif
					</div>
					<h3 class="services-block_title">{{$service->getTranslate('title')}}</h3>
					<div class="services-block_short-description">{!! str_limit($service->getTranslate('short_description'), 150, '...') !!}</div>
				</li>
				{{--Popup-services--}}
				<div class="popup-services" data-id="{{ $service->id }}" >
					<div class="popup-services_info-block clearfix">
						<div class="close close_services"></div>
						<div class="popup-services_name">
							<div class="services-block_img">
								@if(count($service -> getImages()) > 0)
									<img src="/{{ $service->getImages()[0]['min'] }}" alt="">
								@else
									No Image
								@endif
							</div>
							<h3 class="services-block_title">{{$service->getTranslate('title')}}</h3>
						</div>
						<div class="popup-services_text">
							{!! $service->getTranslate('description') !!}
						</div>
					</div>
					<form action="post" id="popup-services-{{ $service->id }}" class="popup-services_form-block">
						<div class="popup-services_form-block_name">{{ trans('base.callback') }}</div>
						<input type="hidden" name="type">
						<input type="text" required="1" name="name" id="name" class="popup-services-input" placeholder="{{ trans('base.put_name') }}">
						<input type="number" required="1" name="phone"  id="phone" class="popup-services-input" placeholder="{{ trans('base.put_phone') }}">
						<input type="hidden" name="_token" value="{{csrf_token()}}"/>
						<button class="button button_callback-section" id="{{ $service->id }}" data-title="{{ $service->getTranslate('title') }}">{{ trans('base.send') }}</button>
					</form>
				</div>
				{{--Popup-services--}}
			@endforeach
		</ul>
		<div class="info_section info_section-5 wow rotateIn">{!! $texts->get('section_5.info') !!}</div>
		<button class="button button_section-5 show-popup">{{ trans('base.callback') }}</button>
	</div>
	<div class="arrow-top"></div>
</div>

<div class="section-5_bg"></div>

<div class="section_6">
	<div class="wrapper wrapper_section-6 clearfix">
		<div class="advice-block">
			<h2 class="section-name section-name_advice wow wobble">{{ trans('base.advices') }}</h2>
			<ul class="advice-list">
				@for($i = 0; $i < count($advices); $i++)
					<li class="advice-list_item wow slideInLeft clearfix show-popup-advices" data-advice-id="{{ $advices[$i]->id }}" >
						<div class="advice-list_item-number">{{ $i+1 }}</div>
						<div class="advice-list_item-text">{!! $advices[$i]->getTranslate('short_description') !!}</div>
					</li>
					<div class="popup-question" data-id="{{ $advices[$i]->id }}">
						<div class="close close_question"></div>
						<div class="advice-list_item-number">{{ $i+1 }}</div>
						<div class="popup-question_name">{{ $advices[$i]->getTranslate('title') }}</div>
						<div class="advice-list_item-text">{!! str_limit($advices[$i]->getTranslate('description'), 700, '...') !!}</div>
					</div>
				@endfor
			</ul>
			<button class="button_red button_section-6 show-popup">{{ trans('base.learn_more') }}</button>
		</div>
		<div class="men"></div>
	</div>
	<div class="arrow-top"></div>
</div>

<div class="section-6_bg"></div>

<div class="section_7">
	<div class="wrapper wrapper_section-7 clearfix">
		<h2 class="section-name section-name_contact wow wobble">{{ trans('base.want') }}</h2>
		<div class="contact-map wow slideInRight">
			{!! $texts->get('footer.maps') !!}}
		</div>
		<div class="contact-data wow slideInLeft">
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
				<input class="callback-item" required="1" type="text" name="name" placeholder="{{ trans('base.put_name') }}">
				<input class="callback-item" required="1" type="email" name="email" placeholder="{{ trans('base.put_email') }}">
				<input type="hidden" name="_token" value="{{csrf_token()}}"/>
				<textarea class="callback-item" required="1" name="text" cols="30" rows="10" placeholder="{{ trans('base.message') }}"></textarea>
				<button class="button button_callback-section" id="submit-send-callback">{{ trans('base.send') }}</button>
			</form>
		</div>
	</div>
</div>

<footer class="footer">© ООО "IP-home", 2017 г. Все права защищены.</footer>
{{--Popup--}}
<div class="popup-callback">
	<div class="close" id="modal_close"></div>
	<form id="popup" method="post">
		<div class="popup-callback_name">{{ trans('base.callback') }}</div>
		<input type="hidden" name="type">
		<input type="text" required="1" name="name" id="name"  class="popup-callback-input" placeholder="{{ trans('base.put_name') }}">
		<input type="number" required="1" name="phone"  id="phone" class="popup-callback-input" placeholder="{{ trans('base.put_phone') }}">
		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
		<button class="button button_callback-section" id="submit-send">{{ trans('base.send') }}</button>
	</form>
</div>

{{--/Popup--}}

<div id="overlay"></div><!-- Пoдлoжкa -->
{{--Файл переводов--}}
<script>
	var trans = {
		'base.success': '{{ trans('base.success_send_contact') }}',
		'base.error': '{{ trans('base.error_send_contact') }}',
	};
</script>
{{--Файл переводов--}}
{{-- JS --}}
<script src="{{ asset('/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('/js/common.js') }}"></script>
<script src="{{ asset('/js/frontend/common.js') }}"></script>
<script src="{{ asset('/js/plugins/sweetalert.min.js') }}"></script>
<script src="{{ asset('/libs/owlcarousel/dist/owl.carousel.min.js') }}"></script>
<script src="http://azmind.com/demo/andia-agency/v2-1/assets/js/wow.min.js" type="application/javascript"></script>
<link href="http://azmind.com/demo/andia-agency/v2-1/assets/css/animate.css" rel="stylesheet">
<script>
	new WOW().init();
</script>

</body>
</html>