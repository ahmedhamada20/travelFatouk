@extends('admin.layout.master')
@section('title', 'Edit destenation')
@section('css')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">Edit destenation</h4>
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
                    <form action="{{route('destenation.update','test')}}" method="post" enctype="multipart/form-data">
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
                                <textarea class="form-control" rows="5" name="note" id="elm1">
                                      {{$data->getTranslation('note','ar')}}
                                    </textarea>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>notes EN</label>
                                <textarea class="form-control" rows="5" name="note_en" id="elm1">
                                        {{$data->getTranslation('note','en')}}
                                    </textarea>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>notes DE</label>
                                <textarea class="form-control" rows="5" name="note_de" id="elm1">
                                        {{$data->getTranslation('note','de')}}
                                    </textarea>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>notes IT</label>
                                <textarea class="form-control" rows="5" name="note_it" id="elm1">
                                        {{$data->getTranslation('note','it')}}
                                    </textarea>
                            </div>
                        </div>


                        <br>

                        <div class="row">
                            <div class="col">
                                <label>notes RU</label>
                                <textarea class="form-control" rows="5" name="note_ru" id="elm1">
                                        {{$data->getTranslation('note','ru')}}
                                    </textarea>
                            </div>
                        </div>

                        <br>

                        @if($data->photo)
                            <img src="{{asset('admin/pictures/destenation/' . $data->id .'/' .$data->photo->Filename)}}" width="50" height="50" class="rounded-circle" alt="...">
                        @endif
                        <input type="hidden" name="oldfile" value="{{$data->photo->Filename ?? ''}}">

                        <div class="row">
                            <div class="col">
                                <input type="file" accept="image/*" name="filename">
                            </div>
                        </div>

                        <br>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
