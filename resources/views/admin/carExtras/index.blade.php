@extends('admin.layout.master')
@section('title')
carExtras
@endsection

@section('css')

@endsection

@section('page_title')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> carExtras</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    <li class="breadcrumb-item"><a href="index.html" class="default-color">Rooms</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <form action="{{route('carExtras.store')}}" method="post">
                        @csrf
                        <input type="hidden" name="car_id" value="{{$car_id->id}}">


                        <div class="repeater">
                            <div data-repeater-list="List_carExtras">
                                <div data-repeater-item>

                                    <div class="row">

                                        <div class="col">
                                            <label>name</label>
                                            <input class="form-control" type="text" placeholder="name"
                                                   name="name" required value="{{old('code')}}">
                                        </div>

                                        <div class="col">
                                            <label>price</label>
                                            <input class="form-control" type="text" placeholder="price"
                                                   name="price" required value="{{old('price')}}">
                                        </div>



                                        <div class="col mt-4">
                                            <input class="btn btn-danger btn-block" data-repeater-delete
                                                   type="button" value="Deleted"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="row mt-20">
                                <div class="col-12">
                                    <input class="btn btn-info" data-repeater-create type="button" value="Add new"/>
                                </div>
                            </div>
                            <br>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                                <button class="btn btn-success">save</button>
                            </div>

                        </div>

                    </form>

                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered p-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>price</th>
                           
                                <th>action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $row)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->price}}</td>
                                   
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-outline-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                                                action
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit{{$row->id}}"><i class="fa fa-edit text-success mr-2"></i>Edit</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleted{{$row->id}}"><i class="fa fa-trash text-danger mr-2"></i>Deleted</a>
                                            </div>
                                        </div>
                                    </td>
                                    @include('admin.carExtras.edit')
                                    @include('admin.carExtras.deleted')
                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection


