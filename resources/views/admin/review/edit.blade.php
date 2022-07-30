@extends('admin.layout.master')
@section('title', 'Edit Review')
@section('css')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">Edit Review</h4>
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
                    <form action="{{route('update_review',$review->id)}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col">
                                <label>name AR</label>
                                <input type="text" name="name" class="form-control"
                                       value="{{$review->getTranslation('name','ar')}}">
                            </div>

                            <div class="col">
                                <label>name EN</label>
                                <input type="text" name="name_en" class="form-control"
                                       value="{{$review->getTranslation('name','en')}}">
                            </div>

                            <div class="col">
                                <label>name DE</label>
                                <input type="text" name="name_de" class="form-control"
                                       value="{{$review->getTranslation('name','de')}}">
                            </div>

                            <div class="col">
                                <label>name IT</label>
                                <input type="text" name="name_it" class="form-control"
                                       value="{{$review->getTranslation('name','it')}}">
                            </div>

                            <div class="col">
                                <label>name RU</label>
                                <input type="text" name="name_ru" class="form-control"
                                       value="{{$review->getTranslation('name','ru')}}">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>Link Review</label>
                                <input type="text" name="link" class="form-control @error('link') is-invalid @enderror"
                                       value="{{$review->link}}">
                            </div>
                        </div>
                        <br>
                        <img src="{{asset('upload/review/' . $review->image )}}" width="50" height="50"
                             class="rounded-circle" alt="...">
                        <br>
                        <div class="row">
                            <div class="col">
                                <input type="file" accept="image/*" name="filename">
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
