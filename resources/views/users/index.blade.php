<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Users') }}
            </h2>
            <button id="addUser" class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-gray-800 bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-800 transition duration-150 ease-in-out">
                Add User
            </button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-2xl font-semibold mb-4">User List</h2>

                    @if(session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                        <p>{{ session('success') }}</p>
                    </div>
                    @endif

                    <table class="w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Branch Name</th>
                                <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Level</th>
                                <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($users as $user)
                            <tr>
                                <td class="px-4 py-2 whitespace-nowrap">{{ $user->id }}</td>
                                <td class="px-4 py-2 whitespace-nowrap">{{ $user->name }}</td>
                                <td class="px-4 py-2 whitespace-nowrap">{{ $user->email }}</td>
                                <td class="px-4 py-2 whitespace-nowrap">{{ $user->branch->branch_name }}</td>
                                <td class="px-4 py-2 whitespace-nowrap">{{ $user->level }}</td>
                                <td class="px-4 py-2 whitespace-nowrap flex items-center justify-evenly">
                                    <a href="{{ route('users.show', $user->id) }}" class="text-blue-500 hover:underline">View</a>
                                    <a href="{{ route('users.edit', $user->id) }}" class="text-yellow-500 hover:underline ml-4">Edit</a>
                                    <a href="{{ route('users.destroy', $user->id) }}" class="text-red-500 hover:underline ml-4" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $user->id }}').submit();">
                                        Delete
                                    </a>
                                    <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="POST" class="hidden">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="py-2 px-4 border-b text-center">No users found.</td>
                            </tr>

                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script>
        // Add event listener to the "Add User" button
        document.getElementById('addUser').addEventListener('click', function() {
            // Redirect to the users.create route
            window.location.href = "{{ route('users.create') }}";
        });
    </script>
</x-app-layout>