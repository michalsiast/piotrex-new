@extends('default.layout')
@section('content')
    <section class="page-title"  style="background-image: url({{asset('images/page-title-bg.png')}})">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>{{$item->title}}</h1>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">
                                    <i class="bi bi-house-door me-1"></i>Strona główna </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{$item->title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--page title end-->


    <!--body content start-->

    <div class="page-content">

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 mb-6 mb-lg-0 order-lg-1">
                        <h3>{{$item->title}}</h3>
                        {!! $item->lead !!}
                        {!! $item->text !!}
                        <div class="row align-items-center my-7">
                            @foreach($item->gallery->items as $item)
                                @if($item->type !== 'cover')
                                    <div class="col-md-6">
                                        <img class="img-fluid" style="width: 100%" src="{{renderImage($item->url, 600, 600, 'fit')}}" alt="">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="service-page-sidebar">
                            <div class="service-widget">
                                <ul class="service-menu list-unstyled mb-0">
                                    @include('default.offer.home3')
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
