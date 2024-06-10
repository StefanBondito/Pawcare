<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu" >
                <div class="nav">
                    <div class="sb-sidenav-header mt-2">
                        <div class="d-flex flex-column justify-content-center align-item-center text-center">
                            {{-- <img src="/storage/images/photo/{{Auth::user()->photo_profile}}" alt="photo profile" class="img-fluid rounded-circle w-50 mx-auto"> --}}
                            <span class="mt-2">NAME</span>
                            <small class="text" style="color: rgba(255, 255, 255, 0.8);">POSITION</small>
                            {{-- <small class="text" style="color: rgba(255, 255, 255, 0.8);">{{ Auth::user()->division }}</small> --}}
                        </div>
                    </div>
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="/dashboard">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>

                    <div class="sb-sidenav-menu-heading">Management</div>



                    {{-- Ini contoh, nnti diterapin aja ke semua link biar ngebaca data dari access control
                    @if (!empty(Auth::user()->accessControls->where('access_id', 1)->first()))
                        <a class="nav-link" href="{{ route('articles.manage') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                            Articles
                        </a>
                    @endif --}}



                    {{-- @if (!empty(Auth::user()->accessControls->where('access_id', 3)->first())) --}}
                        <a class="nav-link" href="{{ route('pets.create') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-hand-holding-dollar"></i></div>
                            Pets
                        </a>
                    {{-- @endif --}}

                    {{-- @if (!empty(Auth::user()->accessControls->where('access_id', 4)->first()))
                        <a class="nav-link" href="{{ route('event-contents.manage') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-calendar-days"></i></div>
                            Main Events
                        </a>
                    @endif

                    @if (!empty(Auth::user()->accessControls->where('access_id', 5)->first()))
                        <a class="nav-link" href="{{ route('event-participants.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Participants
                        </a>
                    @endif

                    @if (!empty(Auth::user()->accessControls->where('access_id', 6)->first()))
                        <a class="nav-link" href="{{ route('event-payments.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-money-bill"></i></div>
                            Payments
                        </a>
                    @endif

                    @if (!empty(Auth::user()->accessControls->where('access_id', 7)->first()))
                        <a class="nav-link" href="{{ route('campaigns.manage') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-bullhorn"></i></div>
                            Campaigns
                        </a>
                        @endif
                    @if (!empty(Auth::user()->accessControls->where('access_id', 9)->first()))
                        <a class="nav-link" href="{{ route('sponsors.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-handshake"></i></div>
                            Manage Sponsors
                        </a>
                    @endif
                    @if (!empty(Auth::user()->accessControls->where('access_id', 10)->first()))
                        <a class="nav-link" href="{{ route('media-partners.index') }}">
                            <div class="sb-nav-link-icon"><i class="far fa-newspaper"></i></div>
                            Manage MedPars
                        </a>
                    @endif
                    @if (!empty(Auth::user()->accessControls->where('access_id', 11)->first()))
                        <a class="nav-link" href="{{ route('online-challenges.manage') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-bullseye"></i></div>
                            Online Challenges
                        </a>
                    @endif
                    @if (!empty(Auth::user()->accessControls->where('access_id', 12)->first()))
                        <a class="nav-link" href="{{ route('online-competition.manage') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-trophy"></i></div>
                            Online Competition
                        </a>
                    @endif
                    @if (!empty(Auth::user()->accessControls->where('access_id', 13)->first()))
                        <a class="nav-link" href="{{ route('workshop.manage') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tools"></i></div>
                            Workshop
                        </a>
                    @endif --}}


                    {{-- @if (Auth::user()->division_id === "MIT")
                        <div class="sb-sidenav-menu-heading">Website Configuration</div>
                        <a class="nav-link" href="{{ route('accesses.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-list-ol"></i></div>
                            Manage Accesses
                        </a>
                        <a class="nav-link" href="{{ route('access-controls.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-lock"></i></div>
                            Access Controls
                        </a>
                        @if (!empty(Auth::user()->accessControls->where('access_id', 2)->first()))
                            <a class="nav-link" href="{{ route('environments.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                                Environments
                            </a>
                        @endif
                        <a class="nav-link" href="{{ route('payment-providers.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-wallet"></i></div>
                            Manage Payment Provider
                        </a>
                        <a class="nav-link" href="{{ route('campuses.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                            Manage Campuses
                        </a>
                        <a class="nav-link" href="{{ route('faculties.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-building-columns"></i></div>
                            Manage Faculties
                        </a>
                        <a class="nav-link" href="{{ route('majors.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open-reader"></i></div>
                            Manage Majors
                        </a>
                    @endif --}}

                    {{-- <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Online Challenges
                    </a> --}}
                    {{-- <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fas fa-chalkboard-user"></i></div>
                        Workshops
                    </a> --}}
                    {{-- <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fas fa-trophy"></i></div>
                        Online Competitions
                    </a> --}}
                </div>
            </div>
            <div class="sb-sidenav-footer bg-danger ">
                {{-- <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-white text-decoration-none"> --}}
                    <div class="d-flex justify-content-center  ">
                        <i class="bi bi-box-arrow-right me-2"></i>
                        <strong>Sign out</strong>
                    </div>
                {{-- </a> --}}
                {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form> --}}
            </div>
        </nav>
    </div>
