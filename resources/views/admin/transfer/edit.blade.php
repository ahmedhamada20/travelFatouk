@extends('admin.layout.master')
@section('title', 'Edit transfer')
@section('css')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">Edit transfer :: {{$data->name}}</h4>
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
                    <form action="{{route('transfer.update','test')}}" method="post" enctype="multipart/form-data">
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
                                <label>rate</label>
                                <input type="number" name="rate" value="{{$data->rate}}" class="form-control">
                            </div>
                        </div>

                        <br>

                       

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>Start Data</label>
                                <input type="date" name="start_date" value="{{$data->start_date}}"
                                       class="form-control @error('start_date') is-invalid @enderror">
                            </div>

                            <div class="col">
                                <label>End date</label>
                                <input type="date" name="end_date" value="{{$data->end_date}}"
                                       class="form-control @error('end_date') is-invalid @enderror">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                                <label>Route Form</label>
                                <input type="text" name="route_form" value="{{$data->route_form}}"
                                       class="form-control @error('route_form') is-invalid @enderror">
                            </div>

                            <div class="col">
                                <label>Route To</label>
                                <input type="text" name="route_to" value="{{$data->route_to}}"
                                       class="form-control @error('route_to') is-invalid @enderror">
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

                        <div class="row">
                            <div class="col">
                                <label>Extra</label>
                                <select class="js-example-basic-multiple form-control" name="extra_id[]"
                                        multiple="multiple">
                                    @foreach($extras as  $extra)
                                        <option value="{{$extra->id}}" @foreach($data->extras as $row)
                                            {{$row->id == $extra->id ? 'selected' : ''}}
                                            @endforeach>{{$extra->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col">
                                <label>cars</label>
                                <select class="js-example-basic-multiple form-control" name="car_id[]"
                                        multiple="multiple">
                                    @foreach($cars as  $car)
                                        <option value="{{$car->id}}" @foreach($data->carsTransfer as $row)
                                            {{$row->id == $car->id ? 'selected' : ''}}
                                            @endforeach>{{$car->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                           
                        </div>



                        <br>

                        <div class="row">
                            <div class="col">
                                <label>destenations</label>
                                <select class="form-control" name="destenation_id" required>
                                    @foreach($destenations as $destenation)
                                        <option value="{{$destenation->id}}" {{$destenation->id == $data->destenation_id ? 'selected' : ''}}>{{$destenation->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type" value="1"
                                           {{($data->type == 1 ? ' checked' : '') }} id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        one way
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type" value="0"
                                           {{($data->type == 0 ? ' checked' : '') }} id="flexRadioDefault2">
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
