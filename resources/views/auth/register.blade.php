<x-guest-layout>
    <div class="max-w-md mx-auto bg-yellow-200 shadow-lg rounded-lg p-6 mt-10"> <!-- Ubah bg-white menjadi bg-yellow-200 -->
        <h2 class="text-2xl font-bold text-center mb-6">{{ __('Register') }}</h2>

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" class="font-semibold" />
            <x-text-input id="name" class="block mt-1 w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" /> <!-- Ubah focus:ring-indigo-500 menjadi focus:ring-yellow-500 -->
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-600" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" class="font-semibold" />
            <x-text-input id="email" class="block mt-1 w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" type="email" name="email" :value="old('email')" required autocomplete="username" /> <!-- Ubah focus:ring-indigo-500 menjadi focus:ring-yellow-500 -->
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="font-semibold" />
            <x-text-input id="password" class="block mt-1 w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" type="password" name="password" required autocomplete="new-password" /> <!-- Ubah focus:ring-indigo-500 menjadi focus:ring-yellow-500 -->
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="font-semibold" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" type="password" name="password_confirmation" required autocomplete="new-password" /> <!-- Ubah focus:ring-indigo-500 menjadi focus:ring-yellow-500 -->
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-600" />
        </div>

        <div class="flex items-center justify-between mt-6">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="bg-yellow-600 hover:bg-yellow-700 text-white font-semibold py-2 px-4 rounded-md"> <!-- Ubah bg-indigo-600 menjadi bg-yellow-600 -->
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </div>
</x-guest-layout>
