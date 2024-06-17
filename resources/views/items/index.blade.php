<x-guestUser title="Shop" :user="$user">
    <div class="card border-0 overflow-hidden shadow rounded-20 mb-5 mx-5">
        <div class="card-header bg-dark-green-blue"></div>
        <div class="card-body mb-3">
            <div class="container mt-3">
                @if ($items)
                    @foreach ($items->chunk(4) as $chunk)
                        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-4 d-flex justify-content-center align-items-center">
                            @foreach ($chunk as $item)
                            <div class="col mb-4 d-flex justify-content-center align-items-center">
                                <div class="card w-100 text-center">
                                    <div class="card-body text-center">
                                        <div class="card-title text-gradient"><h3>{{ $item->name }}</h3></div>
                                        <div class="card-text">{{ $item->price }}</div>
                                        <div class="card-text">{{ $item->itemCategory->name}}</div>
                                        <hr>
                                        <a href="#" title="Buy Now" class="btn btn-primary">
                                            Buy Now!
                                        </a>
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
</x-guestUser>
