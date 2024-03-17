@extends('default.layout')
@section('content')
    @include('default.subheader', ['pageName' => $page->name])

    <section>
        <div class="container">
            <div class="row gx-5">
                @include('default.offer.home')
            </div>
        </div>
    </section>
@endsection
