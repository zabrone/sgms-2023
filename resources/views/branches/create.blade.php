<!-- resources/views/branches/create.blade.php -->

<x-app-layout>
    <div class="flex items-center justify-center h-screen">
        <div class="bg-white p-8 shadow-md rounded-md w-96 mt-6 mb-6">
            <!-- Close button -->
            <a href="{{ route('branches.index') }}" class="h-6 w-6 absolute top-2 right-2 text-gray-600 hover:text-gray-800 cursor-pointer">
                &times;
            </a>

            <h2 class="text-2xl text-center font-semibold mt-6">{{ __('Create Branch') }}</h2>

            <form method="POST" action="{{ route('branches.store') }}" class="p-4">
                @csrf

                <!-- Branch Name -->
                <div class="mt-4">
                    <label for="branch_name" class="block text-sm font-medium text-gray-700">{{ __('Branch Name') }}</label>
                    <input id="branch_name" class="block mt-1 w-full" type="text" name="branch_name" value="{{ old('branch_name') }}" autofocus />
                </div>

                <!-- location -->
                <div class="mt-4">
                    <label for="location" class="block text-sm font-medium text-gray-700">{{ __('Branch Location') }}</label>
                    <input id="location" class="block mt-1 w-full" type="text" name="location" value="{{ old('location') }}" />
                </div>

                <div class="flex items-center justify-center mt-4">
                    <button type="submit" class="px-4 py-2 bg-green-500 text-gray-800 rounded-md hover:bg-indigo-600">
                        {{ __('Create') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>