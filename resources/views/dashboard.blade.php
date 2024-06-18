<x-admin title="Dashboard" :user="$user" :type="$type">
    <x-card>
        <x-slot name='subtitle'>OUR DASHBOARD</x-slot>
        <x-slot name='title'>{{ NULL }}</x-slot>

        <div class="row justify-content-center">
            <div class="col-10 col-lg-4">
                <div class="card rounded-10 border-0 mb-4 mb-lg-4">
                    <div class="card-bod">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-lg-3">
                                <span class="fa-solid fa-people-group"></span>
                            </div>
                            <div class="col-lg-4 col-lg-9">
                                <h5 class="card-title text-muted">Number of <span class="bold-text">Customers</span></h5>
                                <h3 class="card-title fw-bold">{{ $customerCounter }} Customers</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-10 col-lg-4">
                <div class="card rounded-10 border-0 mb-4 mb-lg-4">
                    <div class="card-bod">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-lg-3">
                                <span class="fa-solid fa-boxes-stacked"></span>
                            </div>
                            <div class="col-lg-4 col-lg-9">
                                <h5 class="card-title text-muted">Number of <span class="bold-text">Products</span></h5>
                                <h3 class="card-title fw-bold">{{ $productCounter }} Items</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-card>
</x-admin>
