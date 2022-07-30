@extends('admin.layout.master')
@section('title', 'Create ourParten')
@section('css')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">Create ourParten</h4>
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
                    <form action="{{route('ourParten.store')}}" method="post" enctype="multipart/form-data">
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
                                <label>Link ourParten </label>
                                <input type="text" name="link" class="form-control @error('link') is-invalid @enderror"
                                       required>
                            </div>
                        </div>


                        <br>

                        <div class="row">
                            <div class="col">
                                <input type="file" required accept="image/*" name="filename">
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
