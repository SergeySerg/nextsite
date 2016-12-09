@extends('ws-app')

@section('content')

    <div class="col-md-8">

        @foreach($gallery as $gallery_item)

            <div class="panel panel-default wow fadeInDown">

                <div class="panel-heading">{{$gallery_item->getTranslate('title')}}</div>

                <div class="panel-body">

                    <div class="row">

                        <div class="col-md-12">

                                <div id="flex-gallery-{{$gallery_item->id}}" class="flex-gallery" style="display:none;">

                                    @foreach($gallery_item->getImages() as $imgSrc)

                                        <img alt="" src="/{{ $imgSrc['min'] }}"
                                             data-image="/{{ $imgSrc['full'] }}">

                                    @endforeach

                                </div>

                        </div>

                    </div>

                </div>

            </div>

        @endforeach

    </div>

@endsection