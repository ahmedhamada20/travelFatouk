@extends('front.layout.master')
@section('title')
    Invoice
@endsection
@section('css')
@endsection
@section('content')
    <!-- start page title area-->
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>Invoice</h1>
                <ul>
                    <li class="item"><a href="index.html">Home</a></li>
                    <li class="item"><a href="special-offers.html"><i class='bx bx-chevrons-right'></i>Invoice</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="assets/img/page-title-area/offer.jpg" alt="Demo Image">
        </div>
    </div>
    <!-- end page title area -->
    <section>
        <div class="container">
            <div class="row">
                <h3 class="text-center">Your Order Has ben Done</h3>
                <table class="table table-success table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tour Name</th>
                        <th scope="col">Adult</th>
                        <th scope="col">Child</th>
                        <th scope="col">Tour Date</th>
                        <th scope="col">Tour Extra</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>2</td>
                        <td>3</td>
                        <td>13/2/1988</td>
                        <td>
                            <ul>
                                <li>sameh</li>
                                <li>sameh</li>
                                <li>sameh</li>
                                <li>sameh</li>
                            </ul>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <p>This information has been sent to your mail</p>
            </div>
        </div>
    </section>

@endsection
@section('js')
@endsection
