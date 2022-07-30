@extends('admin.layout.master')
@section('title', 'setting')
@section('css')
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0">setting</h4>
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
                    <form action="{{route('setting.update','test')}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <input type="hidden" name="id" value="{{$data->id}}">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="logo">
                                    <label class="custom-file-label" for="customFile">Choose logo</label>
                                </div>
                                <img  src="{{asset('upload/setting/'.$data->logo)}}" alt="" style="width: 100%; height: 100px;margin-bottom: 20px;margin-top: 10px;background-color: #0b2e13">
                            </div>

                            <div class="col-md-6">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="footer_image">
                                    <label class="custom-file-label" for="customFile">Choose footer_image</label>
                                </div>
                                <img  src="{{asset('upload/footer_image/'.$data->footer_image)}}" alt="" style="width: 100%; height: 100px;margin-bottom: 20px;margin-top: 10px;background-color: #0b2e13">
                            </div>

                            <div class="col-md-6">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="transfer_image">
                                    <label class="custom-file-label" for="customFile">Choose transfer_image</label>
                                </div>
                                <img  src="{{asset('upload/transfer_image/'.$data->transfer_image)}}" alt="" style="width: 100%; height: 100px;margin-bottom: 20px;margin-top: 10px;background-color: #0b2e13">
                            </div>

                            <div class="col-md-6">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="footer_logo">
                                    <label class="custom-file-label" for="customFile">Choose footer_logo</label>
                                </div>
                                <img  src="{{asset('upload/footer_logo/'.$data->footer_logo)}}" alt="" style="width: 100%; height: 100px;margin-bottom: 20px;margin-top: 10px;background-color: #0b2e13">
                            </div>
                            <div class="col-md-6">
                                <label  for=""> footer_image_link</label>
                                <input type="text" class="form-control"  name="footer_image_link" value="{{$data->footer_image_link}}">
                            </div>

                        </div>

                        <br>
                        <div class="row">
                            <div class="col">
                                <label>name AR</label>
                                <input type="text" name="name" class="form-control" value="{{$data->getTranslation('name','ar')}}">
                            </div>

                            <div class="col">
                                <label>name EN</label>
                                <input type="text" name="name_en" class="form-control" value="{{$data->getTranslation('name','en')}}">
                            </div>

                            <div class="col">
                                <label>name DE</label>
                                <input type="text" name="name_de" class="form-control" value="{{$data->getTranslation('name','de')}}">
                            </div>

                            <div class="col">
                                <label>name IT</label>
                                <input type="text" name="name_it" class="form-control" value="{{$data->getTranslation('name','it')}}">
                            </div>

                            <div class="col">
                                <label>name RU</label>
                                <input type="text" name="name_ru" class="form-control" value="{{$data->getTranslation('name','ru')}}">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>phone</label>
                                <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                            </div>

                            <div class="col">
                                <label>Fax</label>
                                <input type="text" name="Fax" value="{{$data->Fax}}" class="form-control">
                            </div>

                            <div class="col">
                                <label>url</label>
                                <input type="text" name="url" value="{{$data->url}}" class="form-control">
                            </div>

                            <div class="col">
                                <label>email</label>
                                <input type="email" name="email" value="{{$data->email}}" class="form-control">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>address</label>
                                <input type="text" name="address" value="{{$data->address}}" class="form-control">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>facebook</label>
                                <input type="url" name="facebook" value="{{$data->facebook}}" class="form-control">
                            </div>


                            <div class="col">
                                <label>twitter</label>
                                <input type="url" name="twitter" value="{{$data->twitter}}" class="form-control">
                            </div>


                            <div class="col">
                                <label>instagram</label>
                                <input type="url" name="instagram" value="{{$data->instagram}}" class="form-control">
                            </div>

                            <div class="col">
                                <label>YouTube</label>
                                <input type="url" name="YouTube" value="{{$data->YouTube}}" class="form-control">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>SEO</label>
                                <input type="text" name="seo" class="form-control" value="{{$data->seo ?? ''}}"  data-role="tagsinput"/>
                            </div>
                        </div>


                        <br>


                        <div class="row">
                            <div class="col">
                                <label>notes AR</label>
                                <textarea  class="form-control" rows="5" name="notes" id="elm1">
                                  {{$data->getTranslation('notes','ar')}}
                                </textarea>
                            </div>

                            <div class="col">
                                <label>notes EN</label>
                                <textarea  class="form-control" rows="5" name="notes_en" id="elm1">
                                    {{$data->getTranslation('notes','en')}}
                                </textarea>
                            </div>

                            <div class="col">
                                <label>notes DE</label>
                                <textarea  class="form-control" rows="5" name="notes_de" id="elm1">
                                    {{$data->getTranslation('notes','de')}}
                                </textarea>
                            </div>

                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label>notes IT</label>
                                <textarea  class="form-control" rows="5" name="notes_it" id="elm1">
                                    {{$data->getTranslation('notes','it')}}
                                </textarea>
                            </div>

                            <div class="col">
                                <label>notes RU</label>
                                <textarea  class="form-control" rows="5" name="notes_ru" id="elm1">
                                    {{$data->getTranslation('notes','ru')}}
                                </textarea>
                            </div>


                        </div>


                        <br>

                        <div class="row">
                            <div class="col">
                                <label>Transfer More Info</label>
                                <textarea class="form-control" name="description" rows="5" id="elm1">
                                        {{$data->getTranslation('description','ar')}}
                                </textarea>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label>Transfer More Info AR</label>
                                <textarea class="form-control" name="description_en" rows="5" id="elm1">
                                    {{$data->getTranslation('description','en')}}
                                </textarea>
                            </div>
                        </div>
                        <br>



                        @if($data->photo)
                            <img src="{{asset('admin/pictures/setting/' . $data->id .'/' .$data->photo->Filename)}}" width="50" height="50" alt="">
                        @endif

                        <div class="row">
                            <div class="col">
                                <input type="file" name="filename" accept="image/*">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-success">Update</button>
                            </div>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src='https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js'></script>

    <script>
        $(function () {
            $('input').on('change', function (event) {

                var $element = $(event.target);
                var $container = $element.closest('.example');

                if (!$element.data('tagsinput'))
                    return;

                var val = $element.val();
                if (val === null)
                    val = "null";
                var items = $element.tagsinput('items');

                $('code', $('pre.val', $container)).html(($.isArray(val) ? JSON.stringify(val) : "\"" + val.replace('"', '\\"') + "\""));
                $('code', $('pre.items', $container)).html(JSON.stringify($element.tagsinput('items')));


            }).trigger('change');
        });
    </script>
@endsection
