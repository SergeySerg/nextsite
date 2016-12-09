@extends('ws-app')

@section('content')

    <div class="col-md-12">

        <div id="webstudio-slider" style="display:none;">

            @foreach($slides as $slide)

                @if(count($slide->getImages()) > 0)

                    <img alt="{{$slide->getTranslate('title')}}"
                         src="/{{$slide->getImages()[0]['full']}}"
                         data-image="/{{$slide->getImages()[0]['full']}}"
                         id="img-{{$slide->id}}"
                         data-description=" {{$slide->getTranslate('description')}}">

                @endif

            @endforeach

        </div>

    </div>

    <div class="col-md-12">

        <div class="panel panel-default wow fadeInLeft">

            <div class="panel-heading">{{ $main->getTranslate('title') }}</div>

            <div class="panel-body">

                <div class="col-sm-4 col-md-3">

                    <a href="#" class="thumbnail">

                        @if(count($main->getImages()) > 0)

                             <img src="/{{$main->getImages()[0]['min']}}" alt="...">

                        @endif

                    </a>

                </div>

                <div class="col-sm-8 col-md-9">

                    {!! $main->getTranslate('short_description') !!}

                    <div class="description" style="display: none;">{!!$main->getTranslate('description') !!}</div>

                    <a href="#" class="description-show pull-right">{{ trans('base.more') }}<i class="fa fa-angle-down fa-lg"></i></a>

                </div>

            </div>

        </div>

    </div>

    <div class="col-sm-6 col-md-6">

        <div class="panel panel-default wow fadeInUp">

            <div class="panel-heading">{{ trans('base.latest_news') }}</div>

            <div class="panel-body">

                <div class="row">

                    @foreach($last_news as $last_new)

                        <div class="r-block-item">

                            <div class="col-md-4">

                                @if(count($last_new->getImages()) > 0)

                                    <a href="/{{ App::getLocale() }}/news/article-{{ $last_new -> id }}" class="thumbnail">
                                        <img src="/{{$last_new->getImages()[0]['min']}}" style="height:93px" alt="...">
                                    </a>

                                @endif

                            </div>

                            <div class="col-md-8">

                                <h4>{{ $last_new->getTranslate('title') }}</h4>

                                <p>{!! str_limit($last_new->getTranslate('short_description'), 140) !!}</p>

                                <a href="/{{ App::getLocale() }}/news/article-{{ $last_new -> id }}" class="pull-right">{{ trans('base.read_full_news') }}<i class="fa fa-angle-right fa-lg"></i></a>

                            </div>

                            <hr>

                        </div>

                    @endforeach

                </div>

                <p><a class="btn btn-primary btn-lg" style="width: 100%;" href="/{{ App::getLocale() }}/news" role="button">{{ trans('base.all_news') }}</a></p>

            </div>

        </div>

    </div>

    <div class="col-sm-6 col-md-6">

        <div class="panel panel-default wow fadeInDown">

            <div class="panel-heading">{{ trans('base.latest_jobs') }}</div>

            <div class="panel-body">

                <div class="row">

                    @foreach($last_works as $last_work)

                        <div class="r-block-item">

                            <div class="col-md-12">

                                <h4 class="col-sm-6 col-md-6 text-left r-prof">{{ $last_work->getTranslate('title') }}</h4>

                                <h4 class="col-sm-6 col-md-6 text-right r-price">{!! $last_work->getTranslate('price') !!}</h4>

                                <p>{!! str_limit($last_work->getTranslate('short_description'), 200) !!}</p>

                                <a href="/{{ App::getLocale() }}/works/article-{{ $last_work -> id }}" class="pull-right">{{ trans('base.more') }}<i class="fa fa-angle-right fa-lg"></i></a>

                            </div>

                            <hr>

                        </div>

                    @endforeach

                </div>

                <p><a class="btn btn-primary btn-lg" style="width: 100%;" href="/{{ App::getLocale() }}/works" role="button">{{ trans('base.all_jobs') }}</a></p>

            </div>

        </div>

    </div>

@endsection