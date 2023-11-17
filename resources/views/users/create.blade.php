<x-app-layout>
    <div class="flex items-center justify-center h-screen">
        <div class="bg-white p-8 shadow-md rounded-md w-96 mt-6 mb-6">
            <h2 class="text-2xl text-center font-semibold mt-6">{{ __('Register User') }}</h2>

            <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data" class="p-4">
                @csrf

                <!-- Name -->
                <div class="mt-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>
                    <input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ old('name') }}" required autofocus />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                    <input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email') }}" required />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                    <input id="password" class="block mt-1 w-full" type="password" name="password" required />
                </div>

                <!-- Phone -->
                <div class="mt-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700">{{ __('Phone') }}</label>
                    <input id="phone" class="block mt-1 w-full" type="text" name="phone" value="{{ old('phone') }}" required />
                </div>

                <!-- Image -->
                <div class="mt-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">{{ __('Image') }}</label>
                    <input id="image" class="block mt-1 w-full" type="file" name="image" accept="image/*" />
                </div>

                <!-- Level -->
                <div class="mt-4">
                    <label for="level" class="block text-sm font-medium text-gray-700">{{ __('Level') }}</label>
                    <select id="level" name="level" class="block w-full" required>
                        <option value="admin">Admin</option>
                        <option value="supervisor">Supervisor</option>
                        <option value="guard" selected>Guard</option>
                    </select>
                </div>

                <!-- Branch -->
                <div class="mt-4">
                    <label for="branch_id" class="block text-sm font-medium text-gray-700">{{ __('Branch') }}</label>
                    <select id="branch_id" name="branch_id" class="block w-full" required>
                        @foreach($branches as $branch)
                        <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex items-center justify-center mt-4">
                    <button>
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>