<x-admin title="Manage Pets" :user="$admin" :type="$type">
    <x-card>
        <x-slot name="subtitle">pets</x-slot>
        <x-slot name="title">Pets List</x-slot>
        @if($pets->count()>0)

        <div class="table-responsive py-2">
            <table class="table table-sm table-striped table-bordered no-footer">
                <thead class="thead-light">
                    <tr>
                        <th class="align-middle text-center">ID</th>
                        <th class="align-middle text-center">Pet Owner</th>
                        <th class="align-middle text-center">Name</th>
                        <th class="align-middle text-center">Age</th>
                        <th class="align-middle text-center">Type</th>
                        <th class="align-middle text-center">Breed</th>
                        <th class="align-middle text-center">Date of Birth</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($pets as $pet)
                    <tr>
                        <td class="align-middle text-center">{{ $pet->id }}</td>
                        <td class="align-middle text-center">{{ $pet->user->name }}</td>
                        <td class="align-middle text-center">{{ $pet->name }}</td>
                        <td class="align-middle text-center">{{ $pet->age }}</td>
                        <td class="align-middle text-center">{{ $pet->type }}</td>
                        <td class="align-middle text-center">{{ $pet->breed }}</td>
                        <td class="align-middle text-center">{{ $pet->dateOfBirth }}</td>

                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        @else
            <p class="text-center">No Data</p>
        @endif
    </x-card>
</x-admin>
