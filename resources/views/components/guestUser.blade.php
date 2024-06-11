       {{-- Guest Master Layout --}}
<x-app title="{{ $title }} - Pawcare">
    @vite(['resources/sass/app.scss'])
    <x-navbarUser user="{{$user}}" />

        <main>
            {{ $slot }}
        </main>

    <x-footer></x-footer>
</x-app>
