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
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        @foreach($trip->photos as $slider)
                        <button type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"
                            aria-current="true" aria-label="Slide 1"></button>
                        @endforeach
                    </div>

                    <div class="carousel-inner">
                        @foreach($trip->photos as $slider)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <img src="{{asset('admin/pictures/trips/' . $trip->id .'/' .$slider->Filename)}}"
                                class="d-block w-100" alt="..." style="white-space: 100%;height: 400px">
                        </div>
                        @endforeach
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
            </div>
            <div class="col-md-8 mt-5">
                <h2>{{$trip->name}}</h2>
                <p>tours

                    @for($i=0;$i<5;$i++) @if($trip->rate > $i)
                        <i class='bx bxs-star'></i>
                        @else
                        <i class="simple-icon-star text-warning" aria-hidden="true"></i>
                        @endif
                        @endfor

                        {{$trip->destination->name}}</p>

                <h3>Over View</h3>
                <p>{!! $trip->notes !!}
                </p>
                <h3>What's Included</h3>
                <div class="row">
                    <div class="col-md-6">
                        @foreach($trip->included as $inclu)
                        <p><i class="fa-solid fa-check" style="color: green"></i> {{$inclu->name}}</p>
                        @endforeach
                    </div>
                    <div class="col-md-6">
                        @foreach($trip->excluded as $exl)
                        <p><i class="fa-solid fa-circle-xmark" style="color: red"></i> {{$exl->name}}</p>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6">
                    <p><i class="fa-solid fa-circle-xmark" style="color: red"></i> dsfsdfsdfsdfsdfsdfsdf</p>
                </div>
            </div>
            <h3>Please Note</h3>
            @foreach($trip->MoreDtails as $more)
            <p>{!! $more->notes !!}
            </p>
            @endforeach
            <h3>Additional Info</h3>
            <div class="row">
                @foreach($trip->additional as $addi)
                <div class="col-md-6">
                    <p><i class="fa-solid fa-circle-info"></i> {{$addi->name}}</p>
                </div>
                @endforeach
            </div>
            <h3>Cancellation Policy</h3>
            @foreach($trip->MoreDtails as $more)
            <p style="background-color: #d1d1d1; padding: 20px">{!! $more->Cancellation !!}
            </p>
            @endforeach
        </div>
        <div class="col-md-4 mt-5">
            <div class="card">
                <div class="card-body">
                    <h3>Price : 300</h3>
                    <form action="{{ route('information_trips') }}" method="POST">
                        @csrf

                       
                        <input type="hidden" value="{{ $trip->id }}" name="trips_id">

                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Select Date</label>
                                <input type="date" name="data" class="form-control" required name="data" id="">
                            </div>
                            <div class="col-md-12">
                                <label for="">Select Time</label>
                                <input type="time" name="time" class="form-control" required name="time" id="">
                            </div>
                            <div class="col-md-6">
                                <label for="">Adult</label>
                                <input type="number" class="form-control" name="adult_number" value="0" id="">
                            </div>
                            <div class="col-md-6">
                                <label for="">Child</label>
                                <input type="number" class="form-control" name="child_number" value="0" id="">
                            </div>
                            <div class="col-md-12">
                                <h3>Choose Extra</h3>
                                <div class="accordion accordion-flush" id="accordionFlushExample">

                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            Extra Name
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">

                                            <button class="btn btn-success">Price</button><br>
                                            <label for="">Quantity</label>
                                            <input type="number" name="" class="form-control" value="0" id="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 d-grid gap-2 mt-3">
                                <button type="submit" class="btn btn-primary">Book Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


@endsection
@section('js')
@endsection