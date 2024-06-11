<x-guestUser title="Homepage" user="{{$user}}">

<div class="container-home">
    <div class="landing py-2 my-2 text-center">
        <img class="d-block mx-auto mb-4" src="/storage/images/assets/Logo.png" alt="" width="100">
        <h1 class="display-1 title-gradient titleText">Pawcare</h1>
        <div class="col-lg-6 mx-auto">
            <h2 class="lead mb-4 subtitle-gradient">Pawcare does not bluff, we make a deal</h2>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Book Now!</button>
            </div>
        </div>
    </div>
</div>

{{-- OUR FEATURES --}}
<div class="container px-2 py-2">
    <h2 class="pb-2 border-bottom text-center text-gradient">What do We Offer at Pawcare?</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

      <div class="feature col card">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg>
        </div>
        <h3 class="fs-2 text-body-emphasis text-gradient">Groom</h3>
        <p>Give your pet a makeover and cleanup to make them fancy</p>
        <a href="#" class="btn btn-primary">Book Now!</a>
      </div>

      <div class="feature col card">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg>
        </div>
        <h3 class="fs-2 text-body-emphasis text-gradient">Shopping</h3>
        <p>Don't have time to resupply and stock up on your pet's essentials? Come and see what our product catalogue has to offer for your convenience</p>
        <a href="#" class="btn btn-success">Shop Now!</a>
      </div>

      <div class="feature col card">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
        </div>
        <h3 class="fs-2 text-body-emphasis text-gradient">Clinic</h3>
        <p>Pets can get sick, give them a look at our trusty clinics all around</p>
        <a href="#" class="btn btn-success">Book now!</a>
      </div>
    </div>
</div>

{{-- ABOUT US --}}
<div class="container px-2 py-2">
    <div class="row mb-2">
        <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <img src="/storage/images/assets/about-us-home.jpeg" alt="">
        </div>
        </div>
        <div class="col-md-6">
        <h1 class="text-gradient">What is Pawcare?</h1>
        <p class="text-justify">Pawcare is the leading application for tending care to our fluffy companions and fulfilling their every needs.</p>
        </div>
    </div>
</div>

</x-guest>
