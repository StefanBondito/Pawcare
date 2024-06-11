       {{-- Guest Master Layout --}}
<x-app title="{{ $title }} - Pawcare">
    <x-navbarUser :user="$user" />

        <main>
            {{ $slot }}
        </main>

    <x-footer></x-footer>
</x-app>
