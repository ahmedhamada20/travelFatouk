{{--Edit--}}
<div class="modal fade" id="edit{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit car Extras</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('carExtras.update','test')}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <input type="hidden" name="id" value="{{$row->id}}">
                    <input type="hidden" name="car_id" value="{{$row->car_id}}">

                    <div class="row">
                        <div class="col">
                            <label>name</label>
                            <input class="form-control" type="text"  name="name"  value="{{$row->name}}">
                        </div>


                        <div class="col">
                            <label>price</label>
                            <input class="form-control" type="text" name="price"  value="{{$row->price}}">
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
