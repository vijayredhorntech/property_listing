@extends('Layouts.layout')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('assets1/images/bg_4.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 pt-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="fa fa-chevron-right"></i></a></span>
                        <span>Privacy Policy <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Privacy Policy</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-about-section">
        <div class="container-xl">
            <div class="row g-xl-5">
                @php
                    $privacyPolicy = \App\Models\TermAndCondition::find(1);
                @endphp
                <div class="col-md-12 heading-section" style="color: black" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    {!! $privacyPolicy->content !!}
                </div>
            </div>
        </div>
    </section>

@endsection
