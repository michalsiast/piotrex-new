<section class="primary-bg py-0">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col">
                <div class="marquee-section">
                    <div class="marquee-wrap">
@foreach($items as $item)
                            <div class="marquee-text">
                                <span>{{$item->title}}</span>
                                <i class="flaticon flaticon-customer-support"></i>
                            </div>
@endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



