@extends('Layouts.layout')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('assets1/images/bg_4.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 pt-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="fa fa-chevron-right"></i></a></span>
                        <span>Gallery <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Gallery</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-md-8 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Our Gallery</span>
                    <h2>Gallery</h2>
                </div>
            </div>
            <div class="container-xl-fluid">
                <div class="row g-0">
                    <div class="flex flex-wrap gap-2 p-4">
                        @foreach($galleryCategories as $category)
                            <a href="{{route('galleries' , ['id' => $category])}}" class="btn btn-primary rounded custom-color">{{$category->name}}</a>
                        @endforeach
                    </div>
                    @foreach($galleries as $gallery)
                        @php
                            $image = \App\Models\Media::where('model_type', 'App\Models\Gallery')->where('model_id', $gallery->id)->first();
                        @endphp
                        {{--            @dd($gallery->path);--}}

                        <div class="col-md-2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                            <a href="{{asset('storage/'. $image->path)}}" target="_blank" class=" img d-flex align-items-center justify-content-center" style="background-image: url({{asset('storage/'. $image->path)}});">
                                <div class="icon d-flex align-items-center justify-content-center" style="padding: 100px 0px"><span class="fa fa-search"></span></div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>


    <section class="img vid-section" style="background-image: url({{asset('assets1/images/bg_4.jpg')}});">
        <div class="overlay"></div>
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-md-6 vid-height d-flex align-items-center justify-content-center text-center">
                    <div class="video-wrap" data-aos="fade-up">
                        <h3>Modern House Video</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                            live the blind texts.</p>
                        <a href="#" class="video-icon d-flex align-items-center justify-content-center">
                            <span class="ion-ios-play"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-intro ftco-no-pt ftco-no-pb img" style="background-image: url({{asset('assets1/images/bg_4.jpg')}});">
        <div class="overlay"></div>
        <div class="container-xl py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
                            <div>
                                <h1 class="mb-0">Find Best Place For Leaving</h1>
                                <p>Find Best Place For Leaving</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-center">
                            <p class="mb-0"><a href="#" class="btn btn-black py-3 px-4">Get in touch</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section testimony-section bg-light">
        <div class="container-xl">
            <div class="row justify-content-center pb-4">
                <div class="col-md-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-3">Clients We Help</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="carousel-testimony">
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('assets1/images/person_1.jpg')}})"></div>
                                        <div class="pl-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('assets1/images/person_2.jpg')}})"></div>
                                        <div class="pl-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('assets1/images/person_3.jpg')}})"></div>
                                        <div class="pl-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('assets1/images/person_1.jpg')}})"></div>
                                        <div class="pl-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('assets1/images/person_2.jpg')}})"></div>
                                        <div class="pl-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
