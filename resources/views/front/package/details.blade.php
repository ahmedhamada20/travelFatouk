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
                    <h2>Tours Name</h2>
                    <p>tours type   rate destenation</p>

                    <h3>Over View</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                    </p>
                    <h3>What's Included</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p><i class="fa-solid fa-check" style="color: green"></i> asdasdasdadsasd</p>
                        </div>
                        <div class="col-md-6">
                            <p><i class="fa-solid fa-circle-xmark" style="color: red"></i> dsfsdfsdfsdfsdfsdfsdf</p>
                        </div>
                    </div>
                    <h3>Please Note</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                    </p>
                    <h3>Additional Info</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p><i class="fa-solid fa-circle-info"></i> assdasdasdasdasd</p>
                        </div>
                        <div class="col-md-6">
                            <p><i class="fa-solid fa-circle-info"></i> assdasdasdasdasd</p>
                        </div>
                    </div>
                    <h3>Cancellation Policy</h3>
                    <p style="background-color: #d1d1d1; padding: 20px">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                    </p>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h3>Price : 300</h3>
                            <form action="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Select Date</label>
                                        <input type="date" class="form-control" name=""  id="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Adult</label>
                                        <input type="number" class="form-control" name="" value="0" id="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Child</label>
                                        <input type="number" class="form-control" name="" value="0" id="">
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
                                                    <div class="accordion-body">
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                                        </p>
                                                        <button class="btn btn-success">Price</button><br>
                                                        <label for="">Quantity</label>
                                                        <input type="number" name="" class="form-control" value="0" id="">
                                                    </div>
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
