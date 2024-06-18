<x-admin title="Manage Items" :user="$admin" :type="$type">
    <x-card>
        <x-slot name="subtitle">items</x-slot>
        <x-slot name="title">Items List</x-slot>
        <a href="{{ route('items.create') }}" class="btn btn-primary mb-3">
            <i class="fa fa-plus me-2 text-button"> Insert New Item Data</i>
        </a>
            @if(session()->has('success'))
                <div class="alert alert-danger alert-dismissable fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

                @if(session()->has('error'))
                    <div class="alert alert-danger alert-dismissable fade show" role="alert">
                        <strong>{{ session('error') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
        @if($items->count()>0)
        <div class="table-responsive py-2">
            <table class="table table-sm table-striped table-bordered no-footer">
                <thead class="thead-light">
                    <tr>
                        <th class="align-middle text-center">ID</th>
                        <th class="align-middle text-center">Item Type</th>
                        <th class="align-middle text-center">Name</th>
                        <th class="align-middle text-center">Price</th>
                        <th class="align-middle text-center">Logo</th>
                        <th class="align-middle text-center">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <td class="align-middle text-center">{{ $item->id }}</td>
                        <td class="align-middle text-center">{{ $item->itemCategory->name }}</td>
                        <td class="align-middle text-center">{{ $item->name }}</td>
                        <td class="align-middle text-center">{{ $item->price }}</td>
                        <td class="align-middle text-center">{{ $item->logo }}</td>
                        <td class="d-flex justify-content-around p-2">
                            <a href="{{ route('items.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <form action="{{ route('items.delete', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onlick="return confirm('Are you sure? Data will be removed from the database')" title="Delete">
                                    <i class="fa fa-close"></i>
                                </button>
                            </form>
                        </td>

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
