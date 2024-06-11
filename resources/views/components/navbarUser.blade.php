<div class="container">
    <div class="row">
      {{-- HEADER --}}
      <div class="container">
          <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 mx-5 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
              <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img src="/storage/images/assets/Logo.png" alt="" height="30">
              </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
              <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
              <li><a href="#" class="nav-link px-2">Petshop</a></li>
              <li><a href="#" class="nav-link px-2">Groom</a></li>
              <li><a href="#" class="nav-link px-2">Clinic</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <h1>Welcome, {{ $user->name }}</h1>
            </div>
          </header>
        </div>
    </div>
  </div>
