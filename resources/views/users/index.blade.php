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
                <div class="p-6 text-gray-900">
                    <h3>Users</h3>
                    <!-- Your user listing content goes here -->
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