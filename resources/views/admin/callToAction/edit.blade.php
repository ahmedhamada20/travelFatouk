@extends('admin.layout.master')
@section('title', 'Edit callToAction')
@section('css')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">Edit callToAction :: {{$data->name}}</h4>
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
                    <form action="{{route('callToAction.update','test')}}" method="post" enctype="multipart/form-data">
                       @method('PUT')
                        @csrf


                        <input type="hidden" name="id" value="{{$data->id}}">


                        <div class="row">
                            <div class="col">
                                <label>name AR</label>
                                <input type="text" name="name" class="form-control"
                                       value="{{$data->getTranslation('name','ar')}}">
                            </div>

                            <div class="col">
                                <label>name EN</label>
                                <input type="text" name="name_en" class="form-control"
                                       value="{{$data->getTranslation('name','en')}}">
                            </div>

                            <div class="col">
                                <label>name DE</label>
                                <input type="text" name="name_de" class="form-control"
                                       value="{{$data->getTranslation('name','de')}}">
                            </div>

                            <div class="col">
                                <label>name IT</label>
                                <input type="text" name="name_it" class="form-control"
                                       value="{{$data->getTranslation('name','it')}}">
                            </div>

                            <div class="col">
                                <label>name RU</label>
                                <input type="text" name="name_ru" class="form-control"
                                       value="{{$data->getTranslation('name','ru')}}">
                            </div>
                        </div>

                        <br>


                        <div class="row">
                            <div class="col">
                                <label>notes AR</label>
                                <textarea class="form-control" rows="5" name="notes" id="elm1">
                                  {{$data->getTranslation('notes','ar')}}
                                </textarea>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>notes EN</label>
                                <textarea class="form-control" rows="5" name="notes_en" id="elm1">
                                    {{$data->getTranslation('notes','en')}}
                                </textarea>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>notes DE</label>
                                <textarea class="form-control" rows="5" name="notes_de" id="elm1">
                                    {{$data->getTranslation('notes','de')}}
                                </textarea>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>notes IT</label>
                                <textarea class="form-control" rows="5" name="notes_it" id="elm1">
                                    {{$data->getTranslation('notes','it')}}
                                </textarea>
                            </div>
                        </div>


                        <br>

                        <div class="row">
                            <div class="col">
                                <label>notes RU</label>
                                <textarea class="form-control" rows="5" name="notes_ru" id="elm1">
                                    {{$data->getTranslation('notes','ru')}}
                                </textarea>
                            </div>
                        </div>

                        <br>

                        <br>
                        <div class="row">
                            <div class="col">
                                <label>icon</label>
                                <input type="text" name="icon" value="{{$data->icon}}" class="form-control">
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
