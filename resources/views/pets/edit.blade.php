<x-guestUser title="Insert Pet Data" :user="$user">
    <x-card>
        <x-slot name="subtitle">pets</x-slot>
        <x-slot name="title">Edit Pet Data</x-slot>
        <form action="{{ route("pets.update", $pet->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- @method('POST') --}}
                <div class="form-group mb-3">
                    <label for='pet_name'>Pet Name</label>
                    <input type="text" class="form-control" name="name" id='name' placeholder='Ex. Chico, Shaggy, Kuro, etc' value="{{ $pet->name }}" required>
                    @if ($errors->has('name'))
                        <span class="invalid feedback text-danger"role="alert">
                            <strong>*{{ $errors->first('name') }}.</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <label for='pet_type'>Pet Type</label>
                    <input type="text" class="form-control" name="type" id='type' placeholder='Ex. Cat, Dog, Bird, etc' value="{{ $pet->type }}" required>
                    @if ($errors->has('type'))
                        <span class="invalid feedback text-danger"role="alert">
                            <strong>*{{ $errors->first('type') }}.</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <label for='pet_breed'>Pet Breed</label>
                    <input type="text" class="form-control" name="breed" id='breed' placeholder='Ex. Persian, Chihuahua, etc' value="{{ $pet->breed }}" required>
                    @if ($errors->has('breed'))
                        <span class="invalid feedback text-danger"role="alert">
                            <strong>*{{ $errors->first('breed') }}.</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <label for='pet_dob'>Pet Date of Birth</label>
                    <input type="text" class="form-control" name="dateOfBirth" id='dateOfBirth' placeholder='Ex. YYYY-MM-DD' value="{{ $pet->dateOfBirth }}" required>
                    @if ($errors->has('breed'))
                        <span class="invalid feedback text-danger"role="alert">
                            <strong>*{{ $errors->first('dateOfBirth') }}.</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <label for='pet_age'>Pet age</label>
                    <input type="text" class="form-control" name="age" id='age' placeholder='Ex. 12, 4, etc' value="{{ $pet->age }}" required>
                    @if ($errors->has('age'))
                        <span class="invalid feedback text-danger"role="alert">
                            <strong>*{{ $errors->first('age') }}.</strong>
                        </span>
                    @endif
                </div>

                <div class="row">
                    <div class="col">
                        <a href="{{ route("pets.index") }}" class="btn btn-outline-secondary w-100 my-2">Back</a>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-outline-primary w-100 my-2">Submit</button>
                    </div>
                </div>
        </form>
    </x-card>
</x-guestUser>
