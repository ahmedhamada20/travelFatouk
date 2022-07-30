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
                <h2> {{trans('app.trips')}}</h2>
                <p>Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
            </div>
            <div class="row">
                <div class="col-md-8 m-auto">
                    <div class="filter-group">
                        <!-- Control List -->
                        <ul id="control" class="list-control">
                            <li data-filter="all">All</li>
                            @foreach (App\Models\TripTrype::all() as $TripTryp)
                            <a href="{{ route('getTrips',$TripTryp->id) }}" data-filter="{{ $TripTryp->id }}">{{ $TripTryp->name }}</li>
                            @endforeach
                           
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row filtr-container">
                @foreach ($trips as $trip)
                <div class="col-lg-4 col-md-6 filtr-item" data-category="{{ App\Models\Trips::whereIn('trips_type_id',[$trip->id])->get() }}" data-sort="value">
                    <div class="item-single mb-30">
                        <div class="image">
                            @if($trip->photo)
                            <img src="{{asset('admin/pictures/trips/' . $trip->id .'/' .$trip->photo->Filename)}}" alt="Demo Image"/>
                            @endif
                        </div>
                        <div class="content">
                            <span class="location"><i class='bx bx-map' ></i>{{ $trip->name }}</span>
                            <h3>
                                <a href="destination-details.html">{{ $trip->name }}</a>
                            </h3>
                            {{-- <div class="review">
                                <i class='bx bx-smile'></i>
                                <span>8.5</span>
                                <span>Superb</span>
                            </div> --}}
                            <p>
                                {!! $trip->notes !!}
                            </p>
                            <hr>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>{{ DB::table('trips_days')->whereIn('trips_id',[$trip->id])->count('day_id') }}</li>
                           
                                <li>${{$trip->price_adult_EN}}</li>
                            </ul>
                        </div>
                        <div class="spacer"></div>
                    </div>
                </div>
                @endforeach
              
               
            </div>
            {{-- <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="pagination text-center">
                        <span class="page-numbers current" aria-current="page">1</span>
                        <a href="#" class="page-numbers">2</a>
                        <a href="#" class="page-numbers">3</a>
                        <a href="#" class="page-numbers">Next</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- end destination section -->
    <!-- start our tours section -->
    {{-- <section id="tours" class="tours-section tours-style-two ptb-100 bg-light">
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
    </section> --}}
    <!-- end our tour section -->
@endsection
@section('js')
@endsection
