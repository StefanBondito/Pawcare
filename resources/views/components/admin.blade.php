{{-- Admin Master layout --}}
<x-app title="{{ $title }} - Admin">
    <div class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: #02809A;">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/home_user">Pawcare Homepage</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
                <i class="fas fa-bars"></i>
            </button>
        </nav>
        <x-sidebar :user="$user" :type="$type"> </x-sidebar>
        <div id="layoutSidenav_content">
            <main>
                <div class="container py-5">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
</x-app>
