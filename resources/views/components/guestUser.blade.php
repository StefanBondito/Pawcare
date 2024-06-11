       {{-- Guest Master Layout --}}
<x-app title="{{ $title }} - Pawcare">
    <x-navbar user="{{$user}}" />

        <main>
            {{ $slot }}
        </main>

    <x-footer></x-footer>
</x-app>
