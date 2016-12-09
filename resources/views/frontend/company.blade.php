@extends('ws-app')

@section('content')

    <div class="col-md-8">

        <ul class="nav nav-tabs flex-tabs">

            @foreach($company as $company_item)

                <li><a data-toggle="tab" href="#tab{{$company_item->id}}">{{$company_item->getTranslate('title')}}</a></li>

            @endforeach

        </ul>

        <div class="row">

            <div class="col-md-12">

                <div class="tab-content">

                    @foreach($company as $company_item)

                        <div id="tab{{$company_item->id}}" class="tab-pane fade in">

                            <p>
                                @if(count($company_item->getImages()) > 0)
                                    <img class="thumbnail" src="/{{$company_item->getImages()[0]['min']}}" alt="...">
                                @endif
                                    {!! $company_item->getTranslate('description')!!}
                            </p>

                        </div>

                    @endforeach

                </div>

            </div>

        </div>

        <div class="panel panel-default wow fadeInLeft">

            <div class="panel-heading">{{ trans('base.gallery') }}</div>

            <div class="panel-body">

                <div id="flex-gallery-company" style="display:none;">

                    @foreach($gallery as $gallery_item)

                        @foreach($gallery_item->getImages() as $imgSrc)

                            <img alt="" src="/{{ $imgSrc['min'] }}"
                                 data-image="/{{ $imgSrc['full'] }}">

                        @endforeach

                    @endforeach

                </div>

            </div>

        </div>

    </div>

@endsection