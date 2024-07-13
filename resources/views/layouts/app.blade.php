<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome/css/font-awesome.min.css">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.4.1/flowbite.min.css" rel="stylesheet" />

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Laravel Mix Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom Styles -->
    <style>
        /* Dark mode styling */
        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                background-color: #212121;
            }

            .dark\:text-white {
                color: #ffffff;
            }
        }

        /* Loader styling */
        .loader-wrapper {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background-color: whitesmoke;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 999;
            overflow: hidden;
        }
    </style>
</head>

<body class="font-sans antialiased bg-gray-100">
    <!-- Dynamic dark mode class binding -->
    <div class="dark:bg-gray-900" x-data="{ notification: 0, panier: 0, total: 0, quantity: 1 }">

        <!-- Include navigation -->
        @include('layouts.navigation')

        <!-- Loader -->
        <div class="loader-wrapper">
            <div class="loader">
                <img src="{{ asset('/images/preloader.gif') }}" id="preloader_img" alt="preloader" />
            </div>
        </div>

        <!-- Optional header section -->
        @isset($header)
            <header class="bg-white shadow dark:bg-gray-800">
                <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Main content section -->
        <main class="">
            @yield('content')
        </main>

        {{-- <x-footer class="mx-auto max-w-2xl lg:max-w-7xl" /> --}}

    </div>

    <!-- Flowbite JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.4.1/flowbite.min.js"></script>

    <!-- Custom JavaScript -->
    <script type="text/javascript">
        /* ======== Preloader ======== */
        $(document).ready(function() {
            var preloaderDelay = 350;
            var preloaderFadeOutTime = 500;

            function hidePreloader() {
                var loadingAnimation = $('.loader-wrapper');
                loadingAnimation.delay(preloaderDelay).fadeOut(preloaderFadeOutTime);
            }

            hidePreloader();
        });
    </script>
</body>

</html>
