       {{-- Guest Master Layout --}}
<x-app title="{{ $title }} - Pawcare">
    <x-navbar> </x-navbar>

        <main>
            {{ $slot }}
        </main>

    <x-footer></x-footer>
</x-app>
