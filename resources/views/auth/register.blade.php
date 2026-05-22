<x-guest-layout>

    <div class="min-h-screen flex items-center justify-center bg-gray-100 py-10">

        <div class="w-full max-w-md bg-white shadow-xl rounded-2xl p-8">

            <!-- Heading -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">
                    Create Account
                </h1>

                <p class="text-gray-500 mt-2">
                    Register your new account
                </p>
            </div>

            <!-- Register Form -->
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Full Name')" />

                    <x-text-input
                        id="name"
                        class="block mt-2 w-full rounded-lg"
                        type="text"
                        name="name"
                        :value="old('name')"
                        required
                        autofocus
                        autocomplete="name"
                        placeholder="Enter your full name"
                    />

                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email -->
                <div class="mt-5">
                    <x-input-label for="email" :value="__('Email Address')" />

                    <x-text-input
                        id="email"
                        class="block mt-2 w-full rounded-lg"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autocomplete="username"
                        placeholder="Enter your email"
                    />

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-5">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input
                        id="password"
                        class="block mt-2 w-full rounded-lg"
                        type="password"
                        name="password"
                        required
                        autocomplete="new-password"
                        placeholder="Enter password"
                    />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-5">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input
                        id="password_confirmation"
                        class="block mt-2 w-full rounded-lg"
                        type="password"
                        name="password_confirmation"
                        required
                        autocomplete="new-password"
                        placeholder="Confirm password"
                    />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Register Button -->
                <div class="mt-6">
                    <x-primary-button class="w-full justify-center py-3 text-base">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>

                <!-- Login Link -->
                <div class="text-center mt-6">
                    <span class="text-gray-600 text-sm">
                        Already have an account?
                    </span>

                    <a
                        href="{{ route('login') }}"
                        class="text-indigo-600 hover:text-indigo-800 font-semibold ms-1"
                    >
                        Login
                    </a>
                </div>

            </form>

        </div>

    </div>

</x-guest-layout>