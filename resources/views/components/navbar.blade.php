<nav class="container">
    <div class="row">
      {{-- HEADER --}}
      <div class="container">
          <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between mx-5 mt-2 border-bottom">
            <div class="col-md-3 mb-md-0">
              <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img src="/storage/images/assets/Logo.png" alt="" height="30">
              </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
              <li><a href="/" class="nav-link px-2 link-secondary">Home</a></li>
              <li><a href="{{ route('items.index') }}" class="nav-link px-2">Shop</a></li>
              <li><a href="/" class="nav-link px-2">Groom</a></li>
              <li><a href="/" class="nav-link px-2">Clinic</a></li>
            </ul>

            <div class="col-md-3 text-end">
              <a href="{{ route('login') }}" type="button" class="btn btn-outline-primary me-2">Login</a>
              <a href="{{ route('signup') }}" type="button" class="btn btn-primary">Sign-up</a>
            </div>
          </header>
        </div>
    </div>
</nav>
