@extends('admin.layout.master')
@section('title', 'Edit team')
@section('css')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">Edit team</h4>
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
                    <form action="{{route('teams.update','test')}}" method="post" enctype="multipart/form-data">
                      @method('PUT')
                        @csrf

                        <input type="hidden" value="{{$data->id}}" name="id">



                        <div class="row">
                            <div class="col">
                                <label>name</label>
                                <input type="text" name="name" class="form-control"  value="{{$data->name}}">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <label>jop AR</label>
                                <input type="text" name="jop" class="form-control"
                                       value="{{$data->getTranslation('jop','ar')}}">
                            </div>

                            <div class="col">
                                <label>jop EN</label>
                                <input type="text" name="jop_en" class="form-control"
                                       value="{{$data->getTranslation('jop','en')}}">
                            </div>

                            <div class="col">
                                <label>jop DE</label>
                                <input type="text" name="jop_de" class="form-control"
                                       value="{{$data->getTranslation('jop','de')}}">
                            </div>

                            <div class="col">
                                <label>jop IT</label>
                                <input type="text" name="jop_it" class="form-control"
                                       value="{{$data->getTranslation('jop','it')}}">
                            </div>

                            <div class="col">
                                <label>jop RU</label>
                                <input type="text" name="jop_ru" class="form-control"
                                       value="{{$data->getTranslation('jop','ru')}}">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>facebook</label>
                                <input type="url" name="facebook" value="{{ $data->facebook }}" class="form-control">
                            </div>
                            <div class="col">
                                <label>twitter</label>
                                <input type="url" name="twitter" value="{{ $data->twitter }}" class="form-control">
                            </div>
                            <div class="col">
                                <label>instagram</label>
                                <input type="url" name="instagram" value="{{ $data->instagram }}" class="form-control">
                            </div>
                            <div class="col">
                                <label>linkedin</label>
                                <input type="url" name="linkedin" value="{{ $data->linkedin }}" class="form-control">
                            </div>
                        </div>

                        

                        <br>

                    



                        @if($data->photo)
                            <img src="{{asset('admin/pictures/team/' . $data->id .'/' .$data->photo->Filename)}}" width="50" height="50" class="rounded-circle" alt="...">
                        @endif
                        <input type="hidden" name="oldfile" value="{{$data->photo->Filename ?? ''}}">

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
