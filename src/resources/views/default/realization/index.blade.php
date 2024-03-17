@extends('default.layout')
@section('content')
    @include('default.subheader', ['pageName' => $page->name])
    <div class="gallery mt-11 mb-11">
        <div class="container">
            <div class="row">
                @foreach($items as $item)
                    <div class="col-lg-4 pb-4 >
                        <a href="{{route('realization.show.' .$item->id)}}">
                            <img style="width: 100%; height: 400px; object-fit: cover" src="{{renderImage($item->galleryCover(), 600, 600, 'cover')}}" alt="">
                        </a>
                        <a href="{{route('realization.show.' .$item->id)}}">
                            <div class="featured-title">
                                <h5 class="text-center mt-2">{{$item->title}}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
