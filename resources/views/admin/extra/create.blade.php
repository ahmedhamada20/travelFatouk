@extends('admin.layout.master')
@section('title', 'Create extra')
@section('css')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">Create extra</h4>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end page-title-box -->
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('extra.store')}}" method="post" enctype="multipart/form-data">
                        @csrf


                        <div class="row">
                            <div class="col">
                                <label>Name AR</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                       required>
                            </div>

                            <div class="col">
                                <label>Name En</label>
                                <input type="text" name="name_en"
                                       class="form-control @error('name_en') is-invalid @enderror" required>
                            </div>


                            <div class="col">
                                <label>Name DE</label>
                                <input type="text" name="name_de"
                                       class="form-control @error('name_de') is-invalid @enderror" required>
                            </div>


                            <div class="col">
                                <label>Name IT</label>
                                <input type="text" name="name_it"
                                       class="form-control @error('name_it') is-invalid @enderror" required>
                            </div>


                            <div class="col">
                                <label>Name RU</label>
                                <input type="text" name="name_ru"
                                       class="form-control @error('name_ru') is-invalid @enderror" required>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>Price Person EG</label>
                                <input type="text" name="price_person_eg" class="form-control">
                            </div>

                            <div class="col">
                                <label>Price Person EN</label>
                                <input type="text" name="price_person_en" class="form-control">
                            </div>




                            <div class="col">
                                <label>Price Group EG</label>
                                <input type="text" name="price_group_eg" class="form-control">
                            </div>


                            <div class="col">
                                <label>Price Group EN</label>
                                <input type="text" name="price_group_en" class="form-control">
                            </div>


                            <div class="col">
                                <label>Number Group</label>
                                <input type="text" name="number_group" class="form-control">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>icon</label>
                                <input type="text" name="icon" required
                                       class="form-control @error('icon') is-invalid @enderror">
                            </div>
                        </div>


                        <br>

                        <div class="row">
                            <div class="col">
                                <button class="btn btn-success">Save</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
