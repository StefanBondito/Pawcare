<x-guestUser title="Shop" :user="$user">
    <div class="container">
        <h1 class="text-gradient display-4 fw-bold text-uppercase text-center"> Our Items</h1>
        <div class="divider mb-4 text-center"></div>
        @foreach ($pets as $pet)
        <div class="feature col card mx-4 card-home">
            <div class="card-body text-center">
                <h3 class="fs-2 text-body-emphasis text-gradient text-center">{{ $item->name }}</h3>
                <p>{{ $item->type }}</p>
                <p>{{ $item->price }}</p>
                <a href="#" class="btn btn-primary">Book Now!</a>
            </div>
          </div>


        @endforeach
    </div>
</x-guestUser>
