@extends('default.layout')
@section('content')

    @include('default.subheader', ['pageName' => $page->name])

    <section class="light-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 mt-6 mt-lg-0">
                    <div class="theme-title ht-split-text mb-4">
                        <h6>O nas</h6>
                        <h2 data-splitting="chars" style="padding-bottom: 20px">{{$fields->heading_about_us}}</h2>
                        {!! $fields->description_about_us !!}
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 order-lg-1 ps-lg-10">
                    <div class="ht-img-effect">
                        <div class="ht-img-effect-image">
                            <img class="img-fluid w-100" style="height: 490px; object-fit: cover" src="{{asset('images/about_us.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    @foreach($gallery->items as $galleryItem)--}}
{{--        <img src="{{renderImage($galleryItem->url, 400, 200, 'resize')}}" alt="{{$galleryItem->name ?? ''}}">--}}
{{--    @endforeach--}}

@endsection
