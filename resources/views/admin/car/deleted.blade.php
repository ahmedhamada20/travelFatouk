{{--Edit--}}
<div class="modal fade" id="deleted{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deleted car :: {{$row->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('car.destroy','test')}}" method="post" enctype="multipart/form-data">
                    @method('DELETE')
                    @csrf

                    <input type="hidden" name="id" value="{{$row->id}}">
                    <input type="hidden" name="oldfile" value="{{$row->photos ?? ''}}">


                    <div class="row">
                        <div class="col">
                            <label class="text-danger"> Are Sure Of The Deleting Process Destination ?? </label>
                            <input type="text" name="name" class="form-control"
                                   value="{{$row->name}}" readonly>
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
