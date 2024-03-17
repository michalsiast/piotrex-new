<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {!! SEOMeta::generate() !!}

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('image/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('image/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('image/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('image/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('image/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('image/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('image/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('image/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('image/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('image/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('image/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('image/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('image/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('image/favicon//manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <link href="{{asset('css/vendors/bootstrap.css')}}" rel="stylesheet">
    <!--== bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

    <!--== bootstrap-icons -->
    <link href="{{asset('css/bootstrap-icons.css')}}" rel="stylesheet" type="text/css" />

    <!--== buildbold-icon -->
    <link href="{{asset('css/buildbold-icon.css')}}" rel="stylesheet" type="text/css" />

    <!--== animate -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css" />

    <!--== magnific-popup -->
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet" type="text/css" />

    <!--== swiper -->
    <link href="{{asset('css/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css" />

    <!--== odometer -->
    <link href="{{asset('css/odometer.css')}}" rel="stylesheet" type="text/css" />

    <!--== spacing -->
    <link href="{{asset('css/spacing.css')}}" rel="stylesheet" type="text/css" />

    <!--== base -->
    <link href="{{asset('css/base.css')}}" rel="stylesheet" type="text/css" />

    <!--== shortcodes -->
    <link href="{{asset('css/shortcodes.css')}}" rel="stylesheet" type="text/css" />

    <!--== default-theme -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="{{asset('css/main.css')}}?version=1" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.3/simple-lightbox.min.css" integrity="sha512-Ne9/ZPNVK3w3pBBX6xE86bNG295dJl4CHttrCp3WmxO+8NQ2Vn8FltNr6UsysA1vm7NE6hfCszbXe3D6FUNFsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script>
        const BASE_URL = '{{url()->to('/')}}/';
        const CSRF_TOKEN = '{{csrf_token()}}';
        const SITE_LANG = '{{app()->getLocale()}}';
    </script>

    @stack('scrips.head.bottom')
</head>
<body class="tt-magic-cursor">

<!-- page wrapper start -->

<div class="page-wrapper">

    <!-- preloader start -->

    <div id="ht-preloader">
        <div class="loader clear-loader">
            <img class="img-fluid" src="images/preloader.svg" alt="">
        </div>
    </div>

    <!-- preloader end -->

    <div id="magic-cursor">
        <div id="ball"></div>
    </div>

    <!--header start-->

    <header id="site-header" class="header">
        <div class="container-fluid p-0">
            <div class="main-header-inner d-flex align-items-center justify-content-between">
                <a class="navbar-brand logo d-lg-inline-block d-none" href="index.html">
                    <img class="img-fluid" src="images/logo.svg" alt="">
                </a>
                <div class="flex-grow-1">
                    <div class="header-top">
                        <div class="row align-items-center">
                            <div class="col-lg-8 col-md-11">
                                <div class="topbar-link">
                                    <ul class="list-inline">
                                        <li>
                                            <i class="flaticon-location"></i>
                                            <span>{{getConstField('company_address')}}, {{getConstField('company_post_code')}} {{getConstField('company_city')}}</span>
                                        </li>
                                        @if(!empty(getConstField('email')))
                                            <li>
                                                <i class="flaticon-open"></i>
                                                <a href="mailto:{{getConstField('email')}}">{{getConstField('email')}}</a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="header-wrap">
                        <div class="row">
                            <div class="col">
                                <!-- Navbar -->
                                <nav class="navbar navbar-expand-lg">
                                    <a class="navbar-brand logo d-inline-block d-lg-none" href="index.html">
                                        <img class="img-fluid" src="images/logo.svg" alt="">
                                    </a>
                                    <button class="navbar-toggler ht-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                        <svg width="100" height="100" viewBox="0 0 100 100">
                                            <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058"></path>
                                            <path class="line line2" d="M 20,50 H 80"></path>
                                            <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942"></path>
                                        </svg>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <!-- Left nav -->
                                        @include('default.nav_item.main', ['name' => 'main'])
                                    </div>
                                    <div class="header-number me-4">
                                        <i class="flaticon-customer-service"></i>
                                        <div>
                                            <span>Zadzwoń:</span>
                                            <a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">{{getConstField('phone')}}</a>
                                        </div>
                                    </div>
                                    <a class="themeht-btn dark-btn" href="{{route('contact.show')}}">
                                        <span>Kontakt</span>
                                        <svg class="ht-svg-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10" height="19" viewBox="0 0 19 19" xml:space="preserve">
                    <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                            <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                            <line x1="18" y1="17.8" x2="18" y2="1"></line>
                  </svg>
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{--@include('default._helpers.lang_nav')--}}



    @yield('content')

    <footer class="footer" style="background-image: url({{asset('images/footer-bg.png')}})">
        <div class="primary-footer">
            <div class="container">
                <div class="row gx-0 primary-footer-btm">
                    <div class="col-lg-4 col-md-6">
                        <h5>Dane kontaktowe</h5>
                        <div class="textwidget custom-html-widget">
                            <div class="footer-cntct">
                                <ul class="media-icon list-unstyled">
                                    @if(!empty(getConstField('email')))
                                        <li>
                                            <i class="flaticon-open"></i>
                                            <a href="mailto:{{getConstField('email')}}">{{getConstField('email')}}</a>
                                        </li>
                                    @endif
                                    @if(!empty(getConstField('phone')))
                                        <li>
                                            <i class="flaticon-customer-service"></i>
                                            <a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">{{getConstField('phone')}}</a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h5>Dane firmy</h5>
                        <ul class="footer-menu list-unstyled">
                            <li>
                                <p>{{getConstField('company_name')}}</p>
                            </li>
                            <li>
                                <p>{{getConstField('company_nip')}}</p>
                            </li>
                            <li>
                                <p>{{getConstField('company_address')}}, {{getConstField('company_post_code')}} {{getConstField('company_city')}}</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h5>Oferta</h5>
                        <ul class="footer-menu list-unstyled">
                            @include('default.offer.home3')
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="secondary-footer">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col">
                        <div class="copyright"><?php echo date('Y') ?> &copy; Wszelkie prawa zastrzeżone. Strona stworzona przez: <a href="https://palmax.com.pl" class="text-white">Palmax</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- page wrapper end -->


<!--back-to-top start-->

<div class="scroll-top">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.3/simple-lightbox.jquery.min.js" integrity="sha512-iJCzEG+s9LeaFYGzCbDInUbnF03KbE1QV1LM983AW5EHLxrWQTQaZvQfAQgLFgfgoyozb1fhzhe/0jjyZPYbmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><script src="{{asset('js/frontend.js')}}"></script>
<script src="{{asset('js/main.min.js')}}"></script>

<script src="{{asset('js/jquery.min.js')}}"></script>

<!--== bootstrap -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

<!--== jquery-appear -->
<script src="{{asset('js/jquery-appear.js')}}"></script>

<!--== magnific-popup -->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>

<!--== counter -->
<script src="{{asset('js/odometer.min.js')}}"></script>

<!--== countdown -->
<script src="{{asset('js/jquery.countdown.min.js')}}"></script>

<!--== splitting -->
<script src='{{asset('js/splitting.min.js')}}'></script>

<!--== gsap -->
<script src='{{asset('js/gsap.min.js')}}'></script>

<!--== cursor -->
<script src='{{asset('js/cursor.js')}}'></script>

<!--== scrolltrigger -->
<script src='{{asset('js/scrolltrigger.min.js')}}'></script>

<!--== img-reveal -->
<script src='{{asset('js/img-reveal.js')}}'></script>

<!--== gsap-animation -->
<script src='{{asset('js/gsap-animation.js')}}'></script>

<!--== swiper-bundle -->
<script src='{{asset('js/swiper-bundle.min.js')}}'></script>

<!--== reincon-swiper-init -->
<script src='{{asset('js/reincon-swiper-init.js')}}'></script>

<!--== theme-script -->
<script src="{{asset('js/theme-script.js')}}"></script>

@stack('scripts.body.bottom')
</body>
</html>
