@extends('admin.layout.master')
@section('title', 'All car')
@section('css')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">All car</h4>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end page-title-box -->
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <a href="{{route('car.create')}}" class="btn btn-success btn-sm">Add new car</a>
                </div>
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap text-center"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>price</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $row)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->price}}</td>
                               
                                <td>


                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                         Action
                                        </button>
                                        <div class="dropdown-menu">
                                          <a href="{{route('car.edit', $row->id)}}" class="dropdown-item"><i class="fa fa-edit text-success mr-2"></i> Edit</a>
                                          <a href="{{route('carExtras.show', $row->id)}}" class="dropdown-item"><i class="fa fa-yandex text-success mr-2"></i> car Extras</a>
                                          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleted{{$row->id}}"><i class="fa fa-trash text-danger mr-2"></i> Deleted</a>
                                          <a class="dropdown-item" href="{{route('car.show', $row->id)}}"><i class="fa fa-eye text-info mr-2"></i>Show</a>

                                        </div>
                                      </div>
                                </td>
                                @include('admin.car.deleted')
                             
                            </tr>
                            <!-- Modal -->
                        @endforeach
                        </tbody>
                    </table>
                    {{ $data->render("pagination::bootstrap-4") }}
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@section('js')

@endsection
