<x-guestUser title="Pet Data" :user="$user">
    <x-card :pets="$pets">
        <x-slot name="title">Pets</x-slot>
        <x-slot name="subtitle">pets</x-slot>
 
        @if ($pets)
            @foreach($pets as $pet)
                <x-card :pets="$pets">
                    <x-slot name="title">{{ $pet['name'] }}</x-slot>
                    <x-slot name="subtitle">{{ null }}</x-slot>
                    <p>Type: {{ $pet['type'] }}</p>
                    <p>Breed: {{ $pet['breed'] }}</p>
                    <p>Age: {{ $pet['age'] }}</p>
                    <p>Date of Birth: {{ $pet['dateOfBirth'] }}</p>
                </x-card>
            @endforeach
        @else
            you're still gay
        @endif

    </x-card>
</x-guestUser>
