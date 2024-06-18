<nav class="container">
    <div class="row">
      {{-- HEADER --}}
      <div class="container">
          <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between mx-5 mt-2 border-bottom">
            <div class="col-md-3 mb-md-0">
                @if ($user->account_type==1)
                    <a href="/admin/home" class="d-inline-flex link-body-emphasis text-decoration-none">
                        <img src="/storage/images/assets/Logo.png" alt="" height="30">
                    </a>
                @else
                    <a href="/home_user" class="d-inline-flex link-body-emphasis text-decoration-none">
                        <img src="/storage/images/assets/Logo.png" alt="" height="30">
                     </a>
                @endif
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
              <li><a href="/home_user" class="nav-link px-2">Home</a></li>
              <li><a href="{{ route('pets.index') }}" class="nav-link px-2">Pets</a></li>
              <li><a href="{{ route('items.index') }}" class="nav-link px-2">Shop</a></li>
              <li><a href="{{ route('petshops.index') }}" class="nav-link px-2">Services</a></li>
            </ul>

            <div class="d-flex col-md-3 mb-md-0 text-end justify-content-center align-items-center">
                <div class="col nav-text mt-2">
                    @if ($user->account_type==1)
                        <h6>Welcome, <a href="/dashboard" class="hidden-link">{{ $user->name }}!</a></h6>
                    @else
                        <h6>Welcome, {{ $user->name }}!</h6>
                    @endif
                </div>

                <div class="col">
                    <a href="/logout" class="btn btn-danger mb-2">
                        <h6 class="nav-text">Logout</h6>
                    </a>
                </div>

            </div>
          </header>
        </div>
    </div>
</nav>
