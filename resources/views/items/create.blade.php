<x-guestUser title="Insert Item Data" :user="$user">
    <x-card>
        <x-slot name="subtitle">items</x-slot>
        <x-slot name="title">Insert New Item</x-slot>
        <form action="{{ route("items.store") }}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="form-group mb-3">
                    <label for='item_name'>Item Name</label>
                    <input type="text" class="form-control" name="name" id='name' placeholder='Ex. Dog Food' value="{{ old('name') }}" required>
                    @if ($errors->has('name'))
                        <span class="invalid feedback text-danger"role="alert">
                            <strong>*{{ $errors->first('name') }}.</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <label for='item_price'>Item Price</label>
                    <input type="text" class="form-control" name="price" id='price' placeholder='Ex. 15000, 200000' value="{{ old('price') }}" required>
                    @if ($errors->has('price'))
                        <span class="invalid feedback text-danger"role="alert">
                            <strong>*{{ $errors->first('price') }}.</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <label for='item_type'>Item Type</label>
                    <input type="text" class="form-control" name="type" id='type' placeholder='Ex. Food, Accessories' value="{{ old('type') }}" required>
                    @if ($errors->has('type'))
                        <span class="invalid feedback text-danger"role="alert">
                            <strong>*{{ $errors->first('type') }}.</strong>
                        </span>
                    @endif
                </div>


                <div class="row">
                    <div class="col">
                        <a href="/home_user" class="btn btn-outline-secondary w-100">Back</a>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-outline-primary w-100">Submit</button>
                    </div>
                </div>
        </form>
    </x-card>
</x-guestUser>
