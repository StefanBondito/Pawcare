<x-guestUser title="Pet Data" :user="$user">
    <x-card>
        <x-slot name="title">{{ null }}</x-slot>
        <x-slot name="subtitle">pets</x-slot>
        <div class="container mt-3">
                @if ($pets->count()>0)
                <a href="{{ route('pets.create') }}" class="btn mb-3 custom-button">
                    <i class="fa fa-plus me-2 text-button"> Insert Your Pet Data</i>
                </a>
                    @foreach ($pets->chunk(3) as $chunk)
                        <div class="row g-4 row-cols-1 row-cols-lg-3 d-flex justify-content-center align-items-center">
                            @foreach ($chunk as $pet)
                            <div class="col mb-4 d-flex justify-content-center align-items-center">
                                <div class="card w-75 text-center">
                                    <div class="card-body text-center">
                                        <div class="card-title"><h2 class="text-gradient">{{ $pet->name }}</h2></div>
                                        <div class="card-text data-text">{{ $pet->age }} years old</div>
                                        <div class="card-text data-text">{{ $pet->type }}</div>
                                        <div class="card-text data-text">{{ $pet->breed }}</div>
                                        <hr>
                                        <div class="d-flex row mt-2 row-cols-2 row-cols-lg-4 align-items-center justify-content-center">
                                            <div class="d-flex col mt-auto">
                                                <a href="{{ route('pets.edit', $pet->id) }}" title="Edit" class="btn btn-primary">
                                                    <i class="fa-solid fa-edit"></i>
                                                </a>
                                            </div>
                                            <div class="d-flex col mt-auto">
                                                <form action="{{ route('pets.delete', $pet->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" onclick="return confirm('Are you sure? Data will be removed from our database')" title="Delete">
                                                        <i class="fa-solid fa-close"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    @endforeach
                @else
                <div class="container text-center">
                    <p class="text-center">No Pets Found</p>
                    <a href="{{ route('pets.create') }}" class="btn btn-primary mb-3">
                        <i class="fas fa-plus mx-2"> Insert Your Pet Data</i>
                    </a>
                </div>
                @endif
            </div>
        </div>


    </x-card>
</x-guestUser>
