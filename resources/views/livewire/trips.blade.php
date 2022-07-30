<div>
    @foreach ($trips->extras as $row)

        <div class="row">
            <div class="col-md-3 mt-1 sameh">
                <button class="btn btn-primary btn-block" >{{ $row->name }}</button>
            </div>
            <div class="col-md-3 mt-1">
                <button class="btn btn-primary btn-block ">{{trans('app.price')}} : $ {{ $row->price_person_en }}</button>
            </div>
            @if ($cart->where('id', $row->id)->count())
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-danger btn-block mt-3" wire:click="deleted({{ $row->id }})">deleted</button>
                    </div>
                </div>

            @else
                <form action="" wire:submit.prevent="save({{ $row->id }})" method="POST" style="    position: absolute;">
                    @csrf

                    <div class="col-md-3">
                        <input type="number" name="quantity" wire:model="quantity.{{ $row->id }}"
                               placeholder="number" class="form-control">
                    </div>

                    <div class="col-md-3 mt-1">
                        <button class="btn btn-warning btn-block">{{trans('app.add')}}</button>
                    </div>


                </form>
            @endif
            <hr class="mt-3">
        </div>
    @endforeach
    <div class="row">
        <div class="col-md-6">
            <button class="btn btn-success btn-block">{{trans('app.cart_item')}} <span
                    style="margin-left: 10px; color: white;font-weight: bolder">
                    {{ $cartCart }}</span></button>
        </div>
        <div class="col-md-6">
            <button class="btn btn-success btn-block">{{trans('app.total_card')}} <span
                    style="margin-left: 10px; color: white;font-weight: bolder">$
                    {{ $cartTotal }}</span></button>
        </div>
    </div>
</div>


