@extends('front.layout.master')
@section('title')
    {{trans('app.transfer')}}
@endsection
@section('css')
@endsection
@section('content')
    <!-- start page title area-->
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>{{trans('app.transfer')}}</h1>
                <ul>
                    <li class="item"><a href="{{route('home')}}">{{trans('app.home')}}</a></li>
                    <li class="item"><a ><i class='bx bx-chevrons-right'></i>{{trans('app.transfer')}}</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
                    @if($setting->photo)
        <img src="{{asset('upload/image_transfer/' .$setting->image_transfer)}}" alt="Demo Image">
        @endif
        </div>
    </div>
    <!-- end page title area -->
    @foreach($transfers as $transfer)
        <section>
            <div class="container mt-5">
             
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
                                                @foreach($transfer->photos as $key => $transfers)
                                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                                            data-bs-slide-to="{{ $loop->index }}"
                                                            class="{{$key == 0 ? 'active' : '' }}" aria-current="true"
                                                            aria-label="Slide 1"></button>
                                                @endforeach
                                            </div>
            
                                            <div class="carousel-inner">
                                                @foreach($transfer->photos as $key => $transfers)
                                                    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                                        <img
                                                            src="{{asset('admin/pictures/transfer/' . $transfer->id .'/' .$transfers->Filename)}}"
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
                                            <p class="h5">{{$transfer->destenation->name}}</p>
                                        </div>
                                        <div class="col-md-4 col-6  ps-30 my-4">
                                            <p class="text-muted">Pickup Loacation</p>
                                            <p class="h5 m-0">{{$transfer->route_form}}</p>
                                        </div>
                                        <div class="col-md-4 col-6 ps-30 my-4">
                                            <p class="text-muted">Drop off </p>
                                            <p class="h5 m-0">{{$transfer->route_to}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 p-0 ps-lg-4">
                                <div class="row m-0">
                                    <div class="col-12 px-4">
                                        <div class="d-flex align-items-end mt-4 mb-2">
                                            <p class="h4 mb-3"><span class="pe-1">{{$transfer->name}}</span></p>
                                        </div>
                                    </div>
                                    <div class="col-12 px-0">
                                        <p>{!! $transfer->notes !!}
                                        </p>
                                        <div class="row m-0">
                                            <div class="col-12  mb-4 p-0">
                                                <div class="btn btn-primary"><a href="{{route('transfer_car',encrypt($transfer->id) )}}" style="text-decoration: none;color: white"> Choose Car <span class="fas fa-arrow-right ps-2"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
               
            </div>

        </section>
        @endforeach

@endsection
@section('js')
@endsection
