<x-guestUser title="Pet Data" :user="$user">
    <x-card>
        <x-slot name="title">{{ null }}</x-slot>
        <x-slot name="subtitle">pets</x-slot>
        <a href="{{ route('pets.create') }}" class="btn btn-primary mb-3">
            <i class="fa fa-plus me-2 text-button"> Insert Your Pet Data</i>
        </a>
        <div class="container mt-3">
                @if ($pets)
                    @foreach ($pets->chunk(3) as $chunk)
                        <div class="row g-4 row-cols-1 row-cols-lg-3 d-flex justify-content-center align-items-center">
                            @foreach ($chunk as $pet)
                            <div class="col mb-4 d-flex justify-content-center align-items-center">
                                <div class="card w-75 text-center">
                                    <div class="card-body text-center">
                                        <div class="card-title">{{ $pet->name }}</div>
                                        <div class="card-text">{{ $pet->age }}</div>
                                        <div class="card-text">{{ $pet->breed }}</div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    @endforeach
                @else
                    <p class="text-center"> No Data</p>
                    <a href="{{ route('pets.create') }}" class="btn btn-primary mb-3">
                        <i class="fas fa-plus me-2">Insert Your Pet Data</i>
                    </a>
                @endif
            </div>
        </div>


    </x-card>
</x-guestUser>
