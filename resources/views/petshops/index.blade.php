<x-guestUser title="Services" :user="$user">
{{-- ITEM LIST --}}
    <div class="card border-0 overflow-hidden shadow rounded-20 mb-5 mx-5">
        <div class="card-header bg-dark-green-blue"></div>
        <div class="card-body mb-3">
            <div class="container mt-3">
                <h1 class="text-center title-gradient mb-5">Petshops</h1>
                @if ($shops)
                    @foreach ($shops->chunk(2) as $chunk)
                        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-4 d-flex justify-content-center align-items-center">
                            @foreach ($chunk as $shop)
                            <div class="col mb-4 d-flex justify-content-center align-items-center">
                                <div class="card w-100 text-center">
                                    <div class="card-body text-center">
                                        <div class="card-title"><h2 class="text-gradient">{{ $shop->shop_name }}</h2></div>
                                        <hr>
                                        <div class="card-text data-text">{{ $shop->address }}</div>
                                        <div class="d-flex row mt-2 row-cols-2 row-cols-lg-4 align-items-center justify-content-center">
                                            <a href="{{ route('petshops.create', ['petshop' => $shop->id]) }}" title="Create Appointment" class="btn btn-primary w-75 my-2">
                                                Order a service
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    @endforeach
                @else
                    <p class="text-center"> We are very sorry for the inconvenience, but we currently do not have any data</p>
                @endif
        </div>
    </div>
</x-guestUser>

