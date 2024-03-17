@extends('default.layout')
@section('content')
    @include('default.subheader', ['pageName' => $page->name])
    <section class="contact-info pb-0 text-center">
        <div class="container">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="contact-media">
                        <i class="flaticon flaticon-location"></i>
                        <span>Adres</span>
                        <p>{{getConstField('company_address')}}, {{getConstField('company_post_code')}} {{getConstField('company_city')}}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
                    <div class="contact-media">
                        <i class="flaticon flaticon-open"></i>
                        <span>Email</span>
                        <a href="mailto:{{getConstField('email')}}">{{getConstField('email')}}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
                    <div class="contact-media">
                        <i class="flaticon flaticon-customer-service"></i>
                        <span>Telefon</span>
                        <a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">{{getConstField('phone')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-8">
                    <div class="theme-title ht-split-text">
                        <h6>Kontakt</h6>
                        <h2 data-splitting="chars">Napisz do nas!</h2>
                    </div>
                    <div class="map iframe-h">
                        <iframe src="{{getConstField('google_map_iframe')}}" allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="col-lg-6 mt-7 mt-lg-0">
                    <div class="box-shadow p-3 p-md-8">
                        @include('default.form.contact_form')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
