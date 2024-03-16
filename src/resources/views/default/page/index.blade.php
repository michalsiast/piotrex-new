@extends('default.layout')
@section('content')

    @include('default.rotator.base', ['id_rotator' => $fields->rotator, 'type' => 'main'])
    <div class="page-content">
        <section class="light-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12 mt-6 mt-lg-0">
                        <div class="theme-title ht-split-text mb-4">
                            <h6>About Us</h6>
                            <h2 data-splitting="chars">Making your vision come true at the basics.</h2>
                            <p style="padding: 20px 0px">Reincon company is represented by multiple branches all around the world. We implement different projects, use an innovative technologies and individual approach for every client!</p>
                            <a href="#" class="themeht-btn primary-btn">
                                <span>About Us</span>
                                <svg class="ht-svg-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10" height="19" viewBox="0 0 19 19" xml:space="preserve">
            <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                    <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                    <line x1="18" y1="17.8" x2="18" y2="1"></line>
          </svg>
                            </a>
                            <a href="#" class="themeht-btn outline-btn ms-3">
                                <span>Contact Us</span>
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
                                <img class="img-fluid w-100" src="images/about/01.jpg" alt="">
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
                            <h6 class="text-center">What We Do</h6>
                            <h2 class="text-white text-center" data-splitting="chars">Build Your Full Projects Management</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="counter style-3 text-center">
                            <div class="counter-desc">
                                <span class="count-number" data-count="2874">2874</span>
                                <span>+</span>
                            </div>
                            <h6>Tons Of Customers</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="counter style-3 text-center">
                            <div class="counter-desc">
                                <span class="count-number" data-count="54">54</span>
                                <span>k</span>
                            </div>
                            <h6>Completed Work</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="counter style-3 text-center">
                            <div class="counter-desc">
                                <span class="count-number" data-count="24">24</span>
                                <span>k</span>
                            </div>
                            <h6>Awards Winning</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="counter style-3 text-center">
                            <div class="counter-desc">
                                <span class="count-number" data-count="7523">7523</span>
                                <span>+</span>
                            </div>
                            <h6>Client Satisfaction</h6>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-12 mt-5 ps-lg-8 d-flex justify-content-center">
                        <a href="about-us.html" class="themeht-btn white-btn">
                            <span>Discover More</span>
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
                <div class="row align-items-end mt-8">
                    <div class="col-lg-7 col-md-12 order-lg-1 ps-lg-10">
                        <div class="ht-img-effect">
                            <div class="ht-img-effect-image">
                                <img class="img-fluid w-100" src="images/about/01.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 mt-6 mt-lg-0">
                        <div class="white-bg p-4">
                            <div class="featured-item style-2 border-bottom border-light pb-5 mb-5">
                                <div class="featured-icon">
                                    <i class="flaticon flaticon-house"></i>
                                </div>
                                <div class="featured-desc">
                                    <div class="featured-title">
                                        <h5>General Construction</h5>
                                    </div>
                                    <p>Service overview With experience contracting and professional industry latest generation technological.</p>
                                </div>
                            </div>
                            <div class="featured-item style-2 border-bottom border-light pb-5 mb-5">
                                <div class="featured-icon">
                                    <i class="flaticon flaticon-company"></i>
                                </div>
                                <div class="featured-desc">
                                    <div class="featured-title">
                                        <h5>Building Design</h5>
                                    </div>
                                    <p>Service overview With experience contracting and professional industry latest generation technological.</p>
                                </div>
                            </div>
                            <div class="featured-item style-2">
                                <div class="featured-icon">
                                    <i class="flaticon flaticon-plan"></i>
                                </div>
                                <div class="featured-desc">
                                    <div class="featured-title">
                                        <h5>Project Management</h5>
                                    </div>
                                    <p>Service overview With experience contracting and professional industry latest generation technological.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--feature end-->


        <!--marquee start-->

        <section class="primary-bg py-0">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col">
                        <div class="marquee-section">
                            <div class="marquee-wrap">
                                <div class="marquee-text">
                                    <span>Material Recycling</span>
                                    <i class="flaticon flaticon-customer-support"></i>
                                </div>
                                <div class="marquee-text">
                                    <span>Renovation Company</span>
                                    <i class="flaticon flaticon-customer-support"></i>
                                </div>
                                <div class="marquee-text">
                                    <span>Roofing Solutions</span>
                                    <i class="flaticon flaticon-customer-support"></i>
                                </div>
                                <div class="marquee-text">
                                    <span>Road Construction</span>
                                    <i class="flaticon flaticon-customer-support"></i>
                                </div>
                                <div class="marquee-text">
                                    <span>Home Consultation</span>
                                    <i class="flaticon flaticon-customer-support"></i>
                                </div>
                                <div class="marquee-text">
                                    <span>Building Construction</span>
                                    <i class="flaticon flaticon-customer-support"></i>
                                </div>
                                <div class="marquee-text">
                                    <span>Architecture & Building</span>
                                    <i class="flaticon flaticon-customer-support"></i>
                                </div>
                                <div class="marquee-text">
                                    <span>Tools and Equipment</span>
                                    <i class="flaticon flaticon-customer-support"></i>
                                </div>
                                <div class="marquee-text">
                                    <span>Emergency Response</span>
                                    <i class="flaticon flaticon-customer-support"></i>
                                </div>
                                <div class="marquee-text">
                                    <span>Material Recycling</span>
                                    <i class="flaticon flaticon-customer-support"></i>
                                </div>
                                <div class="marquee-text">
                                    <span>Road Construction</span>
                                    <i class="flaticon flaticon-customer-support"></i>
                                </div>
                                <div class="marquee-text">
                                    <span>Home Consultation</span>
                                    <i class="flaticon flaticon-customer-support"></i>
                                </div>
                                <div class="marquee-text">
                                    <span>Building Construction</span>
                                    <i class="flaticon flaticon-customer-support"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--marquee end-->


        <!--service start-->

        <section>
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-6 col-lg-8 col-md-12">
                        <div class="theme-title ht-split-text">
                            <h6>Our Services</h6>
                            <h2 data-splitting="chars">We offer construction and building service</h2>
                        </div>
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item style-1">
                            <div class="service-image" data-bg-img="images/services/large/01.jpg"></div>
                            <span class="service-num">01</span>
                            <div class="service-desc">
                                <div class="service-icon">
                                    <i class="flaticon-skyline"></i>
                                </div>
                                <div class="service-title">
                                    <h4>
                                        <a href="service-single.html">Building Construction</a>
                                    </h4>
                                </div>
                                <p>What To Expect From Us A business consultant, first of all, has to have the ability to understand function over form and cause over effect &nbsp;It is a long established fact that a reader will be distracted by the readable content of page when looking at its layout. The point of using lorem ipsum is […]</p>
                                <a href="service-single.html" class="read-button">
                                    <span class="arrow-btn"></span>
                                    <span class="arrow-btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon-arrow-right" viewBox="0 0 21 12">
                  <path d="M17.104 5.072l-4.138-4.014L14.056 0l6 5.82-6 5.82-1.09-1.057 4.138-4.014H0V5.072h17.104z"></path>
                </svg>
              </span>
                                    <span class="arrow-btn-text">Learn More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-7 mt-md-0">
                        <div class="service-item style-1">
                            <div class="service-image" data-bg-img="images/services/large/02.jpg"></div>
                            <span class="service-num">03</span>
                            <div class="service-desc">
                                <div class="service-icon">
                                    <i class="flaticon-home"></i>
                                </div>
                                <div class="service-title">
                                    <h4>
                                        <a href="service-single.html">Home Construction</a>
                                    </h4>
                                </div>
                                <p>What To Expect From Us A business consultant, first of all, has to have the ability to understand function over form and cause over effect &nbsp;It is a long established fact that a reader will be distracted by the readable content of page when looking at its layout. The point of using lorem ipsum is […]</p>
                                <a href="service-single.html" class="read-button">
                                    <span class="arrow-btn"></span>
                                    <span class="arrow-btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon-arrow-right" viewBox="0 0 21 12">
                  <path d="M17.104 5.072l-4.138-4.014L14.056 0l6 5.82-6 5.82-1.09-1.057 4.138-4.014H0V5.072h17.104z"></path>
                </svg>
              </span>
                                    <span class="arrow-btn-text">Learn More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-7 mt-lg-0">
                        <div class="service-item style-1">
                            <div class="service-image" data-bg-img="images/services/large/03.jpg"></div>
                            <span class="service-num">04</span>
                            <div class="service-desc">
                                <div class="service-icon">
                                    <i class="flaticon-maintenance"></i>
                                </div>
                                <div class="service-title">
                                    <h4>
                                        <a href="service-single.html">Property Maintenance</a>
                                    </h4>
                                </div>
                                <p>What To Expect From Us A business consultant, first of all, has to have the ability to understand function over form and cause over effect &nbsp;It is a long established fact that a reader will be distracted by the readable content of page when looking at its layout. The point of using lorem ipsum is […]</p>
                                <a href="service-single.html" class="read-button">
                                    <span class="arrow-btn"></span>
                                    <span class="arrow-btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon-arrow-right" viewBox="0 0 21 12">
                  <path d="M17.104 5.072l-4.138-4.014L14.056 0l6 5.82-6 5.82-1.09-1.057 4.138-4.014H0V5.072h17.104z"></path>
                </svg>
              </span>
                                    <span class="arrow-btn-text">Learn More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-7">
                        <div class="service-item style-1">
                            <div class="service-image" data-bg-img="images/services/large/04.jpg"></div>
                            <span class="service-num">02</span>
                            <div class="service-desc">
                                <div class="service-icon">
                                    <i class="flaticon-technical-drawing"></i>
                                </div>
                                <div class="service-title">
                                    <h4>
                                        <a href="service-single.html">Innovation Planning</a>
                                    </h4>
                                </div>
                                <p>What To Expect From Us A business consultant, first of all, has to have the ability to understand function over form and cause over effect &nbsp;It is a long established fact that a reader will be distracted by the readable content of page when looking at its layout. The point of using lorem ipsum is […]</p>
                                <a href="service-single.html" class="read-button">
                                    <span class="arrow-btn"></span>
                                    <span class="arrow-btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon-arrow-right" viewBox="0 0 21 12">
                  <path d="M17.104 5.072l-4.138-4.014L14.056 0l6 5.82-6 5.82-1.09-1.057 4.138-4.014H0V5.072h17.104z"></path>
                </svg>
              </span>
                                    <span class="arrow-btn-text">Learn More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-7">
                        <div class="service-item style-1">
                            <div class="service-image" data-bg-img="images/services/large/05.jpg"></div>
                            <span class="service-num">05</span>
                            <div class="service-desc">
                                <div class="service-icon">
                                    <i class="flaticon-project-1"></i>
                                </div>
                                <div class="service-title">
                                    <h4>
                                        <a href="service-single.html">Design Build</a>
                                    </h4>
                                </div>
                                <p>What To Expect From Us A business consultant, first of all, has to have the ability to understand function over form and cause over effect &nbsp;It is a long established fact that a reader will be distracted by the readable content of page when looking at its layout. The point of using lorem ipsum is […]</p>
                                <a href="service-single.html" class="read-button">
                                    <span class="arrow-btn"></span>
                                    <span class="arrow-btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon-arrow-right" viewBox="0 0 21 12">
                  <path d="M17.104 5.072l-4.138-4.014L14.056 0l6 5.82-6 5.82-1.09-1.057 4.138-4.014H0V5.072h17.104z"></path>
                </svg>
              </span>
                                    <span class="arrow-btn-text">Learn More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-7">
                        <div class="service-item style-1">
                            <div class="service-image" data-bg-img="images/services/large/06.jpg"></div>
                            <span class="service-num">06</span>
                            <div class="service-desc">
                                <div class="service-icon">
                                    <i class="flaticon-house-2"></i>
                                </div>
                                <div class="service-title">
                                    <h4>
                                        <a href="service-single.html">Pre-Construction</a>
                                    </h4>
                                </div>
                                <p>What To Expect From Us A business consultant, first of all, has to have the ability to understand function over form and cause over effect &nbsp;It is a long established fact that a reader will be distracted by the readable content of page when looking at its layout. The point of using lorem ipsum is […]</p>
                                <a href="service-single.html" class="read-button">
                                    <span class="arrow-btn"></span>
                                    <span class="arrow-btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon-arrow-right" viewBox="0 0 21 12">
                  <path d="M17.104 5.072l-4.138-4.014L14.056 0l6 5.82-6 5.82-1.09-1.057 4.138-4.014H0V5.072h17.104z"></path>
                </svg>
              </span>
                                    <span class="arrow-btn-text">Learn More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="primary-bg p-0">
            <div class="container">
                <div class="row align-items-end gx-0">
                    <div class="col-lg-6 col-md-12 pe-lg-8 custom-py-1">
                        <div class="theme-title ht-split-text">
                            <h6>Get a Quote</h6>
                            <h2>Having a problem? We’ll fixed it now!</h2>
                            <p class="text-black mt-4 mb-0">Check how we can help you at home That why with Bountie aimto provide a transparent, secure &amp; easy platform where creatives can work their customer satisfaction and quality.</p>
                        </div>
                        <div class="d-md-flex align-items-center">
                            <div class="quote-media">
                                <ul class="list-unstyled contact-media mb-0">
                                    <li>
                                        <i aria-hidden="true" class="flaticon flaticon-customer-service"></i>
                                        <div class="contact-media-text">
                                            <span>Have A Question</span>
                                            <a href="tel:+912345678900">+91-234-567-8900</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <a href="contact.html" class="themeht-btn dark-btn ms-md-6 mt-4 mt-md-0">
                                <span>Get A Quote</span>
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
                            <img class="img-fluid" src="images/contact-img.png" alt="">
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
