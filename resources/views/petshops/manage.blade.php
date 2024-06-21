<x-admin title="Manage Appointments" :user="$admin" :type="$type">
    <x-card>
        <x-slot name="subtitle">Appointments</x-slot>
        <x-slot name="title">Appointment List</x-slot>
        @if($transactions->count()>0)
        <div class="table-responsive py-2">
            <table class="table table-sm table-striped table-bordered no-footer">
                <thead class="thead-light">
                    <tr>
                        <th class="align-middle text-center">ID</th>
                        <th class="align-middle text-center">Petshop Name</th>
                        <th class="align-middle text-center">Customer Name</th>
                        <th class="align-middle text-center">Pet Name</th>
                        <th class="align-middle text-center">Type</th>
                        <th class="align-middle text-center">Status</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                    <tr>
                        <td class="align-middle text-center">{{ $transaction->id }}</td>
                        <td class="align-middle text-center">{{ $transaction->shop->shop_name }}</td>
                        <td class="align-middle text-center">{{ $transaction->customer->name }}</td>
                        <td class="align-middle text-center">{{ $transaction->pet->name }}</td>
                        <td class="align-middle text-center">{{ $transaction->type }}</td>
                        <td class="align-middle text-center">{{ $transaction->status }}</td>

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
