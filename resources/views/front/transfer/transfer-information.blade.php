@extends('front.layout.master')
@section('title')
    Book Information
@endsection
@section('css')

@endsection

@section('content')

    <!-- start page title area-->
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>Book Information</h1>
                <ul>
                    <li class="item"><a href="{{route('about')}}">Home</a></li>
                    <li class="item"><a><i class='bx bx-chevrons-right'></i>Book Information</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{asset('front/assets/img/page-title-area/about.jpg')}}" alt="Demo Image">
        </div>
    </div>
    <!-- end page title area -->
    <!-- start booking section -->
    <section class="booking-section ptb-100 bg-light">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3 style="font-weight: bold">Your Information</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('cart_store') }}" method="post">
                        @csrf
                        <input type="hidden" name="transferOrderRequest" value="3">
                        <input type="hidden" name="car_id" value="{{ $car->id }}">
                        <input type="hidden" name="transfer_id" value="{{ $transfers->id }}">
                        {{-- <input type="hidden" name="trips_id" value="{{ $trip->id }}"> --}}
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Your Name</label>
                                    <input type="text" class="form-control" required name="name_user" placeholder="Your Name"
                                        required style="border: 1px solid;padding-bottom: 1.5rem">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Your Email</label>
                                    <input type="email" class="form-control"  name="name_email" placeholder="Your Email"
                                        required style="border: 1px solid;padding-bottom: 1.5rem">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Your Phone</label>
                                    <input type="number" class="form-control" name="name_phone" placeholder="Your Phone"
                                        required style="border: 1px solid;padding-bottom: 1.5rem">
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="form-group">
                                    <label for="">country code</label>
                                    <input type="number" class="form-control" name="country_code" placeholder="country code"
                                        required style="border: 1px solid;padding-bottom: 1.5rem">
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Nationality</label>
                                    <input type="text" class="form-control" name="Nationality" placeholder="Nationality"
                                        required style="border: 1px solid;padding-bottom: 1.5rem">
                                </div>
                            </div>
                            
                          
    
    
                        </div>
                        <hr>
                        <div class="row">
                            <h3>Operation Information</h3>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Your Hotel Name</label>
                                    <input type="text" class="form-control" name="user_airline"
                                        placeholder="Your Hotel Name" required
                                        style="border: 1px solid;padding-bottom: 1.5rem">
                                </div>
                            </div>
    
                            <div class="col">
                                <label>Adulte</label>
                                <input class="form-control" type="number" name="adulte" value="0" style="border:1px solid">
                            </div>
                            <div class="col">
                                <label>Chiled</label>
                                <input class="form-control" type="number" name="chiled" value="0" style="border:1px solid">
                            </div>
                            <div class="col">
                                <label>Date</label>
                                <input class="form-control" type="date" name="date" value="0" style="border:1px solid">
                            </div>
                            <div class="col">
                                <label>Time</label>
                                <input class="form-control" type="time" name="time" value="0" style="border:1px solid">
                            </div>
    
                        </div>
                        <div class="col-md-12 mt-3">
                            <button type="submit" class="btn btn-primary">Submit Information</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end booking section -->

@endsection
@section('js')
@endsection
