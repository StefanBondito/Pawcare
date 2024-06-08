@extends('components.layout')
@section('content')

<div class="container-home">
    <div class="landing py-2 my-2 text-center">
        <img class="d-block mx-auto mb-4" src="" alt="" width="72" height="57">
        <h1 class="display-1 custom-color">Pawcare</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">We take better care for your pet's everyday needs</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Book Now!</button>
            </div>
        </div>
    </div>
</div>

{{-- OUR FEATURES --}}
<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom text-center">What do We Offer at Pawcare?</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

      <div class="feature col card">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg>
        </div>
        <h3 class="fs-2 text-body-emphasis">Groom</h3>
        <p>Give your pet a makeover and cleanup to make them fancy</p>
        <a href="#" class="btn btn-primary">Book Now!</a>
      </div>

      <div class="feature col card">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg>
        </div>
        <h3 class="fs-2 text-body-emphasis">Shopping</h3>
        <p>Don't have time to resupply and stock up on your pet's essentials? Come and see what our product catalogue has to offer for your convenience</p>
        <a href="#" class="btn btn-success">Shop Now!</a>
      </div>

      <div class="feature col card">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
        </div>
        <h3 class="fs-2 text-body-emphasis">Clinic</h3>
        <p>Pets can get sick, give them a look at our trusty clinics all around</p>
        <a href="#" class="btn btn-success">Book now!</a>
      </div>
    </div>
</div>

{{-- TESTIMONY --}}


@endsection
