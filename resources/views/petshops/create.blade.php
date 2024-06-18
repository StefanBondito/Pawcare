<x-guestUser title="Book a service" :user="$user">
    <x-card>
        <x-slot name="subtitle">appointment</x-slot>
        <x-slot name="title">Create appointment</x-slot>
        <form action="{{ route("petshops.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- @method('POST') --}}
                <div class="form-group mb-3">
                    <label for='shop_name'>Shop Name</label>
                    <input type="text" class="form-control" value="{{ $shop->shop_name }}" readonly>
                    <input type="hidden" class="form-control" name="petshop" id='petshop' value="{{ $shop->id }}">
                </div>

                <div class="form-group mb-3">
                    <label for='user_name'>Owner Name</label>
                    <input type="text" class="form-control" value="{{ $user->name }}" readonly>
                    <input type="hidden" class="form-control" name="user" id='user' value="{{ $user->id }}">
                </div>
                <div class="form-group mb-3">
                    <label for='pet'>Pet</label>
                        <select class="form-select" name='pet'>
                            <option selected class="d-none" disabled>Select one of your pets</option>
                            @foreach($pets as $pet)
                                <option value="{{ $pet->id }}" {{ old('pet') == $pet->id? 'selected' : ""}}>{{ $pet->name }}</option>
                            @endforeach
                        </select>
                    @if ($errors->has('pet'))
                        <span class="invalid feedback text-danger"role="alert">
                            <strong>*{{ $errors->first('pet') }}.</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <label for='service'>Service</label>
                        <select class="form-select" name='type'>
                            <option selected class="d-none" disabled>Select the service you want</option>
                            <option value="Groom" id="Groom" {{ old('type') == 'Groom' ? 'selected' : '' }}>Groom</option>
                            <option value="Clinic" id="Clinic" {{ old('type') == 'Clinic' ? 'selected' : '' }}>Clinic</option>
                        </select>
                    @if ($errors->has('type'))
                        <span class="invalid feedback text-danger"role="alert">
                            <strong>*{{ $errors->first('type') }}.</strong>
                        </span>
                    @endif
                </div>

                <div class="row">
                    <div class="col">
                        <a href="{{ route("petshops.index") }}" class="btn btn-outline-secondary w-100 my-2">Back</a>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-outline-primary w-100 my-2">Submit</button>
                    </div>
                </div>
        </form>
    </x-card>
</x-guestUser>
