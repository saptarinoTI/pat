<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="{{ route('home') }}" class="bg-red-900 ">
                <x-application-logo />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Username -->
            <div>
                <x-input-label for="id" :value="__('Username')" />

                <x-text-input id="id" class="block mt-1 w-full px-4 py-2 border" type="text" name="id"
                    :value="old('id')" required autofocus />

                <x-input-error :messages="$errors->get('id')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full px-4 py-2 border" type="password" name="password"
                    required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Role -->
            {{-- <div class="mt-4">
                <x-input-label for="password" :value="__('Level')" />

                <select name="role" id="role"
                    class="block mt-1 w-full px-4 py-2 border rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option>Pilih salah satu ...</option>
                    <option value="admin">Admin</option>
                    <option value="pasien">Pasien</option>
                </select>

                <x-input-error :messages="$errors->get('role')" class="mt-2" />
            </div> --}}


            <div class="flex items-center justify-end mt-4">

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>