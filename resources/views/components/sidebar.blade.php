<div id="layoutSidenav" :user="$user" :type="$type">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu" >
                <div class="nav">
                    <div class="sb-sidenav-header mt-2">
                        <div class="d-flex flex-column justify-content-center align-item-center text-center">
                            <span class="mt-2 button-text large-text">Welcome, {{ $user->name }}</span>
                            <small class="text data-text" style="color: rgba(255, 255, 255, 0.8);">{{ $type->name }}</small>
                        </div>
                    </div>
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="/dashboard">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>

                    <div class="sb-sidenav-menu-heading">Management</div>
                        <a class="nav-link" href="{{ route('pets.manage') }}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-paw"></i></div>
                            Pets
                        </a>

                        <a class="nav-link" href="{{ route('items.manage') }}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-box"></i></div>
                            Items
                        </a>


                </div>
            </div>
            <div class="sb-sidenav-footer bg-danger ">
                <a href="/logout" class="text-white text-decoration-none">
                    <div class="d-flex justify-content-center  ">
                        <i class="bi bi-box-arrow-right me-2"></i>
                        <strong>Sign out</strong>
                    </div>
                </a>
            </div>
        </nav>
    </div>
