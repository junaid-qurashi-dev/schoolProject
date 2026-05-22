<x-guest-layout>

    <div class="min-h-screen flex items-center justify-center bg-gray-100 py-10">

        <div class="w-full max-w-md bg-white shadow-xl rounded-2xl p-8">

            <!-- Heading -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">
                    School Management
                </h1>

                <p class="text-gray-500 mt-2">
                    Login to your account
                </p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div>
                    <x-input-label for="email" :value="__('Email Address')" />

                    <x-text-input
                        id="email"
                        class="block mt-2 w-full rounded-lg"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autofocus
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
                        autocomplete="current-password"
                        placeholder="Enter your password"
                    />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember + Forgot -->
                <div class="flex items-center justify-between mt-5">

                    <label for="remember_me" class="inline-flex items-center">
                        <input
                            id="remember_me"
                            type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember"
                        >

                        <span class="ms-2 text-sm text-gray-600">
                            Remember Me
                        </span>
                    </label>

                    @if (Route::has('password.request'))
                        <a
                            class="text-sm text-indigo-600 hover:text-indigo-800 font-medium"
                            href="{{ route('password.request') }}"
                        >
                            Forgot Password?
                        </a>
                    @endif

                </div>

                <!-- Login Button -->
                <div class="mt-6">
                    <x-primary-button class="w-full justify-center py-3 text-base">
                        {{ __('Log In') }}
                    </x-primary-button>
                </div>

                <!-- Register -->
                @if (Route::has('register'))
                    <div class="text-center mt-6">
                        <span class="text-gray-600 text-sm">
                            Don't have an account?
                        </span>

                        <a
                            href="{{ route('register') }}"
                            class="text-indigo-600 hover:text-indigo-800 font-semibold ms-1"
                        >
                            Register
                        </a>
                    </div>
                @endif

            </form>

        </div>

    </div>

</x-guest-layout>