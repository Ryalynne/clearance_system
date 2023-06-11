<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name', 'STI CLEARANCE') }}
    </title>
   
 
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('build/assets/app-0b55cb62.css') }}">
    <script src="{{ asset('build/assets/app-6870bb4e.js') }}"></script>
   
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
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
    $(document).ready(function() {
        $(".myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".myTable .tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
{{-- <style>
    .myInput:focus {
        border-color: 0 0 0 0.2rem rgba(5, 158, 0, 0.25);
        box-shadow: 0 0 0 0.2rem rgba(5, 158, 0, 0.25);
    }

    .dropdown-item.dropdown-active-success:hover,
    .dropdown-item.dropdown-active-success:focus,
    .dropdown-item.dropdown-active-success.active {
        color: rgb(255, 255, 255);
    }
</style> --}}
