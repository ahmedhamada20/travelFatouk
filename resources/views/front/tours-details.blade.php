@extends('front.layout.master')
@section('title')
    Tours Details
@endsection
@section('css')
@endsection
@section('content')
    <!-- start page title area-->
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>Tours Details</h1>
                <ul>
                    <li class="item"><a href="{{route('home')}}">Home</a></li>
                    <li class="item"><a href=""><i class='bx bx-chevrons-right'></i>Tours Details</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="assets/img/page-title-area/destination-details.jpg" alt="Demo Image">
        </div>
    </div>
    <!-- end page title area -->

    <!-- start destination details section -->
    <section class="destinations-details-section pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>{{$trip->name}}</h2>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="destination-details-desc mb-30">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-sm-12">
                                <div class="image mb-30">
                                    <img src="{{asset('admin/pictures/trips/' . $trip->id .'/' .$trip->photo->Filename)}}" alt="Demo Image" />
                                </div>
                            </div>
                        </div>
                        <div class="content mb-20">
                            <h3>{{$trip->name}}</h3>
                            <p>
                                {{$trip->notes}}
                            </p>
                        </div>

                        <div class="info-content">
                            <h3 class="sub-title">Tour Extra</h3>
                            <div class="row">
                                @foreach($trip->extras as $row)
                                <div class="col-lg-6 col-md-6">
                                    <div class="content-list">
                                        <i class='bx bx-map-alt' ></i>
                                        <h6><span>{{$row->name}}</h6>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area">
                        <div class="widget widget-search mb-30">
                        </div>
                        <div class="widget widget-video mb-30">
                            <div class="video-image">
                                <img src="assets/img/video-bg3.jpg" alt="video" />
                            </div>
                            <a href="{{$setting->url}}" class="youtube-popup video-btn">
                                <i class='bx bx-right-arrow'></i>
                            </a>
                        </div>
                        <div class="widget widget-article mb-30">
                            <h3 class="sub-title">{{trans('app.destination')}}</h3>
                            @foreach($destinations as $destination)
                            <article class="article-item">
                                <div class="image">
                                    <img src="{{asset('front/assets/img/destination6.jpg')}}" alt="Demo Image"/>
                                </div>
                                <div class="content">
                                    <span class="location"><i class='bx bx-map' ></i>{{$destination->name}}</span>
                                    <h3>
                                        <a href="destination-details.html">{{$destination->name}}.</a>
                                    </h3>
                                </div>
                            </article>
                            @endforeach
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- end blog details section -->
@endsection
@section('js')
@endsection
