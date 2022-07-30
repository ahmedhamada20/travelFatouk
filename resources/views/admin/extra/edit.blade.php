@extends('admin.layout.master')
@section('title', 'Edit extra')
@section('css')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">Edit extra</h4>
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
                    <form action="{{route('extra.update','test')}}" method="post" enctype="multipart/form-data">
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
                                <label>Price Person EG</label>
                                <input type="text" name="price_person_eg" class="form-control" value="{{$data->price_person_eg}}">
                            </div>

                            <div class="col">
                                <label>Price Person EN</label>
                                <input type="text" name="price_person_en" class="form-control" value="{{$data->price_person_en}}">
                            </div>

                            <div class="col">
                                <label>Price Group</label>
                                <input type="text" name="price_group" class="form-control" value="{{$data->price_group}}">
                            </div>


                            <div class="col">
                                <label>Price Group EG</label>
                                <input type="text" name="price_group_eg" class="form-control" value="{{$data->price_group_eg}}">
                            </div>

                            <div class="col">
                                <label>Price Group EN</label>
                                <input type="text" name="price_group_en" class="form-control" value="{{$data->price_group_en}}">
                            </div>




                            <div class="col">
                                <label>Number Group</label>
                                <input type="text" name="number_group" class="form-control" value="{{$data->number_group}}">
                            </div>

                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>icon</label>
                                <input type="text" name="icon" value="{{$data->icon}}" class="form-control @error('icon') is-invalid @enderror">
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
