@extends('admin.layout.master')
@section('title', 'Testmeiol')
@section('css')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">Dashboard</h4>
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
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Add Testmeiol
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content modal-lg">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New Testmeiol</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{route('store_testmeniol')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Photo</label>
                                                <input type="file" accept="image/*" name="image" required>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label>Name En</label>
                                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required>
                                            </div>


                                            <div class="col-md-6 mb-3">
                                                <label>Name Ar</label>
                                                <input type="text" name="name_ar" class="form-control @error('name_en') is-invalid @enderror" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label>Name de</label>
                                                <input type="text" name="name_de" class="form-control @error('name_de') is-invalid @enderror" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label>Name it</label>
                                                <input type="text" name="name_it" class="form-control @error('name_it') is-invalid @enderror" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label>Name ru</label>
                                                <input type="text" name="name_ru" class="form-control @error('name_ru') is-invalid @enderror" required>
                                            </div>


                                            <!--Job-->
                                            <div class="col-md-12 mb-3">
                                                <label>job En</label>
                                                <input type="text" name="job" class="form-control @error('job') is-invalid @enderror" required>
                                            </div>


                                            <div class="col-md-6 mb-3">
                                                <label>job ar</label>
                                                <input type="text" name="job_ar" class="form-control @error('job_ar') is-invalid @enderror" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label>job de</label>
                                                <input type="text" name="job_de" class="form-control @error('job_de') is-invalid @enderror" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label>job it</label>
                                                <input type="text" name="job_it" class="form-control @error('job_it') is-invalid @enderror" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label>job ru</label>
                                                <input type="text" name="job_ru" class="form-control @error('job_ru') is-invalid @enderror" required>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label>Stars</label>
                                                <input type="text" name="rate" class="form-control @error('job_ru') is-invalid @enderror" required>
                                            </div>
                                            <!-- End Job-->
                                            <div class="col-md-12 mb-3">
                                                <label>notes EN</label>
                                                <textarea class="form-control" name="notes" rows="2"></textarea>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label>notes AR</label>
                                                <textarea class="form-control" name="notes_ar" rows="2"></textarea>
                                            </div>


                                            <div class="col-md-12 mb-3">
                                                <label>notes DE</label>
                                                <textarea class="form-control" name="notes_de" rows="2"></textarea>
                                            </div>


                                            <div class="col-md-12 mb-3">
                                                <label>notes IT</label>
                                                <textarea class="form-control" name="notes_it" rows="2"></textarea>
                                            </div>


                                            <div class="col-md-12 mb-3">
                                                <label>notes RU</label>
                                                <textarea class="form-control" name="notes_ru" rows="2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                        </button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap text-center"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>job</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($tests as $test)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img src="{{asset('upload/testmeniol/'.$test->image)}}" alt=""
                                         style="width: 50px; height: 50px;border-radius: 50%"></td>
                                <td>{{$test->name}}</td>
                                <td>{{$test->job}}</td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#exampleModal{{$test->id}}">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{$test->id}}" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Tetmeniol</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('update_testmeniol',$test->id)}}" method="post"
                                                          enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="col-md-12">
                                                                <label>Photo</label>
                                                                <input type="file" accept="image/*" name="image">
                                                            </div>
                                                            <img src="{{asset('upload/testmeniol/'.$test->image)}}" alt="" style="width: 100%; height: 200px;">
6
                                                            <div class="col-md-12 mb-3">
                                                                <label>Name En</label>
                                                                <input type="text" name="name"
                                                                       class="form-control @error('name') is-invalid @enderror"
                                                                       value="{{$test->name}}">
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <label>Name Ar</label>
                                                                <input type="text" name="name_ar"
                                                                       class="form-control @error('name') is-invalid @enderror"
                                                                       value="{{$test->getTranslation('name','ar')}}">
                                                            </div>


                                                            <div class="col-md-6 mb-3">
                                                                <label>Name DE</label>
                                                                <input type="text" name="name_de"
                                                                       class="form-control @error('name_de') is-invalid @enderror"
                                                                       value="{{$test->getTranslation('name','de')}}">
                                                            </div>


                                                            <div class="col-md-6 mb-3">
                                                                <label>Name IT</label>
                                                                <input type="text" name="name_it"
                                                                       class="form-control @error('name_it') is-invalid @enderror"
                                                                       value="{{$test->getTranslation('name','it')}}">
                                                            </div>


                                                            <div class="col-md-6 mb-3">
                                                                <label>Name RU</label>
                                                                <input type="text" name="name_ru"
                                                                       class="form-control @error('name_ru') is-invalid @enderror"
                                                                       value="{{$test->getTranslation('name','ru')}}">
                                                            </div>

                                                            <!--Job-->

                                                            <div class="col-md-12 mb-3">
                                                                <label>job EN</label>
                                                                <input type="text" name="job"
                                                                       class="form-control @error('job') is-invalid @enderror"
                                                                       value="{{$test->job}}">
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <label>job ar</label>
                                                                <input type="text" name="job_ar"
                                                                       class="form-control @error('job') is-invalid @enderror"
                                                                       value="{{$test->getTranslation('job','ar')}}">
                                                            </div>


                                                            <div class="col-md-6 mb-3">
                                                                <label>job DE</label>
                                                                <input type="text" name="job_de"
                                                                       class="form-control @error('job_de') is-invalid @enderror"
                                                                       value="{{$test->getTranslation('job','de')}}">
                                                            </div>


                                                            <div class="col-md-6 mb-3">
                                                                <label>job IT</label>
                                                                <input type="text" name="job_it"
                                                                       class="form-control @error('job_it') is-invalid @enderror"
                                                                       value="{{$test->getTranslation('job','it')}}">
                                                            </div>


                                                            <div class="col-md-6 mb-3">
                                                                <label>job RU</label>
                                                                <input type="text" name="job_ru"
                                                                       class="form-control @error('job_ru') is-invalid @enderror"
                                                                       value="{{$test->getTranslation('job','ru')}}">
                                                            </div>



                                                            <!--end Job-->





                                                            <div class="col-md-12 mb-3">
                                                                <label>notes En</label>
                                                                <textarea class="form-control" name="notes" rows="2">
                                                                    {{$test->notes}}
                                                                </textarea>
                                                            </div>

                                                            <div class="col-md-12 mb-3">
                                                                <label>notes Ar</label>
                                                                <textarea class="form-control" name="notes_ar" rows="2">
                                                                     {{$test->getTranslation('notes','ar')}}
                                                                </textarea>
                                                            </div>

                                                            <div class="col-md-12 mb-3">
                                                                <label>notes DE</label>
                                                                <textarea class="form-control" name="notes_de" rows="2">
                                                                     {{$test->getTranslation('notes','de')}}
                                                                </textarea>
                                                            </div>


                                                            <div class="col-md-12 mb-3">
                                                                <label>notes IT</label>
                                                                <textarea class="form-control" name="notes_it" rows="2">
                                                                     {{$test->getTranslation('notes','it')}}
                                                                </textarea>
                                                            </div>


                                                            <div class="col-md-12 mb-3">
                                                                <label>notes RU</label>
                                                                <textarea class="form-control" name="notes_ru" rows="2">
                                                                     {{$test->getTranslation('notes','ru')}}
                                                                </textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close
                                                            </button>
                                                            <button type="submit" class="btn btn-primary">Save changes
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn btn-sm btn-danger" href="{{route('delete_testmeniol',$test->id )}}"><i
                                            class="fa fa-trash"></i></a>
                                </td>

                            </tr>
                            <!-- Modal -->
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@section('js')
@endsection
