@extends('default.layout')
@section('content')

    @include('default.rotator.base', ['id_rotator' => $fields->rotator, 'type' => 'main'])
    <div class="page-content">
        <section class="light-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12 mt-6 mt-lg-0">
                        <div class="theme-title ht-split-text mb-4">
                            <h6>O nas</h6>
                            <h2 data-splitting="chars" style="padding-bottom: 20px">{{$fields->heading_about_us}}</h2>
                            {!! $fields->description_about_us !!}
                            <a href="{{route('about-us.show')}}" class="themeht-btn primary-btn" style="margin-top: 20px">
                                <span>Zobacz więcej</span>
                                <svg class="ht-svg-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10" height="19" viewBox="0 0 19 19" xml:space="preserve">
            <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                    <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                    <line x1="18" y1="17.8" x2="18" y2="1"></line>
          </svg>
                            </a>
                            <a href="{{route('contact.show')}}" class="themeht-btn outline-btn ms-3">
                                <span>Skontaktuj się z nami</span>
                                <svg class="ht-svg-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10" height="19" viewBox="0 0 19 19" xml:space="preserve">
            <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                    <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                    <line x1="18" y1="17.8" x2="18" y2="1"></line>
          </svg>
                            </a>
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
        <section class="secondary-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 mt-5 mt-lg-0 ps-lg-8">
                        <div class="theme-title ht-split-text mb-4 d-flex flex-column align-items-center">
                            <h6 class="text-center">Statystyki</h6>
                            <h2 class="text-white text-center" data-splitting="chars">{{$fields->heading_statistics}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="counter style-3 text-center">
                            <div class="counter-desc">
                                <span class="count-number" data-count="{{$fields->number_1_counters}}">{{$fields->number_1_counters}}</span>
                                <span>{{$fields->unit_1_counters}}</span>
                            </div>
                            <h6>{{$fields->heading_1_counters}}</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="counter style-3 text-center">
                            <div class="counter-desc">
                                <span class="count-number" data-count="{{$fields->number_2_counters}}">{{$fields->number_1_counters}}</span>
                                <span>{{$fields->unit_2_counters}}</span>
                            </div>
                            <h6>{{$fields->heading_2_counters}}</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="counter style-3 text-center">
                            <div class="counter-desc">
                                <span class="count-number" data-count="{{$fields->number_3_counters}}">{{$fields->number_1_counters}}</span>
                                <span>{{$fields->unit_3_counters}}</span>
                            </div>
                            <h6>{{$fields->heading_3_counters}}</h6>
                        </div>
                    </div>
                </div>


                <div class="row align-items-center">
                    <div class="col-lg-12 mt-5 ps-lg-8 d-flex justify-content-center">
                        <a href="{{route('about-us.show')}}" class="themeht-btn white-btn">
                            <span>Zobacz więcej</span>
                            <svg class="ht-svg-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10" height="19" viewBox="0 0 19 19" xml:space="preserve">
            <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                <line x1="18" y1="17.8" x2="18" y2="1"></line>
          </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="light-bg" style="padding-top: 0px">
            <div class="container">
                <div class="row align-items-center mt-8">
                    <div class="col-lg-7 col-md-12 order-lg-1 ps-lg-10">
                        <div class="ht-img-effect">
                            <div class="ht-img-effect-image">
                                <img class="img-fluid w-100"  style="height: 490px; object-fit: cover" src="{{asset('images/services.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 mt-6 mt-lg-0">
                        @include('default.article.home')
                    </div>
                </div>
            </div>
        </section>

        <!--feature end-->


        <!--marquee start-->

       @include('default.offer.home2')

        <!--marquee end-->


        <!--service start-->

        <section>
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-6 col-lg-8 col-md-12">
                        <div class="theme-title ht-split-text">
                            <h6>Usługi</h6>
                            <h2 data-splitting="chars">{{$fields->heading_services}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row gx-5">
                    @include('default.offer.home')
                </div>
            </div>
        </section>
        <section class="primary-bg p-0">
            <div class="container">
                <div class="row align-items-end gx-0">
                    <div class="col-lg-6 col-md-12 pe-lg-8 custom-py-1">
                        <div class="theme-title ht-split-text text-black-p-tag">
                            <h6>Kontakt</h6>
                            <h2 class="mb-4">{{$fields->heading_contact}}</h2>
                            {!! $fields->description_contact !!}
                        </div>
                        <div class="d-md-flex align-items-center">
                            <div class="quote-media">
                                <ul class="list-unstyled contact-media mb-0">
                                    <li>
                                        <i aria-hidden="true" class="flaticon flaticon-customer-service"></i>
                                        <div class="contact-media-text">
                                            <span>Zadzwoń</span>
                                            <a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">{{getConstField('phone')}}</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <a href="{{route('contact.show')}}" class="themeht-btn dark-btn ms-md-6 mt-4 mt-md-0">
                                <span>Napisz do nas</span>
                                <svg class="ht-svg-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10" height="19" viewBox="0 0 19 19" xml:space="preserve">
              <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                    <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                    <line x1="18" y1="17.8" x2="18" y2="1"></line>
            </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 ms-auto col-md-12">
                        <div class="contact-img text-center mt-0">
                            <img class="img-fluid" src="{{asset('images/contact.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--hero section end-->
    {{--{!! getPhoneLink('phone', 'phone', '<b>icon</b> ') !!}--}}
    {{--{!! getEmailLink('email', 'email',  '<b>icon</b> ') !!}--}}
    {{--    <span style="display: block">{!! getAddressString() !!}</span>--}}
    {{--    <span style="display: block">{!! getFooterCreator() !!}</span>--}}

    {{--    @include('default.rotator.base', ['id_rotator' => $fields->rotator, 'type' => 'main']) --}}
@endsection
