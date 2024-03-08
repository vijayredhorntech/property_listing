@extends('Layouts.layout')

@section('content')
    <section class="slider-hero">
        <div class="overlay"></div>
        <div class="hero-slider">
            <x-banner_slide
                image="{{asset('assets/images/bg_1.jpg')}}"
                title="Your Property Is Our Priority"
                description="A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth."
                link="#">
            </x-banner_slide>
            <x-banner_slide
                image="{{asset('assets/images/bg_2.jpg')}}"
                title="Find Your Dream Property"
                description="A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth."
                link="#">
            </x-banner_slide>
            <x-banner_slide
                image="{{asset('assets/images/bg_3.jpg')}}"
                title="Best Place To Find Your Home"
                description="A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth."
                link="#">
            </x-banner_slide>
        </div>
    </section>
    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ftco-search d-flex justify-content-center">
                        <div class="row">
                            <div class="col-md-12 nav-link-wrap d-flex justify-content-center">
                                <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
{{--                                    tab links here--}}
                                    <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Buy Properties</a>
                                    <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Rent Properties</a>
                                </div>
                            </div>

                            <div class="col-md-12 tab-wrap">
                                <div class="tab-content" id="v-pills-tabContent">

                                    {{--tab content here--}}
                                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                                        <form action="#" class="search-property-1">
                                            <div class="row g-0">
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4 border-0">
                                                        <label for="#">Enter Keyword</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-search"></span></div>
                                                            <input type="text" class="form-control" placeholder="Enter Keyword">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Property Type</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                                <select name id class="form-control">
                                                                    <option value>Residential</option>
                                                                    <option value>Commercial</option>
                                                                    <option value>Land</option>
                                                                    <option value>Industrial</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Location</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="ion-ios-pin"></span></div>
                                                            <input type="text" class="form-control" placeholder="Search Location">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Price Limit</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                                <select name id class="form-control">
                                                                    <option value>£100</option>
                                                                    <option value>£10,000</option>
                                                                    <option value>£50,000</option>
                                                                    <option value>£100,000</option>
                                                                    <option value>£200,000</option>
                                                                    <option value>£300,000</option>
                                                                    <option value>£400,000</option>
                                                                    <option value>£500,000</option>
                                                                    <option value>£600,000</option>
                                                                    <option value>£700,000</option>
                                                                    <option value>£800,000</option>
                                                                    <option value>£900,000</option>
                                                                    <option value>£1,000,000</option>
                                                                    <option value>£2,000,000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group d-flex w-100 border-0">
                                                        <div class="form-field w-100 align-items-center d-flex">
                                                            <input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                                        <form action="#" class="search-property-1">
                                            <div class="row g-0">
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4 border-0">
                                                        <label for="#">Enter Keyword</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="fa fa-search"></span></div>
                                                            <input type="text" class="form-control" placeholder="Enter Keyword">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Property Type</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                                <select name id class="form-control">
                                                                    <option value>Residential</option>
                                                                    <option value>Commercial</option>
                                                                    <option value>Land</option>
                                                                    <option value>Industrial</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Location</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="ion-ios-pin"></span></div>
                                                            <input type="text" class="form-control" placeholder="Search Location">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group p-4">
                                                        <label for="#">Price Limit</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                                <select name id class="form-control">
                                                                    <option value>£100</option>
                                                                    <option value>£10,000</option>
                                                                    <option value>£50,000</option>
                                                                    <option value>£100,000</option>
                                                                    <option value>£200,000</option>
                                                                    <option value>£300,000</option>
                                                                    <option value>£400,000</option>
                                                                    <option value>£500,000</option>
                                                                    <option value>£600,000</option>
                                                                    <option value>£700,000</option>
                                                                    <option value>£800,000</option>
                                                                    <option value>£900,000</option>
                                                                    <option value>£1,000,000</option>
                                                                    <option value>£2,000,000</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group d-flex w-100 border-0">
                                                        <div class="form-field w-100 align-items-center d-flex">
                                                            <input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-md-8 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Oakberry Categories</span>
                    <h2 class="mb-4">Explore Our Categories &amp; Places</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row g-1 mb-1">
                        <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                            <a href="#" class="services">
                                <div class="icon"><span class="flaticon-architect"></span></div>
                                <div class="text">
                                    <h2>Land</h2>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                            <a href="#" class="services">
                                <div class="icon"><span class="flaticon-house"></span></div>
                                <div class="text">
                                    <h2>Residential</h2>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                            <a href="#" class="services">
                                <div class="icon"><span class="flaticon-apartment"></span></div>
                                <div class="text">
                                    <h2>Commercial</h2>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                            <a href="#" class="services">
                                <div class="icon"><span class="flaticon-factory"></span></div>
                                <div class="text">
                                    <h2>Industrial</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
{{--                <div class="col-md-10">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">--}}
{{--                            <ul class="places-list">--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        New York--}}
{{--                                        <span>200 Properties</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        London--}}
{{--                                        <span>100 Properties</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        Chicago--}}
{{--                                        <span>120 Properties</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        Illinois--}}
{{--                                        <span>300 Properties</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">--}}
{{--                            <ul class="places-list">--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        California--}}
{{--                                        <span>100 Properties</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        Tennessee--}}
{{--                                        <span>200 Properties</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        Texas--}}
{{--                                        <span>200 Properties</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        North Carolina--}}
{{--                                        <span>200 Properties</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">--}}
{{--                            <ul class="places-list">--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        Florida--}}
{{--                                        <span>422 Properties</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        Charlotte--}}
{{--                                        <span>200 Properties</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        Orlando--}}
{{--                                        <span>200 Properties</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        Atlanta--}}
{{--                                        <span>200 Properties</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-md-8 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Our Properties</span>
                    <h2 class="mb-4">Featured Properties</h2>
                </div>
            </div>
            <div class="row">
                @foreach($properties as $property)
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <div class="property-wrap">
                        @php
                            $image = $property->medias->first();
                        @endphp
                        <a href="#" class="img img-property" style="background-image: url({{asset('storage/'. $image?->path)}});">
                            <p class="price"><span class="orig-price">£{{$property->price}}</span></p>
                        </a>
                        <div class="text">
                            <div class="list-team d-flex align-items-center mb-4">
                                <div class="d-flex align-items-center">
                                    <div class="img" style="background-image: url({{asset('assets/images/person_1.jpg')}});"></div>
                                    <h3 class="ml-2">{{$property->user->name}}</h3>
                                </div>
                                <span class="text-right">2 weeks ago</span>
                            </div>
                            <h3><a href="#">{{$property->title}}</a></h3>
                            <span class="location"><i class="ion-ios-pin"></i> New York <span class="sale">Sale</span></span>
                            <ul class="property_list mt-3 mb-0">
                                <li><span class="flaticon-bed"></span>{{$property->rooms}}</li>
                                <li><span class="flaticon-bathtub"></span>{{$property->bathrooms}}</li>
                                <li><span class="flaticon-blueprint"></span>{{$property->area}} sqft</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
{{--                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">--}}
{{--                    <div class="property-wrap">--}}
{{--                        <a href="#" class="img img-property" style="background-image: url({{asset('assets/images/work-2.jpg')}});">--}}
{{--                            <p class="price"><span class="old-price">800,000</span><span class="orig-price">£3,050<small> / mo</small></span></p>--}}
{{--                        </a>--}}
{{--                        <div class="text">--}}
{{--                            <div class="list-team d-flex align-items-center mb-4">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class="img" style="background-image: url({{asset('assets/images/person_1.jpg')}});"></div>--}}
{{--                                    <h3 class="ml-2">John Dorf</h3>--}}
{{--                                </div>--}}
{{--                                <span class="text-right">2 weeks ago</span>--}}
{{--                            </div>--}}
{{--                            <h3><a href="#">Sunny Loft Property</a></h3>--}}
{{--                            <span class="location"><i class="ion-ios-pin"></i> New York <span class="rent">Rent</span></span>--}}
{{--                            <ul class="property_list mt-3 mb-0">--}}
{{--                                <li><span class="flaticon-bed"></span>3</li>--}}
{{--                                <li><span class="flaticon-bathtub"></span>2</li>--}}
{{--                                <li><span class="flaticon-blueprint"></span>1,878 sqft</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">--}}
{{--                    <div class="property-wrap">--}}
{{--                        <a href="#" class="img img-property" style="background-image: url({{asset('assets/images/work-3.jpg')}});">--}}
{{--                            <p class="price"><span class="orig-price">£300</span></p>--}}
{{--                        </a>--}}
{{--                        <div class="text">--}}
{{--                            <div class="list-team d-flex align-items-center mb-4">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class="img" style="background-image: url({{asset('assets/images/person_1.jpg')}});"></div>--}}
{{--                                    <h3 class="ml-2">John Dorf</h3>--}}
{{--                                </div>--}}
{{--                                <span class="text-right">2 weeks ago</span>--}}
{{--                            </div>--}}
{{--                            <h3><a href="#">Sunny Loft Property</a></h3>--}}
{{--                            <span class="location"><i class="ion-ios-pin"></i> New York <span class="sale">Sale</span></span>--}}
{{--                            <ul class="property_list mt-3 mb-0">--}}
{{--                                <li><span class="flaticon-bed"></span>3</li>--}}
{{--                                <li><span class="flaticon-bathtub"></span>2</li>--}}
{{--                                <li><span class="flaticon-blueprint"></span>1,878 sqft</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">--}}
{{--                    <div class="property-wrap">--}}
{{--                        <a href="#" class="img img-property" style="background-image: url({{asset('assets/images/work-4.jpg')}});">--}}
{{--                            <p class="price"><span class="orig-price">£300<small> / mo</small></span></p>--}}
{{--                        </a>--}}
{{--                        <div class="text">--}}
{{--                            <div class="list-team d-flex align-items-center mb-4">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class="img" style="background-image: url({{asset('assets/images/person_1.jpg')}});"></div>--}}
{{--                                    <h3 class="ml-2">John Dorf</h3>--}}
{{--                                </div>--}}
{{--                                <span class="text-right">2 weeks ago</span>--}}
{{--                            </div>--}}
{{--                            <h3><a href="#">Sunny Loft Property</a></h3>--}}
{{--                            <span class="location"><i class="ion-ios-pin"></i> New York <span class="rent">Rent</span></span>--}}
{{--                            <ul class="property_list mt-3 mb-0">--}}
{{--                                <li><span class="flaticon-bed"></span>3</li>--}}
{{--                                <li><span class="flaticon-bathtub"></span>2</li>--}}
{{--                                <li><span class="flaticon-blueprint"></span>1,878 sqft</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
    <section class="img vid-section" style="background-image: url({{asset('assets/images/bg_4.jpg')}});">
        <div class="overlay"></div>
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-md-6 vid-height d-flex align-items-center justify-content-center text-center">
                    <div class="video-wrap" data-aos="fade-up">
                        <h3>Modern House Video</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <a href="https://vimeo.com/115041822" class="video-icon glightbox d-flex align-items-center justify-content-center">
                            <span class="ion-ios-play"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-about-section">
        <div class="container-xl">
            <div class="row g-xl-5">
                <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <div class="img w-100" style="background-image: url({{asset('assets/images/about.jpg')}});"></div>
                </div>
                <div class="col-md-8 heading-section" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <span class="subheading">About Us</span>
                    <h2 class="mb-4">Oakberry A Real Estate Company</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <div class="row py-5">
                        <div class="col-md-6 col-lg-3">
                            <div class="counter-wrap" data-aos="fade-up" data-aos-duration="1000">
                                <div class="text">
                                    <span class="d-block number gradient-text"><span id="count1" class="counter" data-count="50">0</span></span>
                                    <p>Years of Experienced</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="counter-wrap" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                                <div class="text">
                                    <span class="d-block number gradient-text"><span id="count2" class="counter" data-count="210">0</span>K+</span>
                                    <p>Total Properties</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="counter-wrap" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                                <div class="text">
                                    <span class="d-block number gradient-text"><span id="count2" class="counter" data-count="450">0</span></span>
                                    <p>Qualified Realtors</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="counter-wrap" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                                <div class="text">
                                    <span class="d-block number gradient-text"><span id="count2" class="counter" data-count="100">0</span></span>
                                    <p>Total Branches</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="img img-2" style="background-image: url({{asset('assets/images/about-1.jpg')}});" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-intro ftco-no-pt ftco-no-pb img" style="background-image: url({{asset('assets/images/bg_4.jpg')}});">
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
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('assets/images/person_1.jpg')}})"></div>
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
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('assets/images/person_2.jpg')}})"></div>
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
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('assets/images/person_3.jpg')}})"></div>
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
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('assets/images/person_1.jpg')}})"></div>
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
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url({{asset('assets/images/person_2.jpg')}})"></div>
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
    <section class="ftco-section ftco-agent ftco-no-pb">
        <div class="overlay"></div>
        <div class="container-xl">
            <div class="row justify-content-center pb-5">
                <div class="col-md-10 heading-section heading-section-white" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Meets Our Agents</span>
                    <h2 class="mb-4">Our Agents</h2>
                </div>
            </div>
            <div class="row">
                @foreach($agents as $agent)
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <div class="agent">
                        <div class="img">
                            <img src="{{asset('assets/images/team-1.jpg')}}" class="img-fluid" alt="Colorlib Template">
                        </div>
                        <div class="desc">
                            <p class="h-info"><span class="position">Listing</span> <span class="details">{{$agent->properties_count}} Properties</span></p>
                            <h3><a href="#">{{$agent->name}}</a></h3>
                            <ul class="ftco-social">
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach

                {{--                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">--}}
{{--                    <div class="agent">--}}
{{--                        <div class="img">--}}
{{--                            <img src="{{asset('assets/images/team-2.jpg')}}" class="img-fluid" alt="Colorlib Template">--}}
{{--                        </div>--}}
{{--                        <div class="desc">--}}
{{--                            <p class="h-info"><span class="position">Listing</span> <span class="details">10 Properties</span></p>--}}
{{--                            <h3><a href="#">Mike Bochs</a></h3>--}}
{{--                            <ul class="ftco-social">--}}
{{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">--}}
{{--                    <div class="agent">--}}
{{--                        <div class="img">--}}
{{--                            <img src="{{asset('assets/images/team-3.jpg')}}" class="img-fluid" alt="Colorlib Template">--}}
{{--                        </div>--}}
{{--                        <div class="desc">--}}
{{--                            <p class="h-info"><span class="position">Listing</span> <span class="details">10 Properties</span></p>--}}
{{--                            <h3><a href="#">Jessica Moore</a></h3>--}}
{{--                            <ul class="ftco-social">--}}
{{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">--}}
{{--                    <div class="agent">--}}
{{--                        <div class="img">--}}
{{--                            <img src="{{asset('assets/images/team-4.jpg')}}" class="img-fluid" alt="Colorlib Template">--}}
{{--                        </div>--}}
{{--                        <div class="desc">--}}
{{--                            <p class="h-info"><span class="position">Listing</span> <span class="details">10 Properties</span></p>--}}
{{--                            <h3><a href="#">Sarah Geronimo</a></h3>--}}
{{--                            <ul class="ftco-social">--}}
{{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>--}}
{{--                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container-xl">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Our Blog</span>
                    <h2>Recent Blog</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 d-flex">
                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <a href="#" class="block-20 img d-flex align-items-end" style="background-image: url({{asset('assets/images/image_1.jpg')}});">
                        </a>
                        <div class="text">
                            <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span><a href="#">3 Comments</a></p>
                            <h3 class="heading mb-3"><a href="#">New Home Sales Picked Up in December</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <a href="#" class="block-20 img d-flex align-items-end" style="background-image: url({{asset('assets/images/image_2.jpg')}});">
                        </a>
                        <div class="text">
                            <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span><a href="#">3 Comments</a></p>
                            <h3 class="heading mb-3"><a href="#">New Home Sales Picked Up in December</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <a href="#" class="block-20 img d-flex align-items-end" style="background-image: url({{asset('assets/images/image_3.jpg')}});">
                        </a>
                        <div class="text">
                            <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span><a href="#">3 Comments</a></p>
                            <h3 class="heading mb-3"><a href="#">New Home Sales Picked Up in December</a mb-3></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <a href="#" class="block-20 img d-flex align-items-end" style="background-image: url({{asset('assets/images/image_4.jpg')}});">
                        </a>
                        <div class="text">
                            <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span><a href="#">3 Comments</a></p>
                            <h3 class="heading mb-3"><a href="#">New Home Sales Picked Up in December</a mb-3></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
