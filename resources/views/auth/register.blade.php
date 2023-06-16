<x-guest-layout>
    <h1 class="text-2xl font-bold mb-4">REGISTER FIRST ACCOUNT IN STI BALIUAG CLEARANCE SYSTEM</h1>
    <br>
    <form method="POST" action="{{ route('register') }}" class="max-w-md mx-auto">
        @csrf

        <!-- Name -->
        <div class="mb-4">
            <x-input-label for="name" :value="__('Full Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Secret Code -->
        <div class="mb-4">
            <x-input-label for="department" :value="__('Secret Code')" />
            <x-text-input id="department" class="block mt-1 w-full" type="password" name="department" :value="old('department')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('department')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between mt-4">
            {{-- <a class="text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a> --}}

            <x-primary-button>
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
<script>
    function encryptURL(url, key) {
        var encrypted = CryptoJS.AES.encrypt(url, key).toString();
        return encrypted;
    }

    var url = "http://127.0.0.1:8000/register";
    var encryptionKey = "secretKey";

    // Encrypt the URL
    var encryptedURL = encryptURL(url, encryptionKey);

    // Modify the URL without reloading the page
    var modifiedURL = window.location.origin + "/#" + encryptedURL;
    window.history.replaceState(null, null, modifiedURL);

    console.log("Modified URL: " + modifiedURL);
</script>
