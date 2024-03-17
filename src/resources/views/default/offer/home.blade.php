@foreach($items as $item)
    <div class="col-lg-4 col-md-6 mb-5">
        <div class="service-item style-1">
            <div class="service-image" data-bg-img="images/services/large/01.jpg"></div>
            <span class="service-num">{{$loop->iteration}}</span>
            <div class="service-desc">
                <div class="service-icon">
                    <i class="flaticon-skyline"></i>
                </div>
                <div class="service-title">
                    <h4>
                        <a href="">{{$item->title}}</a>
                    </h4>
                </div>
               {!! $item->lead !!}
                <a href="" class="read-button">
                    <span class="arrow-btn"></span>
                    <span class="arrow-btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon-arrow-right" viewBox="0 0 21 12">
                  <path d="M17.104 5.072l-4.138-4.014L14.056 0l6 5.82-6 5.82-1.09-1.057 4.138-4.014H0V5.072h17.104z"></path>
                </svg>
              </span>
                    <span class="arrow-btn-text">Zobacz ofertę</span>
                </a>
            </div>
        </div>
    </div>
@endforeach
