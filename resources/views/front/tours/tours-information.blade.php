@extends('front.layout.master')
@section('title')
    Tour Information
@endsection
@section('css')
@endsection
@section('content')
    <!-- start page title area-->
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>Tour Information</h1>
                <ul>
                    <li class="item"><a href="{{route('home')}}">Home</a></li>
                    <li class="item"><a><i class='bx bx-chevrons-right'></i>Tour Information</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            @if($setting->photo)
                <img src="{{asset('admin/pictures/setting/' . $setting->id .'/' .$setting->photo->Filename)}}" alt="Demo Image">
            @endif
        </div>
    </div>
    <!-- start booking section -->
    <section class="booking-section ptb-100 bg-light">
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-8">
                    <div class="booking-form">
                        <form action="{{ route('cart_store') }}" method="post">
                            @csrf
                            <div class="content">
                                <h3>Personal Information</h3>

                                <input type="hidden" name="tripsOrderRequest" value="8">
                                <input type="hidden" name="trips_id" value="{{ $trip->id }}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name_user" class="form-control" required placeholder="Your Name" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name_phone" class="form-control" required placeholder="Your Phone" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="name_email" class="form-control" required placeholder="Your Email" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="Nationality" class="form-control" required placeholder="Country" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Tour Date</label>
                                            <input type="date" name="date" class="form-control" required placeholder="date" />
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Preferred Language</label>
                                            <select class="form-control p-1" name="status" >
                                                <option value="" disabled selected>-- Choose --</option>
                                                @foreach (App\Models\Prelang::all() as $row)
                                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="content">
                                <h3>Payment Information</h3>
                                <div class="payment-tabs">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a class="nav-link active" href="#tab-credit-card" data-bs-toggle="tab"> Cash Payment</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#tab-paypal" data-bs-toggle="tab">Online Payment</a></li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="tab-credit-card" class="tab-pane active">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="select-box">
                                                        <div class="col-lg-12">
                                                            <div class="checkbox">
                                                                <input type="checkbox" id="agreement" name="2">
                                                                <label for="agreement">Select Cash Payment</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="tab-paypal" class="tab-pane">
                                            <div class="paypal-text">
                                                <p>Cooming Soon</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="row align-items-start mb-30">
                                        <div class="col-lg-12">
                                            <div class="checkbox">
                                                <input type="checkbox" id="agreement" name="1">
                                                <label for="agreement">I agreed Jaunt <a href="terms-of-service.html">Terms of Services</a> and <a href="privacy-policy.html">Privacy Policy</a></label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn-primary">
                                        Confirm Booking
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside>
                        <div class="row align-items-center">
                            <div class="col-md-12 col-sm-12">
                                <div class="item-single mb-30">
                                    <div class="image">
                                        <img src="{{asset('admin/pictures/trips/' . $trip->id .'/' .$trip->photo->Filename)}}" alt="Demo Image">
                                    </div>
                                    <div class="content">
                                        <span class="location"><i class='bx bx-map' ></i>{{$trip->destination->name}}</span>
                                        <h3>
                                            <a >{{$trip->name}}</a>
                                        </h3>
                                        <div class="review">
                                            <i class='bx bx-smile'></i>
                                            @for($i=0;$i<5;$i++)
                                                @if($trip->rate > $i)
                                                    <i class='bx bxs-star'></i>
                                                @else
                                                    <i class="simple-icon-star text-warning" aria-hidden="true"></i>
                                                @endif
                                            @endfor
                                        </div>
                                        <p>
                                            {!! Str::limit($trip->notes , 50) !!}
                                        </p>
                                        <hr>
                                        <ul class="list">
                                            <li>{{$trip->price_adult_EG}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- end booking section -->
@endsection
@section('js')
@endsection
