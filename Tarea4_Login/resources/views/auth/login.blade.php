<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Inicio de sesión</h2>
        

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <div class="relative mt-1">
                <x-text-input id="password" class="block w-full pr-10"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5 text-gray-500 focus:outline-none" aria-label="Show password">
                    <!-- Eye (show) -->
                    <svg id="eyeShow" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.94 10.94a10.97 10.97 0 0114.12 0 1 1 0 01-1.42 1.42 8.97 8.97 0 00-11.28 0 1 1 0 01-1.42-1.42z" />
                        <path d="M10 6a4 4 0 100 8 4 4 0 000-8z" />
                    </svg>
                    <!-- Eye off (hide) -->
                    <svg id="eyeHide" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3.172 3.172a.75.75 0 011.06 0l12.596 12.596a.75.75 0 11-1.06 1.06L3.172 4.232a.75.75 0 010-1.06z" clip-rule="evenodd" />
                        <path d="M10 6a4 4 0 014 4c0 .342-.05.67-.141.97l1.518 1.518A8.953 8.953 0 0018.06 9.06 10.97 10.97 0 006.94 3.94l1.518 1.518A3.98 3.98 0 0110 6z" />
                        <path d="M7.05 8.05A4 4 0 0010 14a3.98 3.98 0 001.932-.52l1.518 1.518A8.953 8.953 0 001.94 10.94 10.97 10.97 0 007.05 8.05z" />
                    </svg>
                </button>
            </div>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const pwd = document.getElementById('password');
                const toggle = document.getElementById('togglePassword');
                const showIcon = document.getElementById('eyeShow');
                const hideIcon = document.getElementById('eyeHide');

                if (!pwd || !toggle) return;

                toggle.addEventListener('click', function () {
                    if (pwd.type === 'password') {
                        pwd.type = 'text';
                        showIcon.classList.add('hidden');
                        hideIcon.classList.remove('hidden');
                        toggle.setAttribute('aria-label', 'Hide password');
                    } else {
                        pwd.type = 'password';
                        showIcon.classList.remove('hidden');
                        hideIcon.classList.add('hidden');
                        toggle.setAttribute('aria-label', 'Show password');
                    }
                });
            });
        </script>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
