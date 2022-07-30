
@extends('front.layout.master')
@section('title')
{{trans('app.home')}}
@endsection
@section('css')

@endsection
<style>
    form-control2 {
        font-size: 14px;
        height: 20px;
        width: 55px;
        border: none;
        border-radius: 0;
        font-weight: 800;
        padding: 0 0 5px 0;
        background-color: transparent;
        box-shadow: none;
        outline: none;
        border-bottom: 2px solid #ccc;
        margin: 0;
    }

    .form-control2:focus {
        box-shadow: none;
        border-bottom: 2px solid #ccc;
        background-color: transparent;
    }

    .form-control3 {
        font-size: 14px;
        height: 20px;
        width: 30px;
        border: none;
        border-radius: 0;
        font-weight: 800;
        padding: 0 0 5px 0;
        background-color: transparent;
        box-shadow: none;
        outline: none;
        border-bottom: 2px solid #ccc;
        margin: 0;
    }

    .form-control3:focus {
        box-shadow: none;
        border-bottom: 2px solid #ccc;
        background-color: transparent;
    }

    p {
        margin: 0;
    }

    img {
        width: 100%;
        height: 100%;
        object-fit: fill;
    }

    .text-muted {
        font-size: 10px;
    }

    .textmuted {
        color: #6c757d;
        font-size: 13px;
    }

    .fs-14 {
        font-size: 14px;
    }

    .btn.btn-primary {
        width: 100%;
        height: 55px;
        border-radius: 0;
        padding: 13px 0;
        background-color: black;
        border: none;
        font-weight: 600;
    }

    .btn.btn-primary:hover .fas {
        transform: translateX(10px);
        transition: transform 0.5s ease
    }


    .fw-900 {
        font-weight: 900;
    }

    ::placeholder {
        font-size: 12px;
    }

    .ps-30 {
        padding-left: 30px;
    }

    .h4 {
        font-family: 'Work Sans', sans-serif !important;
        font-weight: 800 !important;
    }

    .textmuted,
    h5,
    .text-muted {
        font-family: 'Poppins', sans-serif;
    }</style>
@section('content')
    <!-- start home banner area -->
    <div id="home" class="home-banner-area ptb-70 bg-light">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-content mb-30">
                        <span class="sub-title">Amazing Places</span>
                        <h1>
                            Make Your Trip Fun & Noted
                        </h1>
                        <p>
                            Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.
                        </p>
                        <div class="search-form">
                            <form id="searchForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="select-box">
                                            <i class='bx bx-map-alt'></i>
                                            <select class="form-control">
                                                <option data-display='Destination'>Nothing</option>
                                                <option value="1">North America</option>
                                                <option value="2">Spain Madrid</option>
                                                <option value="3">Japan Tokyo</option>
                                                <option value="4">Europe City</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="select-box">
                                            <i class='bx bx-calendar'></i>
                                            <input type="text" class="date-select form-control" placeholder="Depart Date" required="required"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="select-box">
                                            <i class='bx bx-package'></i>
                                            <select class="form-control">
                                                <option data-display='Travel Type'>Travel Type</option>
                                                <option value="1">City Tour</option>
                                                <option value="2">Family Tours</option>
                                                <option value="3">Seasonal Tours</option>
                                                <option value="4">Outdoor Activities</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="select-box">
                                            <i class='bx bx-time'></i>
                                            <select class="form-control">
                                                <option data-display='Tour Duration'>Nothing</option>
                                                <option value="1">5 Days</option>
                                                <option value="2">12 Days</option>
                                                <option value="3">21 Days</option>
                                                <option value="4">30 Days</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-15">
                                        <button type="button" class="btn-primary">Search Here</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pr-0">

                    <div class="banner-slider owl-carousel mb-30">
                        @foreach($trips as $trip)
                        <div class="slider-item">
                            <div class="image">
                                @if($trip->photo)
                                <img src="{{asset('admin/pictures/trips/' . $trip->id .'/' .$trip->photo->Filename)}}" alt="Demo Image" style="width: 1200px;height: 600px">
                                @endif
                            </div>
                            <div class="content">
                                <span class="location"><i class='bx bx-map'></i>{{$trip->destination->name}}</span>
                                <h3 class="mt-15">
                                    <a href="destination-details.html">{{$trip->name}}</a>
                                </h3>
                                <div class="review mb-15">
                                    @for($i=0;$i<5;$i++)
                                        @if($trip->rate > $i)
                                            <i class='bx bxs-star'></i>
                                        @else
                                            <i class="simple-icon-star text-warning"
                                               aria-hidden="true"></i>
                                        @endif
                                    @endfor
                                    <span>Review</span>
                                </div>
                                <ul class="list">
                                    <li>${{$trip->price_adult_EN}}</li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div id="owl-custom-dots" class='owl-dots'>
                        @foreach($trips as $trip)
                            @if($trip->photo)
                        <img class="owl-dot" src="{{asset('admin/pictures/trips/' . $trip->id .'/' .$trip->photo->Filename)}}" alt="Demo Image" style="height: 75px">
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end home banner area -->

    <!-- start about section -->
    <section id="about" class="about-section pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="video-content mb-30">
                        <div class="video-image">
                            @if($about->photo)
                            <img src="{{asset('admin/pictures/aboutUs/' . $about->id .'/' .$about->photo->Filename)}}" alt="video" />
                            @endif
                        </div>
                        <a href="{{$about->video}}" class="youtube-popup video-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content mb-30">
                        <h2>
                            {{$about->name}}
                        </h2>
                        <h6>{!! Str::limit($about->notes,400) !!}</h6>

                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="content-list">
                                    {!!$about->icon_1!!}
                                    <h6>{{$about->title_1}}</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content-list">
                                    {!!$about->icon_2!!}
                                    <h6>{{$about->title_2}}</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content-list">
                                    {!!$about->icon_3!!}
                                    <h6>{{$about->title_3}}</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content-list">
                                    {!!$about->icon_4!!}
                                    <h6>{{$about->title_4}}</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content-list">
                                    {!!$about->icon_5!!}
                                    <h6>{{$about->title_5}}</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content-list">
                                    {!!$about->icon_6!!}
                                    <h6>{{$about->title_6}}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="about-btn">
                            <a href="{{route('contact')}}" class="btn-primary">Contact Us</a>
                            <a href="{{route('about')}}" class="btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape shape-1">
            <img src="{{asset('front/assets/img/shape1.png')}}" alt="Background Shape">
        </div>
        <div class="shape shape-2">
            <img src="{{asset('front/assets/img/shape2.png')}}" alt="Background Shape">
        </div>
    </section>
    <!-- end about section -->

    <!-- start destination section -->
     <!-- start destination section -->
     <section id="destination" class="destination-section pt-100 pb-70 bg-light">
        <div class="container">
            <div class="section-title">
                <h2>{{trans('app.destination')}}</h2>
                <p>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
            </div>

            <div class="row filtr-container">
                @foreach($destinations as $destination)
                <div class="col-lg-4 col-md-6 filtr-item mb-5" data-category="1" data-sort="value">
                    <div class="item-single mb-30">
                        <div class="image">
                            @if($destination->photo)
                            <img src="{{asset('admin/pictures/destenation/' . $destination->id .'/' . $destination->photo->Filename)}}" alt="Demo Image" style="height: 300px">
                            @endif
                        </div>
                        <div class="content">
                            <span class="location"><i class='bx bx-map' ></i>{{$destination->name}}</span>
                            <h3>
                                <a href="{{route('user_destination_details',encrypt($destination->id))}}">{{$destination->name}}</a>
                            </h3>
                            <p>
                                {!! Str::limit($destination->note, 100) !!}
                            </p>
                            <hr>
{{--                            <ul class="list">--}}
{{--                                <li><i class='bx bx-group'></i>{{getCountTrips($destination->id)}} /{{trans('app.trip')}}</li>--}}
{{--                            </ul>--}}
                        </div>
                        <div class="spacer"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end destination section -->

    <!-- start offers section -->
    <section id="offers" class="offers-section pt-100 pb-70 bg-light">
        <div class="container">
            <div class="section-title">
                <h2>{{trans('app.offer')}}</h2>
                <p>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
            </div>
            <div class="row">
                @foreach($packages as $package)
                <div class="col-lg-4 col-md-6">
                    <div class="item-single mb-30">
                        <div class="image">
                            @if($package->photo)
                            <img src="{{asset('admin/pictures/package/' . $package->id .'/' .$package->photo->Filename)}}" alt="Demo Image">
                            @endif
                        </div>
                        <div class="content">
                            <div class="review">
                                @for($i=0;$i<5;$i++)
                                    @if($package->rate > $i)
                                        <i class='bx bxs-star'></i>
                                    @else
                                        <i class="simple-icon-star text-warning"
                                           aria-hidden="true"></i>
                                    @endif
                                @endfor
                            </div>
                            <div class="title">
                                <h3>
                                    <a href="{{route('package_details',encrypt($package->id))}}">{{$package->name}}</a>
                                </h3>
                                <span>${{$package->before_price}}</span>
                            </div>
                            <ul class="list">
                                <li> {{getPriceInCuracy($package->price)}} </li>
                            </ul>
                        </div>
                        <div class="discount">
                            <span>{{trans('app.discount')}}</span>
                            <span>{{getPriceInCuracy($package->before_price) - getPriceInCuracy($package->price)}} $</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end offers section -->

    <!-- start testimonial-section -->
    <section id="testimonial" class="testimonial-section ptb-100 bg-light">
        <div class="container">
            <div class="section-title">
                <h2>What're Our Clients Say</h2>
                <p>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
            </div>
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="testimonial-slider owl-carousel">
                        @foreach($testmeniols as $testmeniol)
                        <div class="slider-item">
                            <div class="client-img">
                                <img src="{{asset('upload/testmeniol/'.$testmeniol->image)}}" alt="client-1" style="width: 85px;height: 85px" />
                            </div>
                            <div class="content">
                                <div class="client-info">
                                    <h3>{{$testmeniol->name}}</h3>
                                    <span>{{$testmeniol->job}}</span>
                                </div>
                                <div class="quote">
                                    <i class='bx bxs-quote-left'></i>
                                </div>
                                <p>
                                    {!! Str::limit($testmeniol->notes,300) !!}
                                </p>
                                <div class="review">
                                    @for($i=0;$i<5;$i++)
                                        @if($testmeniol->rate > $i)
                                            <i class='bx bxs-star'></i>
                                        @else
                                            <i class="simple-icon-star text-warning"
                                               aria-hidden="true"></i>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class='clients-img'>
                @foreach($testmeniols1 as $testmeniol)
                <img class="image {{ $loop->first ? 'image-1' : '' }}" src="{{asset('upload/testmeniol/'.$testmeniol->image)}}" alt="Demo Image" style="width: 85px;height: 70px">
                @endforeach
            </div>
        </div>
        <div class="shape">
            <img src="{{asset('front/assets/img/shape1.png')}}" alt="Background Shape">
        </div>
    </section>
    <!-- end testimonial section -->

    <!-- start team section -->
    <section id="team" class="team-section pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Our Team & Guide</h2>
                <p>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
            </div>
            <div class="row">
                @foreach($teams as $team)
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="item-single mb-30">
                        <div class="image">
                            @if($team->photo)
                            <img src="{{asset('admin/pictures/team/' . $team->id .'/' .$team->photo->Filename)}}" alt="Demo Image" style="height: 300px">
                            @endif
                        </div>
                        <div class="content">
                            <div class="title">
                                <h3>
                                    <a href="team.html">{{$team->name}}</a>
                                </h3>
                                <span>{!! Str::limit($team->jop,30) !!}</span>
                            </div>
                            <div class="social-link">
                                <a href="{{$team->facebook}}" target="_blank"><i class='bx bxl-facebook'></i></a>
                                <a href="{{$team->twitter}}" target="_blank"><i class='bx bxl-twitter'></i></a>
                                <a href="{{$team->linkedin}}" target="_blank"><i class='bx bxl-linkedin' ></i></a>
                                <a href="{{$team->instagram}}" target="_blank"><i class='bx bxl-instagram' ></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end team section -->
<!-- Transfer -->
    <section style="background-color: #ededed;padding: 20px">
        <div class="container">
            <div class="section-title">
                <h2>Our Transfer</h2>
                <p>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
            </div>
            <div class="row m-0">
                <div class="col-lg-7 pb-5 pe-lg-5">
                    <div class="row">
                        <div class="col-12 p-5">

                            <!--Slider-->
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                                <div class="carousel-indicators">
                                    @foreach($transfers->photos as $transfer)
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="{{ $loop->index }}"
                                                class="{{ $loop->first ? 'active' : '' }}" aria-current="true"
                                                aria-label="Slide 1"></button>
                                    @endforeach
                                </div>

                                <div class="carousel-inner">
                                    @foreach($transfers->photos as $transfer)
                                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                            <img
                                                src="{{asset('admin/pictures/transfer/' . $transfers->id .'/' .$transfer->Filename)}}"
                                                class="d-block w-100" alt="..."
                                                style="white-space: 100%;height: 350px">
                                        </div>
                                    @endforeach
                                    <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>

                            </div>

                        </div>
                        <div class="row m-0 bg-light">
                            <div class="col-md-4 col-6 ps-30 pe-0 my-4">
                                <p class="text-muted">Destination</p>
                                <p class="h5">{{$transfers->destenation->name}}</p>
                            </div>
                            <div class="col-md-4 col-6  ps-30 my-4">
                                <p class="text-muted">Pickup Loacation</p>
                                <p class="h5 m-0">{{$transfers->route_form}}</p>
                            </div>
                            <div class="col-md-4 col-6 ps-30 my-4">
                                <p class="text-muted">Drop off </p>
                                <p class="h5 m-0">{{$transfers->route_to}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 p-0 ps-lg-4">
                    <div class="row m-0">
                        <div class="col-12 px-4">
                            <div class="d-flex align-items-end mt-4 mb-2">
                                <p class="h4 mb-3"><span class="pe-1">{{$transfers->name}}</span></p>
                            </div>
                        </div>
                        <div class="col-12 px-0">
                            <p>{!! $transfers->notes !!}
                            </p>
                            <div class="row m-0">
                                <div class="col-12  mb-4 p-0">
                                    <div class="btn btn-primary"><a href="{{route('transfer_car',encrypt($transfers->id) )}}" style="text-decoration: none;color: white"> Choose Car <span class="fas fa-arrow-right ps-2"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Transfer -->
    <!-- start tours section -->
    <section id="tours" class="tours-section pt-100 pb-70 bg-light">
        <div class="container">
            <div class="section-title">
                <h2>{{trans('app.trips')}}</h2>
                <p>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
            </div>
            <div class="row no-wrap">
                <div class="col-auto">
                    <div class="item-single mb-30">
                        <div class="image">
                            @if($trip_1->photo)
                                <img src="{{asset('admin/pictures/trips/' . $trip_1->id .'/' .$trip_1->photo->Filename)}}" alt="Demo Image" style="height: 500px;width: 450px"/>
                            @endif
                        </div>
                        <div class="content">
                            <span class="location"><i class='bx bx-map' ></i>{{$trip_1->destination->name}}</span>
                            <h3>
                                <a href="{{route('user_trips_details',encrypt($trip_1->id))}}">{{$trip_1->name}}</a>
                            </h3>
                            <div class="review mb-15">
                                @for($i=0;$i<5;$i++)
                                    @if($trip_1->rate > $i)
                                        <i class='bx bxs-star'></i>
                                    @else
                                        <i class="simple-icon-star text-warning"
                                           aria-hidden="true"></i>
                                    @endif
                                @endfor
                            </div>
                            <p>
                            {!!Str::limit($trip_1->notes, 50)!!}
                            <hr>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>
                                    @foreach($trip_1->days as $row)
                                       - {{$row->name}}
                                    @endforeach
                                </li>
                                <li>${{getPriceInCuracy($trip_1->price_adult_EN)}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col col-md-12">
                    <div class="tours-slider owl-carousel mb-30">
                        @foreach($trips as $trip)
                        <div class="slider-item">
                            <div class="image">
                                @if($trip->photo)
                                    <img src="{{asset('admin/pictures/trips/' . $trip->id .'/' .$trip->photo->Filename)}}" alt="Demo Image" style="height: 350px"/>
                                @endif
                            </div>
                            <div class="content">
                                <div class="review">
                                    @for($i=0;$i<5;$i++)
                                        @if($trip->rate > $i)
                                            <i class='bx bxs-star'></i>
                                        @else
                                            <i class="simple-icon-star text-warning"
                                               aria-hidden="true"></i>
                                        @endif
                                    @endfor
                                </div>
                                <div class="title">
                                    <h3>
                                        <a href="{{route('user_trips_details',encrypt($trip->id))}}">{{$trip->name}}</a>
                                    </h3>
                                </div>
                                <ul class="list">
                                    <li><i class='bx bx-time'></i>
                                        @foreach($trip->days as $row)
                                            - {{$row->name}}
                                        @endforeach</li>
                                    <li>{{getPriceInCuracy($trip->price_adult_EN)}}</li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end tour section -->

    <!-- start blog section -->
    <section id="blog" class="blog-section pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>{{trans('app.blog')}}</h2>
                <p>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    @if($blog_1)
                        <div class="item-single item-big mb-30">
                            @if($blog_1->photo)
                            <div class="image">
                                <img src="{{asset('admin/pictures/blog/' . $blog_1->id .'/' .$blog_1->photo->Filename)}}" alt="Demo Image"/>
                            </div>
                            @endif
                            <div class="content">
                                <ul class="info-list">
                                    <li><i class='bx bx-calendar'></i> {{$blog_1->created_at->diffforhumans()}}</li>
                                </ul>
                                <h3>
                                    <a href="{{route('user_blog_details',encrypt($blog_1->id))}}">{{$blog_1->name}}</a>
                                </h3>
                                <p>
                                    {!! str::limit($blog_1->notes,200) !!}
                                </p>
                                <ul class="list">
                                    <li>
                                        <a href="{{route('user_blog_details',encrypt($blog_1->id))}}" class="btn-primary">{{trans('app.read_more')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        @foreach($blogs as $blog)
                        <div class="col-lg-6 col-md-6">
                            <div class="item-single mb-30">
                                @if($blog->photo)
                                <div class="image">
                                    <img src="{{asset('admin/pictures/blog/' . $blog->id .'/' .$blog->photo->Filename)}}" alt="Demo Image"/>
                                </div>
                                @endif
                                <div class="content">
                                    <ul class="info-list">
                                        <li><i class='bx bx-calendar'></i>{{$blog->created_at->diffforhumans()}}</li>
                                    </ul>
                                    <h3>
                                        <a href="{{route('user_blog_details',encrypt($blog->id))}}">{{$blog->name}}</a>
                                    </h3>
                                    <ul class="list">
                                        <li>
                                            <div class="author">
                                                <a href="{{route('user_blog_details',encrypt($blog->id))}}" class="btn-primary">{{trans('app.read_more')}}</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="section-title">
                <h2>why choose us</h2>
                <p>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
            </div>
            <div class="row">
                @foreach($whys as $why)
                <div class="col-md-4">
                    <img src="{{asset('upload/why/'.$why->image)}}" alt="" style="width: 50px;height: 50px;border-radius: 50%">
                    <h3>{{$why->name}}</h3>
                    <p>{!! $why->disc !!}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end Reviews section -->
    <section id="blog" class="blog-section pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Review</h2>
                <p>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
            </div>
            <div class="row">
                @foreach($reviews as $review)
                <div class="col-md-4 text-center">
                    <h3>{{$review->name}}</h3>
                    <a href="{{$review->link}}" target="_blank"><img src="{{asset('upload/review/'.$review->image)}}" alt="" style="width: 200px;height: 90px"></a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
@section('js')
<script>
    $(document).ready(function () {
        $('select[name="destenation_id_row"]').on('change', function () {
            var SectionId = $(this).val();
            if (SectionId) {
                $.ajax({
                    url: "{{ URL::to('route_form') }}/" + SectionId
                    , type: "GET"
                    , dataType: "json"
                    , success: function (data) {
                        $('select[name="route_form"]').empty();
                        $('select[name="route_form"]').append('<option selected disabled >اختر من القائمه...</option>');
                        $.each(data, function (key, value) {
                            $('select[name="route_form"]').append('<option value="' +
                                key + '">' + value + '</option>');
                        });
                    }
                    ,
                });

            } else {
                console.log('AJAX load did not work');
            }
        });
    });
</script>

<script>
    $(document).ready(function () {
        $('select[name="destenation_id_row"]').on('change', function () {
            var SectionId = $(this).val();
            if (SectionId) {
                $.ajax({
                    url: "{{ URL::to('route_to') }}/" + SectionId
                    , type: "GET"
                    , dataType: "json"
                    , success: function (data) {
                        $('select[name="route_to"]').empty();
                        $('select[name="route_to"]').append('<option selected disabled >اختر من القائمه...</option>');
                        $.each(data, function (key, value) {
                            $('select[name="route_to"]').append('<option value="' +
                                key + '">' + value + '</option>');
                        });
                    }
                    ,
                });

            } else {
                console.log('AJAX load did not work');
            }
        });
    });
</script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection
