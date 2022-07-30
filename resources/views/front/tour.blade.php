@extends('front.layout.master')
@section('title')
    {{trans('app.trips')}}
@endsection
@section('css')
@endsection
@section('content')
    <!-- start page title area-->
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>Tours</h1>
                <ul>
                    <li class="item"><a href="index.html">Home</a></li>
                    <li class="item"><a href="tours.html"><i class='bx bx-chevrons-right'></i>Tours</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{asset('front/assets/img/page-title-area/tour.jpg')}}" alt="Demo Image">
        </div>
    </div>
    <!-- end page title area -->
    <!-- start destination section -->
    <section id="destination" class="destination-section ptb-100 bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Destinations</h2>
                <p>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
            </div>
            <div class="row">
                <div class="col-md-8 m-auto">
                    <div class="filter-group">
                        <!-- Control List -->
                        <ul id="control" class="list-control">
                            <li class="active" data-filter="all">All</li>
                            <li data-filter="1">Budget-Friendly</li>
                            <li data-filter="2">Royal</li>
                            <li data-filter="3">Recommended</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row filtr-container">
                <div class="col-lg-4 col-md-6 filtr-item" data-category="1" data-sort="value">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/destination1.jpg" alt="Demo Image">
                        </div>
                        <div class="content">
                            <span class="location"><i class='bx bx-map' ></i>Hvar, Croatia</span>
                            <h3>
                                <a href="destination-details.html">Piazza Castello</a>
                            </h3>
                            <div class="review">
                                <i class='bx bx-smile'></i>
                                <span>8.5</span>
                                <span>Superb</span>
                            </div>
                            <p>
                                A wonderful little cottage right on the seashore - perfect for exploring.
                            </p>
                            <hr>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>3 Days</li>
                                <li><i class='bx bx-group'></i>160+</li>
                                <li>$500</li>
                            </ul>
                        </div>
                        <div class="spacer"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 filtr-item" data-category="2, 1" data-sort="value">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/destination2.jpg" alt="Demo Image">
                        </div>
                        <div class="content">
                            <span class="location"><i class='bx bx-map' ></i>Santorini, Oia, Greece</span>
                            <h3>
                                <a href="destination-details.html">Santorini, Oia, Greece</a>
                            </h3>
                            <div class="review">
                                <i class='bx bx-smile'></i>
                                <span>9</span>
                                <span>Superb</span>
                            </div>
                            <p>
                                A wonderful little cottage right on the seashore - perfect for exploring.
                            </p>
                            <hr>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>7 Days</li>
                                <li><i class='bx bx-group'></i>65+</li>
                                <li>$2000</li>
                            </ul>
                        </div>
                        <div class="spacer"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 filtr-item" data-category="2" data-sort="value">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/destination3.jpg" alt="Demo Image">
                        </div>
                        <div class="content">
                            <span class="location"><i class='bx bx-map' ></i>Rialto Bridge, Italy</span>
                            <h3>
                                <a href="destination-details.html">Rialto Bridge</a>
                            </h3>
                            <div class="review">
                                <i class='bx bx-smile'></i>
                                <span>7.5</span>
                                <span>Superb</span>
                            </div>
                            <p>
                                A wonderful little cottage right on the seashore - perfect for exploring.
                            </p>
                            <hr>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>5 Days</li>
                                <li><i class='bx bx-group'></i>96+</li>
                                <li>$2100</li>
                            </ul>
                        </div>
                        <div class="spacer"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 filtr-item" data-category="2, 3" data-sort="value">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/destination4.jpg" alt="Demo Image">
                        </div>
                        <div class="content">
                            <span class="location"><i class='bx bx-map' ></i>Santorini, Oia, Greece</span>
                            <h3>
                                <a href="destination-details.html">Santorini, Oia, Greece</a>
                            </h3>
                            <div class="review">
                                <i class='bx bx-smile'></i>
                                <span>9</span>
                                <span>Superb</span>
                            </div>
                            <p>
                                A wonderful little cottage right on the seashore - perfect for exploring.
                            </p>
                            <hr>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>7 Days</li>
                                <li><i class='bx bx-group'></i>65+</li>
                                <li>$2000</li>
                            </ul>
                        </div>
                        <div class="spacer"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 filtr-item" data-category="1, 3" data-sort="value">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/destination5.jpg" alt="Demo Image">
                        </div>
                        <div class="content">
                            <span class="location"><i class='bx bx-map' ></i>Oia, Greece</span>
                            <h3>
                                <a href="destination-details.html">Greek Cottage, Greece</a>
                            </h3>
                            <div class="review">
                                <i class='bx bx-smile'></i>
                                <span>8.5</span>
                                <span>Superb</span>
                            </div>
                            <p>
                                A wonderful little cottage right on the seashore - perfect for exploring.
                            </p>
                            <hr>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>3 Days</li>
                                <li><i class='bx bx-group'></i>160+</li>
                                <li>$1500</li>
                            </ul>
                        </div>
                        <div class="spacer"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 filtr-item" data-category="3, 1" data-sort="value">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/destination6.jpg" alt="Demo Image">
                        </div>
                        <div class="content">
                            <span class="location"><i class='bx bx-map' ></i>Venice, Italy</span>
                            <h3>
                                <a href="destination-details.html">Metropolitan City</a>
                            </h3>
                            <div class="review">
                                <i class='bx bx-smile'></i>
                                <span>8.5</span>
                                <span>Superb</span>
                            </div>
                            <p>
                                A wonderful little cottage right on the seashore - perfect for exploring.
                            </p>
                            <hr>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>3 Days</li>
                                <li><i class='bx bx-group'></i>160+</li>
                                <li>$1500</li>
                            </ul>
                        </div>
                        <div class="spacer"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="pagination text-center">
                        <span class="page-numbers current" aria-current="page">1</span>
                        <a href="#" class="page-numbers">2</a>
                        <a href="#" class="page-numbers">3</a>
                        <a href="#" class="page-numbers">Next</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end destination section -->
    <!-- start our tours section -->
    <section id="tours" class="tours-section tours-style-two ptb-100 bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Our Tours</h2>
                <p>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
            </div>
            <div class="row">
                @foreach($trips as $trip)
                <div class="col-lg-4 col-md-6">
                    <div class="item-single mb-30">
                        <div class="image">
                            @if($trip->photo)
                            <img src="{{asset('admin/pictures/trips/' . $trip->id .'/' .$trip->photo->Filename)}}" alt="Demo Image"/>
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
                                <li>${{$trip->price_adult_EN}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-12 col-md-12">
                    <div class="pagination text-center">
                        {{ $trips->render("pagination::bootstrap-4") }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end our tour section -->
@endsection
@section('js')
@endsection
