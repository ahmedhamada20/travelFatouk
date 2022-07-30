@extends('admin.layout.master')
@section('title', 'Create team')
@section('css')
@endsection
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">Create team</h4>
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
                <form action="{{route('teams.store')}}" method="post" enctype="multipart/form-data">
                    @csrf



                    <div class="row">
                        <div class="col">
                            <label>name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                required>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <label>jop AR</label>
                            <input type="text" name="jop" class="form-control @error('name') is-invalid @enderror"
                                required>
                        </div>

                        <div class="col">
                            <label>jop En</label>
                            <input type="text" name="jop_en" class="form-control @error('jop_en') is-invalid @enderror"
                                required>
                        </div>


                        <div class="col">
                            <label>jop DE</label>
                            <input type="text" name="jop_de" class="form-control @error('jop_de') is-invalid @enderror"
                                required>
                        </div>


                        <div class="col">
                            <label>jop IT</label>
                            <input type="text" name="jop_it" class="form-control @error('jop_it') is-invalid @enderror"
                                required>
                        </div>


                        <div class="col">
                            <label>jop RU</label>
                            <input type="text" name="jop_ru" class="form-control @error('jop_ru') is-invalid @enderror"
                                required>
                        </div>
                    </div>


                    <br>


                    <div class="row">
                        <div class="col">
                            <label>facebook</label>
                            <input type="url" name="facebook" required class="form-control">
                        </div>
                        <div class="col">
                            <label>twitter</label>
                            <input type="url" name="twitter" required class="form-control">
                        </div>
                        <div class="col">
                            <label>instagram</label>
                            <input type="url" name="instagram" required class="form-control">
                        </div>
                        <div class="col">
                            <label>linkedin</label>
                            <input type="url" name="linkedin" required class="form-control">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <input type="file" accept="image/*" required name="filename">
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