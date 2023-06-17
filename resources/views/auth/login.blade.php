<x-guest-layout>
    @php
        $userCount = \App\Models\User::count();
    @endphp

    @if ($userCount > 0)
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                    autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember" checked>
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                {{-- @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif --}}

                <x-primary-button class="ml-3" id="loginButton">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    @else
        <script>window.location = "{{ route('register') }}";</script>
    @endif

    <script>
        // Retrieve saved user data from localStorage
        var savedEmail = localStorage.getItem('rememberedEmail');
        var savedPassword = localStorage.getItem('rememberedPassword');

        // Set the email and password values if they exist
        if (savedEmail && savedPassword) {
            document.getElementById('email').value = savedEmail;
            document.getElementById('password').value = savedPassword;
        }

        // Listen for the login button click event
        document.getElementById('loginButton').addEventListener('click', function() {
            var emailInput = document.getElementById('email');
            var passwordInput = document.getElementById('password');
            var rememberCheckbox = document.getElementById('remember_me');

            // Check if the remember checkbox is checked
            if (rememberCheckbox.checked) {
                // Save the email and password to localStorage
                localStorage.setItem('rememberedEmail', emailInput.value);
                localStorage.setItem('rememberedPassword', passwordInput.value);
            } else {
                // Remove the saved email and password from localStorage
                localStorage.removeItem('rememberedEmail');
                localStorage.removeItem('rememberedPassword');
            }
        });
    </script>
</x-guest-layout>
