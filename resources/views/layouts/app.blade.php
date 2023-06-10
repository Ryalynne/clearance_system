<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name', 'STI CLEARANCE') }}
    </title>
    {{-- <script src="{{ asset('build/assets/app-1e58d95a.js') }}"></script> --}}
    <!-- Fonts -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <footer>
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-center">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 - Developer (<a
                    href="https://www.facebook.com/Chunchunmarui/"
                    class="hover:underline">santiagoryan788@gmail.com)</a>
            </span>
        </div>
    </footer>
</body>


</html>
