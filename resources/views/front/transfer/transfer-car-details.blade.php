@extends('front.layout.master')
@section('title')
Car Details
@endsection
@section('css')

@endsection

@section('content')

<!-- start page title area-->
<div class="page-title-area ptb-100">
    <div class="container">
        <div class="page-title-content">
            <h1>Car Details</h1>
            <ul>
                <li class="item"><a href="{{route('about')}}">Home</a></li>
                <li class="item"><a><i class='bx bx-chevrons-right'></i>Car Details</a></li>
            </ul>
        </div>
    </div>
    <div class="bg-image">
        <img src="{{asset('front/assets/img/page-title-area/about.jpg')}}" alt="Demo Image">
    </div>
</div>
<!-- end page title area -->

<!-- start about section -->

<section>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--Slider-->
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        @foreach($car->photos as $cars)
                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide-to="{{ $loop->index }}"
                                    class="{{ $loop->first ? 'active' : '' }}" aria-current="true"
                                    aria-label="Slide 1"></button>
                        @endforeach
                    </div>

                    <div class="carousel-inner">
                        @foreach($car->photos as $cars)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <img
                                    src="{{asset('admin/pictures/car/' . $car->id .'/' . $cars->Filename)}}"
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

            <div class="col-md-8 mt-5">

                <h3>Car Description</h3>
                <p>
                    {!! $car->notes !!}
                </p>
                <h3>Cancelation Policy</h3>
                <p style="background-color: #c5c5c5;padding: 20px">
                    {!! $car->conslshen !!}
                </p>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card">
                    <div class="card-body">
                        <p><i class="fa-solid fa-sign-hanging"></i> way Price            : {{$car->price}}</p>
                        <p><i class="fa-solid fa-signs-post"></i> return Price         : {{$car->price_back}}</p>
                        @foreach($car->carsTransfer as $carr)
                        <p><i class="fa-solid fa-crosshairs"></i> pickup location      :{{$carr->route_form}}</p>
                        <p><i class="fa-brands fa-dropbox"></i> Drop off location    :{{$carr->route_to}}</p>
                        @endforeach
                        <form action="{{route('information.store')}}" method="post">

                            @csrf



                            <input type="hidden" value="{{ $carr->id }}" name="transfer_id">
                            <input type="hidden" value="{{ $carr->route_form }}" name="route_form">
                            <input type="hidden" value="{{ $carr->route_to }}" name="route_to">

                            <input type="hidden" name="car_id" value="{{$car->id}}">


                            <div class="row">
                                <div class="col-md-6">
                                    <label for=""><i class="fa-solid fa-calendar-days"></i> Select Date</label>
                                    <input type="date" required class="form-control" name="data">
                                </div>
                                <div class="col-md-6">
                                    <label for=""><i class="fa-solid fa-clock"></i> Select Time</label>
                                    <input type="time" required class="form-control" name="time">
                                </div>
                                <div class="col-md-6">
                                    <label for=""><i class="fa-solid fa-clock"></i> Adult</label>
                                    <input type="number" required class="form-control" name="adult_number" value="1">
                                </div>
                                <div class="col-md-6">
                                    <label for=""><i class="fa-solid fa-clock"></i> Child</label>
                                    <input type="number" required class="form-control" name="child_number" value="0">
                                </div>
                                <div class="col-md-6">
                                    <label for=""><i class="fa-solid fa-suitcase-rolling"></i> Number of Bag's</label>
                                    <input type="number" required class="form-control" name="bage" value="0">
                                </div>
                                <div class="col-md-6">
                                    <label for=""><i class="fa-solid fa-signs-post"></i> Select Way</label>
                                    <select class="form-select" name="way_type" aria-label="Default select example">
                                        <option selected disabled>Select Way</option>
                                        <option value="One Way">One Way</option>
                                        <option value="Return">Return</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for=""><i class="fa-solid fa-plus"></i> Select Extra</label>
                                    <select class="form-select" name="extra[]"  aria-label="Default select example" multiple>
                                        @foreach($car->extra_car as $carextra)
                                        <option value="{{$carextra->name}}">{{$carextra->name}}</option>
                                        @endforeach
                                    </select>
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
        <br>
    </div>
</section>




@endsection
@section('js')
@endsection
