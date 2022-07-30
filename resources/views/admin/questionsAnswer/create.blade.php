@extends('admin.layout.master')
@section('title', 'Create questionsAnswer')
@section('css')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">Create questionsAnswer</h4>
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
                    <form action="{{route('questionsAnswer.store')}}" method="post" enctype="multipart/form-data">
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
