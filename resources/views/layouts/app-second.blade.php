<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Arsyadam') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Scripts -->
        @vite('resources/js/app.js')
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">

        <x-jet-banner />

        <div class="min-h-screen bg-white">
            <nav x-data="{ open: false }" class="bg-gray-100 border-b border-gray-100 rounded-b-[30px] shadow-lg ">
                @livewire('navigation-menu')
            </nav>

            <!-- Page Content -->
            <main >
                {{ $slot }}
            </main>

                
            <footer class="bg-dark rounded-t-2xl mt-10">
                <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                    <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="https://flowbite.com/" class="flex items-center">
                            <a href="{{ route('home') }}">
                                <x-jet-application-mark-dark class="block h-10 w-auto" />
                            </a>
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                        <div>
                            <h2 class="mb-6 text-sm font-semibold  uppercase text-white">Blog</h2>
                            <ul class="text-gray-400 font-medium">
                                <li class="mb-1">
                                    <a href="https://flowbite.com/" class="hover:underline">Traveling</a>
                                </li>
                                <li class="mb-1">
                                    <a href="https://tailwindcss.com/" class="hover:underline">Experiance</a>
                                </li>
                                <li class="mb-1">
                                    <a href="https://tailwindcss.com/" class="hover:underline">Opinion</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold  uppercase text-white">Archived</h2>
                            <ul class="text-gray-400 font-medium">
                                <li class="mb-2">
                                    <a href="https://github.com/themesberg/flowbite" class="hover:underline ">2023</a>
                                </li>
                                <li class="mb-2">
                                    <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">2024</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold uppercase text-white">Contact Me</h2>
                            <ul class="text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="#" class="hover:underline">arsyadamid.work@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="my-6  sm:mx-auto border-gray-700 lg:my-8" />
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm sm:text-center text-gray-400">© {{ date("Y") }} Arsyadam All Rights Reserved.
                    </span>
                
                </div>
                </div>
            </footer>

        </div>

        @stack('modals')

        @livewireScripts
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

    </body>
</html>
