<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Branches') }}
            </h2>

            <button id="addBranch" class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-gray-800 bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-800 transition duration-150 ease-in-out">
                Add Branch
            </button>
        </div>
    </x-slot>

    @if(session('success'))
    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
        <p>{{ session('success') }}</p>
    </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3>Branches</h3>

                    <table class="table w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Location</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($branches as $branch)
                            <tr>
                                <td class="px-4 py-2 whitespace-nowrap">{{ $branch->id }}</td>
                                <td class="px-4 py-2 whitespace-nowrap">{{ $branch->branch_name }}</td>
                                <td class="px-4 py-2 whitespace-nowrap">{{ $branch->location }}</td>
                                <td class="px-4 py-2 whitespace-nowrap flex items-center justify-evenly">
                                    <a href="{{ route('branches.show', $branch->id) }}" class="text-blue-500 hover:underline">View</a>
                                    <a href="{{ route('branches.edit', $branch->id) }}" class="text-yellow-500 hover:underline ml-4">Edit</a>
                                    <a href="{{ route('branches.destroy', $branch->id) }}" class="text-red-500 hover:underline ml-4" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $branch->id }}').submit();">
                                        Delete
                                    </a>
                                    <form id="delete-form-{{ $branch->id }}" action="{{ route('branches.destroy', $branch->id) }}" method="POST" class="hidden">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Add event listener to the "Add branch" button
        document.getElementById('addBranch').addEventListener('click', function() {
            // Redirect to the branches.create route
            window.location.href = "{{ route('branches.create') }}";
        });
    </script>
</x-app-layout>