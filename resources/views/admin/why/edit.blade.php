@extends('admin.layout.master')
@section('title', 'Edit Why Choose')
@section('css')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">Edit Why Choose</h4>
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
                    <form action="{{route('update_why',$why->id)}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col">
                                <label>name AR</label>
                                <input type="text" name="name" class="form-control" value="{{$why->getTranslation('name','ar')}}">
                            </div>

                            <div class="col">
                                <label>name EN</label>
                                <input type="text" name="name_en" class="form-control" value="{{$why->getTranslation('name','en')}}">
                            </div>

                            <div class="col">
                                <label>name DE</label>
                                <input type="text" name="name_de" class="form-control" value="{{$why->getTranslation('name','de')}}">
                            </div>

                            <div class="col">
                                <label>name IT</label>
                                <input type="text" name="name_it" class="form-control" value="{{$why->getTranslation('name','it')}}">
                            </div>

                            <div class="col">
                                <label>name RU</label>
                                <input type="text" name="name_ru" class="form-control" value="{{$why->getTranslation('name','ru')}}">
                            </div>
                        </div>

                        <br>


                        <div class="row">
                            <div class="col">
                                <label>notes AR</label>
                                <textarea class="form-control" rows="5" name="notes" id="elm1">
                                  {{$why->getTranslation('notes','ar')}}
                                </textarea>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>notes EN</label>
                                <textarea class="form-control" rows="5" name="notes_en" id="elm1">
                                    {{$why->getTranslation('notes','en')}}
                                </textarea>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>notes DE</label>
                                <textarea class="form-control" rows="5" name="notes_de" id="elm1">
                                    {{$why->getTranslation('notes','de')}}
                                </textarea>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>notes IT</label>
                                <textarea class="form-control" rows="5" name="notes_it" id="elm1">
                                    {{$why->getTranslation('notes','it')}}
                                </textarea>
                            </div>
                        </div>


                        <br>

                        <div class="row">
                            <div class="col">
                                <label>notes RU</label>
                                <textarea class="form-control" rows="5" name="notes_ru" id="elm1">
                                    {{$why->getTranslation('notes','ru')}}
                                </textarea>
                            </div>
                        </div>

                        <br>




                        <br>
                        <img src="{{asset('upload/why/' . $why->image )}}" width="50" height="50" class="rounded-circle" alt="...">
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
