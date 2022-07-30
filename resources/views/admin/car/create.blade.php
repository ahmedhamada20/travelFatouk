@extends('admin.layout.master')
@section('title', 'Create car')
@section('css')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">Create car</h4>
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
                    <form action="{{route('car.store')}}" method="post" enctype="multipart/form-data">
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
                                <label>Price</label>
                                <input type="number" name="price" required
                                       class="form-control @error('price') is-invalid @enderror">
                            </div>
                            <div class="col">
                                <label>price_back</label>
                                <input type="number" name="price_back" required
                                       class="form-control @error('price_back') is-invalid @enderror">
                            </div>
                            <div class="col">
                                <label>car type</label>
                                <input type="text" name="car_type" required
                                       class="form-control @error('car_type') is-invalid @enderror">
                            </div>
                            <div class="col">
                                <label>car model</label>
                                <input type="text" name="car_model" required
                                       class="form-control @error('car_model') is-invalid @enderror">
                            </div>
                        </div>

                {{--  --}}






                <br>

                <div class="row">
                    <div class="col">
                        <label>conslshen AR</label>
                        <textarea class="form-control" name="conslshen" rows="5" id="elm1"></textarea>
                    </div>
                </div>


                <br>


                <div class="row">
                    <div class="col">
                        <label>conslshen EN</label>
                        <textarea class="form-control" name="conslshen_en" rows="5" id="elm1"></textarea>
                    </div>
                </div>

                <br>


                <div class="row">
                    <div class="col">
                        <label>conslshen DE</label>
                        <textarea class="form-control" name="conslshen_de" rows="5" id="elm1"></textarea>
                    </div>
                </div>



                <br>


                <div class="row">
                    <div class="col">
                        <label>conslshen IT</label>
                        <textarea class="form-control" name="conslshen_it" rows="5" id="elm1"></textarea>
                    </div>
                </div>


                <br>


                <div class="row">
                    <div class="col">
                        <label>conslshen RU</label>
                        <textarea class="form-control" name="conslshen_ru" rows="5" id="elm1"></textarea>
                    </div>
                </div>








                        {{--  --}}

                      
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
