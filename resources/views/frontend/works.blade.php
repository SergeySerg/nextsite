@extends('ws-app')

@section('content')

    <div class="col-md-8">

            <div class="panel panel-default wow fadeInDown">

                <div class="panel-heading">{{ trans('base.latest_jobs') }}</div>

                <div class="panel-body">

                    <div class="row">

                        @foreach($works as $work_item)

                            <div class="r-block-item">

                                <div class="col-md-12">

                                    <h4 class="r-prof">{{ $work_item->getTranslate('title') }}</h4>

                                    <div class="clearfix">

                                        <h5 class="works-atribute">{{ trans('base.date') }}:<span class="news-date">{{ date('d/m/Y ',strtotime($work_item -> date)) }}</span></h5>

                                        <h5 class="r-price works-atribute">{{ trans('base.salary') }}<span class="news-date">{{ $work_item->getTranslate('price') }} грн</span></h5>

                                    </div>

                                    {!! str_limit($work_item->getTranslate('short_description'), 400) !!}

                                    <div class="clearfix">

                                        <a href="/{{ App::getLocale() }}/works/article-{{ $work_item -> id }}" class="pull-right">{{ trans('base.more') }}<i class="fa fa-angle-right fa-lg"></i></a>

                                    </div>

                                </div>

                                <hr>

                            </div>

                        @endforeach

                    </div>

                    <nav aria-label="Page navigation">
                        {!! $works->render() !!}
                    </nav>

                </div>

            </div>

        </div>

@endsection