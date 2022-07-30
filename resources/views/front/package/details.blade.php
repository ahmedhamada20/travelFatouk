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
                <div class="col-md-12">

                </div>
                <div class="col-md-8 mt-5">
                    <h2>{{ $package->name }}</h2>
              
                    <p>
                        {!! $package->notes !!}
                    </p>

                    <h3>Included</h3>
                    <div class="row">
                        @foreach ($package->included as $include)
                        <div class="col-md-6">
                            <p><i class="fa-solid fa-check" style="color: green"></i> {{ $include->name }}</p>
                        </div>
                        @endforeach
                        
                    </div>

                   
                    <h3>excluded</h3>
                    <div class="row">
                        @foreach ($package->excluded as $exclude)
                        <div class="col-md-6">
                            <p><i class="fa-solid fa-circle-info"></i> {{ $exclude->name }}</p>
                        </div>
                        @endforeach
                      
                        
                    </div>

                    <h3>additional</h3>
                    <div class="row">
                        @foreach ($package->additional as $additional)
                        <div class="col-md-6">
                            <p><i class="fa-solid fa-circle-info"></i> {{ $additional->name }}</p>
                        </div>
                        @endforeach
                      
                        
                    </div>
                   
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h3>Price : {{ $package->price }}</h3>
                            <form action="{{ route('information_package') }}" method="POST">
                                @csrf

                                <input type="hidden" name="package_id" value="{{ $package->id }}">

                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Select Date</label>
                                        <input type="date" class="form-control" name="data"  id="">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Select time</label>
                                        <input type="time" class="form-control" name="time"  id="">
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
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                        Extra Name
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                    @foreach ($package->extras as $extra)
                                                    <div class="accordion-body">
                                                        <p>
                                                            {{ $extra->name }}
                                                        </p>
                                                        <button class="btn btn-success">Price :: {{ $extra->price_person_en }}</button><br>
                                                        <label for="">Quantity</label>
                                                        <input type="number" name="" class="form-control" value="0" id="">
                                                    </div>
                                                    @endforeach
                                                   
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
