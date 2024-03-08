@extends('Layouts.layout')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('assets/images/bg_4.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 pt-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="fa fa-chevron-right"></i></a></span>
                        <span>Blog <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Our Blog</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-3 d-flex">
                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                         data-aos-delay="100">
                        <a href="{{route('blogDetails')}}" class="block-20 img d-flex align-items-end"
                           style="background-image: url({{asset('assets/images/image_1.jpg')}});">
                        </a>
                        <div class="text">
                            <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span><a href="#">3 Comments</a></p>
                            <h3 class="heading mb-3"><a href="#">New Home Sales Picked Up in December</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                         data-aos-delay="200">
                        <a href="{{route('blogDetails')}}" class="block-20 img d-flex align-items-end"
                           style="background-image: url({{asset('assets/images/image_2.jpg')}});">
                        </a>
                        <div class="text">
                            <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span><a href="#">3 Comments</a></p>
                            <h3 class="heading mb-3"><a href="#">New Home Sales Picked Up in December</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                         data-aos-delay="300">
                        <a href="{{route('blogDetails')}}" class="block-20 img d-flex align-items-end"
                           style="background-image: url({{asset('assets/images/image_3.jpg')}});">
                        </a>
                        <div class="text">
                            <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span><a href="#">3 Comments</a></p>
                            <h3 class="heading mb-3"><a href="#">New Home Sales Picked Up in December</a mb-3></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                         data-aos-delay="300">
                        <a href="{{route('blogDetails')}}" class="block-20 img d-flex align-items-end"
                           style="background-image: url({{asset('assets/images/image_4.jpg')}});">
                        </a>
                        <div class="text">
                            <p class="meta"><span>Admin</span> <span>Dec. 01, 2020</span><a href="#">3 Comments</a></p>
                            <h3 class="heading mb-3"><a href="#">New Home Sales Picked Up in December</a mb-3></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
