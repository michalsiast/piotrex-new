<div class="row mt-5">
@foreach($items as $item)
        <div class="col-lg-4 col-md-6">
            <div class="counter style-3 text-center">
                <div class="counter-desc">
                    <span class="count-number" data-count="{{$item->lead}}">{{$item->lead}}</span>
                    <span>{{$item->text}}</span>
                </div>
                <h6>{{$item->title}}</h6>
            </div>
        </div>
@endforeach
</div>
