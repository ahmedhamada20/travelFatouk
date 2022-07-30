@extends('front.layout.master')
@section('title')
    Transfer Search Result
@endsection
@section('css')
@endsection
@section('content')
    <!-- start page title area-->
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>Tours Search Result</h1>
                <ul>
                    <li class="item"><a href="{{route('home')}}">Home</a></li>
                    <li class="item"><a ><i class='bx bx-chevrons-right'></i>Search Result</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{asset('front/assets/img/page-title-area/tour.jpg')}}" alt="Demo Image">
        </div>
    </div>
    <!-- end page title area -->
    @foreach($transfers as $transfer)
        <section>
            <div class="container">
                <div class="col-md-12">
                    <div class="card w-100">
                        <div class="row">
                            <div class="col-4">
                                <a href=""><img src="{{asset('front/assets/img/car.jpg')}}" alt="" class="transfer-img" ></a>
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <a href="" class="tours-h"><h5 class="card-title tours-h">{{$transfer->name}}</h5></a>
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn-primary">{{$transfer->price_EN_go}}</button>
                                        </div>
                                    </div>

                                    <p class="card-text">
                                        {{Str::limit($transfer->notes,150)}}
                                    </p>
                                    <div class="row mb-3">
                                        <div class="col-md-6 text-black"><i class="fa-solid fa-route" style="color: #fd5056"></i><span style="font-weight: bold">{{trans('app.route_from')}}:</span>  {{$transfer->route_form}}</div>
                                        <div class="col-md-6 text-black"><i class="fa-solid fa-route" style="color: #fd5056"></i><span style="font-weight: bold"> {{trans('app.route_to')}} :</span>
                                            {{$transfer->route_to}}</div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4 text-black">
                                            <i class="fa-solid fa-angles-right" style="color: #fd5056"></i><span style="font-weight: bold"> {{trans('app.car_name')}} :</span>  {{$transfer->car_name}}
                                        </div>
                                        <div class="col-md-4 text-black">
                                            <i class="fa-solid fa-angles-right" style="color: #fd5056"></i><span style="font-weight: bold"> {{trans('app.car_type')}} :</span> {{$transfer->car_type}}
                                        </div>
                                        <div class="col-md-4 text-black">
                                            <i class="fa-solid fa-angles-right" style="color: #fd5056"></i> <span style="font-weight: bold">{{trans('app.car_model')}} :</span> {{$transfer->car_model}}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="accordion accordion-flush mb-2 col-md-6" id="accordionFlushExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                        <i class="fa-solid fa-bookmark"></i> {{trans('app.extra')}}
                                                    </button>
                                                </h2>
                                                @foreach($transfer->extras as $row)
                                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <form action="" method="post">
                                                                <div class="row">
                                                                    <div class="col-md-12 text-center">
                                                                        <h4>{{$row->name}}</h4>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </form>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="accordion accordion-flush mb-2 col-md-6" id="accordionFlushExample" >
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne1" aria-expanded="false" aria-controls="flush-collapseOne">
                                                        <i class="fa-solid fa-circle-info"></i> {{trans('app.more_info')}}
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseOne1" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        {!! $setting->description !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-grid gap-2">
                                        <a href="{{route('user_transfer_details',encrypt($transfer->id))}}" class="btn btn-primary">{{trans('app.book_now')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endsection
@section('js')
@endsection
