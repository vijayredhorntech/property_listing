@extends('Layouts.layout')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('assets1/images/bg_4.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 pt-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="fa fa-chevron-right"></i></a></span>
                        <span>Properties <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Properties</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ftco-search d-flex justify-content-center">
                        <div class="row">
                            <div class="col-md-12 nav-link-wrap d-flex justify-content-center">
                                <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist"
                                     aria-orientation="vertical">
                                    {{--                                    tab links here--}}
                                    <a class="nav-link " id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
                                       role="tab" aria-controls="v-pills-1" aria-selected="true">Buy Properties</a>
                                </div>
                            </div>
                            <div class="col-md-12 tab-wrap">
                                <div class="tab-content" id="v-pills-tabContent">

                                    {{--tab content here--}}
                                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                         aria-labelledby="v-pills-nextgen-tab">
                                        <form action="{{route('searchProperties')}}" method="POST"
                                              class="search-property-1">
                                            @csrf
                                            <div class="row g-0">
                                                <div class="col-md d-flex">
                                                    <div class="form-group px-4 py-3">
                                                        <label for="#">Property Type</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span
                                                                        class="fa fa-chevron-down"></span></div>

                                                                @php
                                                                    $categories = \App\Models\Category::all();
                                                                @endphp

                                                                <select name="property_type" id class="form-control">
                                                                    @foreach($categories as $category)
                                                                        <option style="color: black"
                                                                            value="{{$category->id}}">{{$category->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group px-4 py-3">
                                                        <label for="#">Location</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="ion-ios-pin"></span></div>
                                                            @php
                                                                $propertiess = \App\Models\Property::all();

                                                            @endphp

                                                            <select  name="location" id class="form-control">
                                                                @foreach($propertiess as $property)
                                                                    <option style="color: black"
                                                                        value="{{$property->location}}">{{$property->location}}</option>
                                                                @endforeach
                                                            </select>



                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group px-4 py-3">
                                                        <label for="#">Area(Sq.Ft.)</label>
                                                        <div class="form-field">
                                                            <div class="icon"><span class="ion-ios-map"></span></div>
                                                            <input type="number" name="area" class="form-control"
                                                                   value="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group px-4 py-3">
                                                        <label for="#">Price Limit</label>
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span
                                                                        class="fa fa-chevron-down"></span></div>
                                                                <select name="price" class="form-control">
                                                                    <option style="color: black" value="100">£100</option>
                                                                    <option style="color: black" value="10000">£10,000</option>
                                                                    <option style="color: black" value="50000">£50,000</option>
                                                                    <option style="color: black" value="100000">£100,000</option>
                                                                    <option style="color: black" value="200000">£200,000</option>
                                                                    <option style="color: black" value="300000">£300,000</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md d-flex">
                                                    <div class="form-group d-flex w-100 border-0">
                                                        <div class="form-field w-100 align-items-center d-flex">
                                                            <input type="submit"
                                                                   class="align-self-stretch form-control btn btn-primary">
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


    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="ftco-section bg-light">
        <div class="container-xl">
            <div class="row">
                @forelse($properties as $property)
                    @php
                        $image = $property->media->first();
                    @endphp
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <div class="property-wrap">
                        <a href="{{route('propertyDetails', ['property' => $property])}}" class="img img-property" style="background-image: url({{asset('storage/'. $image?->path)}});">
                            @if($property->is_price_visible)
                                <p class="price"><span class="orig-price">£{{$property->price}}</span></p>

                            @endif

                        </a>
                        <div class="text">
                            <div class="list-team d-flex align-items-center mb-4">
                                <div class="d-flex align-items-center">
                                    <div class="img" style="background-image: url({{asset('assets1/images/person_1.jpg')}});"></div>
                                    <h3 class="ml-2">{{$property->user->name}}</h3>
                                </div>
                                @if($property->is_year_visible)
                                    <span class="text-right">{{($property->created_at->diffInDays(\Carbon\Carbon::now()) == 0 ) ? 'today' : $property->created_at->diffInDays(\Carbon\Carbon::now()) .' days ago'}}</span>

                                @endif

                            </div>
                            <h3><a href="{{route('propertyDetails', ['property' => $property])}}">{{$property->title}}</a></h3>
                            <span class="location">
                           @if($property->is_location_visible)
                                <i class="ion-ios-pin"></i> {{$property->location}}
                            @endif
                                @if($property->is_type_visible)
                                <span class="sale">{{ucfirst($property->type)}}</span>
                            @endif

                            </span>
                            <ul class="property_list mt-3 mb-0">
                                @if($property->is_rooms_visible)
                                    <li><span class="flaticon-bed"></span>{{$property->rooms}}</li>
                                @endif
                                @if($property->is_bathrooms_visible)
                                    <li><span class="flaticon-bathtub"></span>{{$property->bathrooms}}</li>
                                @endif
                                    @if($property->is_area_visible)
                                        <li><span class="flaticon-blueprint"></span>{{$property->area}} sqft</li>
                                    @endif

                            </ul>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="col-md-12">
                        <h3 class="text-center">No Properties Found</h3>
                    </div>
                @endforelse

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
