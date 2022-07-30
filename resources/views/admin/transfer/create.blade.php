@extends('admin.layout.master')
@section('title', 'Create transfer')
@section('css')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">Create transfer</h4>
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
                    <form action="{{route('transfer.store')}}" method="post" enctype="multipart/form-data">
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
                                <label>rate</label>
                                <input type="number" name="rate" required class="form-control">
                            </div>
                        </div>

                        <br>

                      

                        <br>


                        <div class="row">

                            <div class="col">
                                <label>Start Data</label>
                                <input type="date" name="start_date" required class="form-control @error('start_date') is-invalid @enderror">
                            </div>

                            <div class="col">
                                <label>End date</label>
                                <input type="date" name="end_date" required class="form-control @error('end_date') is-invalid @enderror">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                                <label>Route Form AR</label>
                                <input type="text" name="route_form" required
                                       class="form-control @error('route_form') is-invalid @enderror">
                            </div>

                            <div class="col">
                                <label>Route Form EN</label>
                                <input type="text" name="route_form_en" required
                                       class="form-control @error('route_form_en') is-invalid @enderror">
                            </div>

                            <div class="col">
                                <label>Route To AR</label>
                                <input type="text" name="route_to" required
                                       class="form-control @error('route_to') is-invalid @enderror">
                            </div>

                            <div class="col">
                                <label>Route To EN</label>
                                <input type="text" name="route_to_en" required
                                       class="form-control @error('route_to_en') is-invalid @enderror">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>Notes AR</label>
                                <textarea class="form-control" name="notes" rows="5" id="elm1"></textarea>
                            </div>
                        </div>


                        <br>


                        <div class="row">
                            <div class="col">
                                <label>Notes EN</label>
                                <textarea class="form-control" name="notes_en" rows="5" id="elm1"></textarea>
                            </div>
                        </div>

                        <br>


                        <div class="row">
                            <div class="col">
                                <label>Notes DE</label>
                                <textarea class="form-control" name="notes_de" rows="5" id="elm1"></textarea>
                            </div>
                        </div>



                        <br>


                        <div class="row">
                            <div class="col">
                                <label>Notes IT</label>
                                <textarea class="form-control" name="notes_it" rows="5" id="elm1"></textarea>
                            </div>
                        </div>


                        <br>


                        <div class="row">
                            <div class="col">
                                <label>Notes RU</label>
                                <textarea class="form-control" name="notes_ru" rows="5" id="elm1"></textarea>
                            </div>
                        </div>


                        <br>

                        <div class="row">
                            <div class="col">
                                <input type="file" accept="image/*" name="FilenameMany[]" multiple>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>Extra</label>
                                <select class="js-example-basic-multiple form-control" name="extra_id[]" multiple="multiple">
                                    @foreach($extras as  $extra)
                                        <option value="{{$extra->id}}">{{$extra->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col">
                                <label>cars</label>
                                <select class="js-example-basic-multiple form-control" name="car_id[]" multiple="multiple">
                                    @foreach($cars as  $car)
                                        <option value="{{$car->id}}">{{$car->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>destenations</label>
                                <select class="form-control" name="destenation_id" required>
                                    <option value="" disabled selected>-- Choose --</option>
                                    @foreach($destenations as $destenation)
                                        <option value="{{$destenation->id}}">{{$destenation->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <br>




                        <div class="row">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type" value="1" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        one way
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type" value="0" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        go & Back
                                    </label>
                                </div>
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
