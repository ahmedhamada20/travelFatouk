{{--Edit--}}
<div class="modal fade" id="edit{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">edit currencies :: {{$row->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('currencies.update','test')}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <input type="hidden" name="id" value="{{$row->id}}">


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
                            <label>symbol</label>
                            <input type="text" name="symbol" value="{{$row->symbol}}" class="form-control @error('symbol') is-invalid @enderror">
                        </div>

                        <div class="col">
                            <label>rate</label>
                            <input type="number" name="rate" value="{{$row->rate}}" class="form-control @error('rate') is-invalid @enderror">
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
