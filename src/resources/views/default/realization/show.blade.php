@extends('default.layout')
@section('content')

    @include('default.subheader', ['pageName' => $item->title])

    <div class="gallery mt-11 mb-11">
        <div class="container">
            <div class="row">
                @foreach($item->gallery->items as $item)
                    <div class="col-lg-4 pb-4 magnific-img">
                        <a class="image-popup-vertical-fit" href="{{renderImage($item->url, 1920, 1080, 'resize')}}">
                            <img style="width: 100%" src="{{renderImage($item->url, 600, 600, 'fit')}}" alt="">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @push('scripts.body.bottom')
        <script>
            $(document).ready(function() {
                $(".image-popup-vertical-fit").magnificPopup({
                    type: "image",
                    mainClass: "mfp-with-zoom",
                    gallery: {
                        enabled: true,
                    },
                    zoom: {
                        enabled: true,
                        duration: 300,
                        easing: "ease-in-out",
                        opener: function(openerElement) {
                            return openerElement.is("img")
                                ? openerElement
                                : openerElement.find("img");
                        },
                    },
                });
            });
        </script>
    @endpush
@endsection
