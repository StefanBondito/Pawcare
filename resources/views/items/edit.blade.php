<x-admin title="Edit Item Data" :user="$admin" :type="$type">
    <x-card>
        <x-slot name="subtitle">items</x-slot>
        <x-slot name="title">Edit Item</x-slot>
        @if(session()->has('success'))
                    <div class="alert alert-danger alert-dismissable fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session()->has('error'))
                    <div class="alert alert-danger alert-dismissable fade show" role="alert">
                        <strong>{{ session('error') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
        <form action="{{ route("items.update", $item->id) }}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="form-group mb-3">
                    <label for='item_name'>Item Name</label>
                    <input type="text" class="form-control" name="name" id='name' placeholder='Ex. Dog Food' value="{{ $item->name }}" required>
                    @if ($errors->has('name'))
                        <span class="invalid feedback text-danger"role="alert">
                            <strong>*{{ $errors->first('name') }}.</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <label for='item_price'>Item Price</label>
                    <input type="text" class="form-control" name="price" id='price' placeholder='Ex. 15000, 200000' value="{{ $item->price}}" required>
                    @if ($errors->has('price'))
                        <span class="invalid feedback text-danger"role="alert">
                            <strong>*{{ $errors->first('price') }}.</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <label for='item_type'>Item Type</label>
                        <select class="form-select" name='item_type'>
                            <option selected class="d-none" disabled>Select one</option>
                            @foreach($itemTypes as $itemType)
                                <option value="{{ $itemType->id }}" {{ $item->type_id == $itemType->id ? 'selected' : '' }}>{{ $itemType->name }}</option>
                            @endforeach
                        </select>
                    @if ($errors->has('item_type'))
                        <span class="invalid feedback text-danger"role="alert">
                            <strong>*{{ $errors->first('item_type') }}.</strong>
                        </span>
                    @endif
                </div>


                <div class="row">
                    <div class="col">
                        <a href="{{ route('items.manage') }}" class="btn btn-outline-secondary w-100">Back</a>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-outline-primary w-100">Submit</button>
                    </div>
                </div>
        </form>
    </x-card>
</x-admin>
