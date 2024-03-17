<div class="white-bg p-4">
    @foreach($items as $item)
        <div class="featured-item style-2 {{ !$loop->last ? 'border-bottom border-light pb-5 mb-5' : '' }}">
            <div class="featured-icon">
                <img src="{{ renderImage($item->galleryCover(), 80, 80, 'cover') }}" style="width: 80px; height: 80px" />
            </div>
            <div class="featured-desc">
                <div class="featured-title">
                    <h5>{{$item->title}}</h5>
                </div>
                {!! $item->lead !!}
            </div>
        </div>
    @endforeach
</div>
