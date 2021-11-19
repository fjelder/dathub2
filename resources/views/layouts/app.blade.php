<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->

    <!-- Styles -->

    {{--
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">


    @livewireStyles
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body x-data="{ mobileMenuOpen: false }" class="antialiased bg-gray-50 flex flex-col min-h-screen">


    <div class="bg-white hidden">
        <div>
            <x-mobile-menu />
        </div>
        <x-jet-banner />
        <header class="relative bg-white border-b border-gray-200">
            @livewire('navigation-menu')
        </header>

        @if (isset($header) || isset($breadcrumbs))
        <div class="bg-white mt-2">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row justify-between">
                <div>
                    @if(isset($header))
                    <h2>{{ $header }}</h2>
                    @endif
                </div>
                <div>
                    @if(isset($breadcrumbs))
                    {{ $breadcrumbs }}
                    @endif
                </div>
            </div>
        </div>
        @endif
        <main>
            {{$slot}}
        </main>
    </div>

    <div class="flex-grow">
        <div class="relative border border-gray-300 shadow-sm bg-white h-16 box-border z-20">
            <nav class="flex justify-between max-w-7xl mx-auto h-full">
                <div class="hidden xl:flex items-center">

                    <!-- extra menu -->
                    <a class="hidden xl:block mr-16 text-gray-500 hover:text-gray-800" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </a>

                    <ul
                        class="hidden xl:flex xl:items-center font-semibold text-sm whitespace-nowrap text-gray-600 space-x-10">
                        <li class="mr-12q"><a class="hover:text-green-700 text-green-600" href="#">Home</a></li>
                        <li class="mr-12q"><a class="hover:text-green-700" href="#">Kontrakty</a></li>
                        <li class="mr-12q"><a class="hover:text-green-700" href="#">Bazy danych</a></li>

                        <li class="">
                            <!-- This example requires Tailwind CSS v2.0+ -->
                            <div class="relative inline-block" x-data="{open: false}">
                                <div class="">
                                    <button @mouseenter="open = true" type="button"
                                        class="inline-flex justify-center w-full hover:text-green-700 font-semibold"
                                        id="menu-button" aria-expanded="true" aria-haspopup="true">
                                        Bazy danych
                                        <!-- Heroicon name: solid/chevron-down -->
                                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>


                                <div class="origin-top-left absolute left-0 w-56a shadow-xl bg-white focus:outline-none border-gray-300 border-b border-l border-r"
                                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
                                    style="margin-top: 21px; min-width: 10rem; max-width: 20rem;" x-show="open" x-cloak
                                    @mouseleave="open = false" x-transition:enter=" transition ease-out duration-100"
                                    x-transition:enter-start="opacity-0 transform scale-95 "
                                    x-transition:enter-end="opacity-100 transform scale-100"
                                    x-transition:leave="transition ease-in duration-100"
                                    x-transition:leave-start="opacity-100 transform scale-100"
                                    x-transition:leave-end="opacity-0 transform scale-95">
                                    <div class="border-t border-white"></div>
                                    <div class="py-2 font-medium text-gray-600" role="none">
                                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100 " role="menuitem"
                                            tabindex="-1" id="menu-item-0">Kontakty</a>
                                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem"
                                            tabindex="-1" id="menu-item-1">Linie kolejowe</a>
                                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem"
                                            tabindex="-1" id="menu-item-2">Stacje kolejowe</a>
                                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem"
                                            tabindex="-1" id="menu-item-2">Przejazdy kolejowo - drogowe</a>
                                        <form method="POST" action="#" role="none">
                                            <button type="submit"
                                                class="-mb-2 border-t text-gray-700 block w-full text-left px-4 py-2 text-sm hover:bg-green-200 bg-gray-200a font-semibold"
                                                role="menuitem" tabindex="-1" id="menu-item-3">
                                                Sign out
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </li>


                        <!-- <li><a class="hover:text-gray-600" href="#">Brand</a></li> -->
                    </ul>

                    <div class="hidden xl:flex2 items-center">
                        <a class="mr-10 hover:text-gray-600" href="#">
                            <svg width="23" height="20" viewbox="0 0 23 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.4998 19.2061L2.70115 9.92527C1.92859 9.14433 1.41864 8.1374 1.24355 7.04712C1.06847 5.95684 1.23713 4.8385 1.72563 3.85053V3.85053C2.09464 3.10462 2.63366 2.45803 3.29828 1.96406C3.9629 1.47008 4.73408 1.14284 5.5483 1.00931C6.36252 0.875782 7.19647 0.939779 7.98144 1.19603C8.7664 1.45228 9.47991 1.89345 10.0632 2.48319L11.4998 3.93577L12.9364 2.48319C13.5197 1.89345 14.2332 1.45228 15.0182 1.19603C15.8031 0.939779 16.6371 0.875782 17.4513 1.00931C18.2655 1.14284 19.0367 1.47008 19.7013 1.96406C20.3659 2.45803 20.905 3.10462 21.274 3.85053V3.85053C21.7625 4.8385 21.9311 5.95684 21.756 7.04712C21.581 8.1374 21.071 9.14433 20.2984 9.92527L11.4998 19.2061Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </a>
                        <a class="flex items-center hover:text-gray-600" href="#">
                            <svg class="mr-3" width="23" height="23" viewbox="0 0 23 23" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.1159 8.72461H2.50427C1.99709 8.72461 1.58594 9.12704 1.58594 9.62346V21.3085C1.58594 21.8049 1.99709 22.2074 2.50427 22.2074H18.1159C18.6231 22.2074 19.0342 21.8049 19.0342 21.3085V9.62346C19.0342 9.12704 18.6231 8.72461 18.1159 8.72461Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path
                                    d="M6.34473 6.34469V4.95676C6.34473 3.85246 6.76252 2.79338 7.5062 2.01252C8.24988 1.23165 9.25852 0.792969 10.3102 0.792969C11.362 0.792969 12.3706 1.23165 13.1143 2.01252C13.858 2.79338 14.2758 3.85246 14.2758 4.95676V6.34469"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            <span
                                class="inline-block w-6 h-6 text-center bg-gray-100 rounded-full font-semibold font-heading">3</span>
                        </a>
                    </div>
                </div>

                <div class="flex-shrink-0 flex items-center ml-6 xl:ml-0">
                    <a class="flex-shrink-0 xl:mx-auto text-2xl font-bold text-gray-600 flex items-center space-x-3"
                        href="#">
                        <img class="h-9" src="/larax.svg" alt="" width="auto">
                        <span class="">{{config('app.name', 'Larax')}}</span>
                    </a>
                </div>

                <div class="flex items-center space-x-3">

                    <div class="hidden xl:inline-block ">

                        <div class="relative text-gray-600 h-9">
                            <input
                                class="py-1 px-12 placeholder-gray-400 text-xs font-semibold font-heading bg-gray-100 border border-gray-200 focus:ring-green-300 focus:border-green-300 rounded-sm text-gray-600 h-9"
                                type="text" placeholder="WYSZUKAJ">
                            <div class="absolute top-0 left-0 px-2 text-green-400 h-9 border-r">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mt-2 h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>

                            <div class="absolute top-2 right-2 text-green-300 hover:text-green-700 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </div>

                        </div>
                    </div>


                    <div
                        class="hidden xl:flex items-center h-full border-l font-semibold font-heading hover:text-gray-600 whitespace-nowrap">
                        <a class="ml-2 rounded-full border hover:border-green-300" href="#">
                            <svg class="" width="32" height="31" viewbox="0 0 32 31" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.0006 16.3154C19.1303 16.3154 21.6673 13.799 21.6673 10.6948C21.6673 7.59064 19.1303 5.07422 16.0006 5.07422C12.871 5.07422 10.334 7.59064 10.334 10.6948C10.334 13.799 12.871 16.3154 16.0006 16.3154Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path
                                    d="M24.4225 23.8963C23.6678 22.3507 22.4756 21.0445 20.9845 20.1298C19.4934 19.2151 17.7647 18.7295 15.9998 18.7295C14.2349 18.7295 12.5063 19.2151 11.0152 20.1298C9.52406 21.0445 8.33179 22.3507 7.57715 23.8963"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </a>
                    </div>

                </div>

                <!-- hamburger -->
                <a class="navbar-burger self-center mr-12 xl:hidden" href="#">
                    <svg width="20" height="12" viewbox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1 2H19C19.2652 2 19.5196 1.89464 19.7071 1.70711C19.8946 1.51957 20 1.26522 20 1C20 0.734784 19.8946 0.48043 19.7071 0.292893C19.5196 0.105357 19.2652 0 19 0H1C0.734784 0 0.48043 0.105357 0.292893 0.292893C0.105357 0.48043 0 0.734784 0 1C0 1.26522 0.105357 1.51957 0.292893 1.70711C0.48043 1.89464 0.734784 2 1 2ZM19 10H1C0.734784 10 0.48043 10.1054 0.292893 10.2929C0.105357 10.4804 0 10.7348 0 11C0 11.2652 0.105357 11.5196 0.292893 11.7071C0.48043 11.8946 0.734784 12 1 12H19C19.2652 12 19.5196 11.8946 19.7071 11.7071C19.8946 11.5196 20 11.2652 20 11C20 10.7348 19.8946 10.4804 19.7071 10.2929C19.5196 10.1054 19.2652 10 19 10ZM19 5H1C0.734784 5 0.48043 5.10536 0.292893 5.29289C0.105357 5.48043 0 5.73478 0 6C0 6.26522 0.105357 6.51957 0.292893 6.70711C0.48043 6.89464 0.734784 7 1 7H19C19.2652 7 19.5196 6.89464 19.7071 6.70711C19.8946 6.51957 20 6.26522 20 6C20 5.73478 19.8946 5.48043 19.7071 5.29289C19.5196 5.10536 19.2652 5 19 5Z"
                            fill="#8594A5"></path>
                    </svg>
                </a>

            </nav>
            <!-- mobile menu -->
            <div class="hidden navbar-menu fixed top-0 left-0 bottom-0 w-5/6 max-w-sm z-50">
                <div class="navbar-backdrop fixed inset-0 bg-gray-900 opacity-50"></div>
                <nav class="relative flex flex-col py-6 px-6 w-full h-full bg-white border-r overflow-y-auto">
                    <div class="flex items-center mb-8">
                        <a class="mr-auto text-2xl font-bold text-gray-600 flex items-center space-x-3" href="#">
                            <img class="h-9" src="yofte-assets/logos/larax.svg" alt="" width="auto">
                            <span>Larax</span>
                        </a>
                        <button class="navbar-close">
                            <svg class="h-2 w-2 text-gray-500 cursor-pointer" width="10" height="10" viewbox="0 0 10 10"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.00002 1L1 9.00002M1.00003 1L9.00005 9.00002" stroke="black"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex mb-8 justify-between">
                        <a class="inline-flex items-center font-semibold font-heading" href="#">
                            <svg class="mr-3" width="32" height="31" viewbox="0 0 32 31" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.0006 16.3154C19.1303 16.3154 21.6673 13.799 21.6673 10.6948C21.6673 7.59064 19.1303 5.07422 16.0006 5.07422C12.871 5.07422 10.334 7.59064 10.334 10.6948C10.334 13.799 12.871 16.3154 16.0006 16.3154Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path
                                    d="M24.4225 23.8963C23.6678 22.3507 22.4756 21.0445 20.9845 20.1298C19.4934 19.2151 17.7647 18.7295 15.9998 18.7295C14.2349 18.7295 12.5063 19.2151 11.0152 20.1298C9.52406 21.0445 8.33179 22.3507 7.57715 23.8963"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            <span>Sign In</span>
                        </a>
                        <div class="flex items-center">
                            <a class="mr-10" href="#">
                                <svg width="23" height="20" viewbox="0 0 23 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.4998 19.2061L2.70115 9.92527C1.92859 9.14433 1.41864 8.1374 1.24355 7.04712C1.06847 5.95684 1.23713 4.8385 1.72563 3.85053V3.85053C2.09464 3.10462 2.63366 2.45803 3.29828 1.96406C3.9629 1.47008 4.73408 1.14284 5.5483 1.00931C6.36252 0.875782 7.19647 0.939779 7.98144 1.19603C8.7664 1.45228 9.47991 1.89345 10.0632 2.48319L11.4998 3.93577L12.9364 2.48319C13.5197 1.89345 14.2332 1.45228 15.0182 1.19603C15.8031 0.939779 16.6371 0.875782 17.4513 1.00931C18.2655 1.14284 19.0367 1.47008 19.7013 1.96406C20.3659 2.45803 20.905 3.10462 21.274 3.85053V3.85053C21.7625 4.8385 21.9311 5.95684 21.756 7.04712C21.581 8.1374 21.071 9.14433 20.2984 9.92527L11.4998 19.2061Z"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </a>
                            <a class="flex items-center" href="#">
                                <svg class="mr-3" width="23" height="23" viewbox="0 0 23 23" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.1159 8.72461H2.50427C1.99709 8.72461 1.58594 9.12704 1.58594 9.62346V21.3085C1.58594 21.8049 1.99709 22.2074 2.50427 22.2074H18.1159C18.6231 22.2074 19.0342 21.8049 19.0342 21.3085V9.62346C19.0342 9.12704 18.6231 8.72461 18.1159 8.72461Z"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M6.34473 6.34469V4.95676C6.34473 3.85246 6.76252 2.79338 7.5062 2.01252C8.24988 1.23165 9.25852 0.792969 10.3102 0.792969C11.362 0.792969 12.3706 1.23165 13.1143 2.01252C13.858 2.79338 14.2758 3.85246 14.2758 4.95676V6.34469"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                                <span
                                    class="inline-block w-6 h-6 text-center bg-gray-100 rounded-full font-semibold font-heading">3</span>
                            </a>
                        </div>
                    </div>
                    <input
                        class="block mb-10 py-5 px-8 bg-gray-100 rounded-md border-transparent focus:ring-blue-300 focus:border-blue-300 focus:outline-none"
                        type="search" placeholder="Search">
                    <ul class="text-3xl font-bold font-heading">
                        <li class="mb-8"><a href="#">Category</a></li>
                        <li class="mb-8"><a href="#">Collection</a></li>
                        <li class="mb-8"><a href="#">Story</a></li>
                        <li><a href="#">Brand</a></li>
                    </ul>
                </nav>
            </div>

        </div>


        <header
            class="flex items-center flex-col lg:flex-row lg:justify-between max-w-7xl mx-auto border-b py-6 px-6 xl:px-0 space-y-4 lg:space-y-0">

            <div class="w-full lg:w-auto text-2xl font-semibold text-gray-600">
                Kontakty
            </div>

            <div class="w-full lg:w-auto mt-0">

                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="#" class="text-gray-700 hover:text-gray-900 ml-1 md:ml-2 text-sm font-medium">
                                Home
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <a href="#"
                                    class="text-gray-700 hover:text-gray-900 ml-1 md:ml-2 text-sm font-medium">Kontakty</a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-400 ml-1 md:ml-2 text-sm font-medium">Lista kontaktów</span>
                            </div>
                        </li>
                    </ol>
                </nav>

            </div>
        </header>


        <div class="flex max-w-7xl mx-auto">
            <aside class="py-10 border-r max-w-xs hidden xl:block">
                <ul class="bg-gray-50 w-40 text-gray-500 text-sm font-medium cursor-pointer">
                    <li class="px-4 py-2 w-full hover:bg-gray-100">
                        Lista kontaktów
                    </li>
                    <li class="px-4 py-2 w-full hover:bg-gray-100">Lista firm</li>
                    <!-- active li add class -- relative border border-r-0 -->
                    <li
                        class="px-4 py-2 w-full hover:bg-gray-100 font-semibold text-green-500 relative border border-r-0">
                        <div class="absolute border-r border-gray-50 inset-0 h-full w-full box-content"></div>
                        Nowa osoba
                    </li>
                    <li class="px-4 py-2 w-full rounded-b-lg hover:bg-gray-100">Nowa firma</li>
                </ul>
            </aside>

            <main class="py-10 lg:ml-6 w-full">

                <div class="hidden2">
                    <div class="md:grid md:grid-cols-3 md:gap-4">
                        <div class="md:col-span-1">
                            <div class="px-5 sm:px-0">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Nowa osoba kontaktowa</h3>
                                <p class="mt-1 text-sm text-gray-600">
                                    Wprowadź wszystkie wymagane informacje osobowe.
                                </p>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form action="#" method="POST">
                                <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="first-name"
                                                    class="block text-sm font-medium text-gray-700">First name</label>
                                                <input type="text" name="first-name" id="first-name"
                                                    autocomplete="given-name"
                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="last-name"
                                                    class="block text-sm font-medium text-gray-700">Last name</label>
                                                <input type="text" name="last-name" id="last-name"
                                                    autocomplete="family-name"
                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="col-span-6 sm:col-span-4">
                                                <label for="email-address"
                                                    class="block text-sm font-medium text-gray-700">Email
                                                    address</label>
                                                <input type="text" name="email-address" id="email-address"
                                                    autocomplete="email"
                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="country"
                                                    class="block text-sm font-medium text-gray-700">Country</label>
                                                <select id="country" name="country" autocomplete="country-name"
                                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option>United States</option>
                                                    <option>Canada</option>
                                                    <option>Mexico</option>
                                                </select>
                                            </div>

                                            <div class="col-span-6">
                                                <label for="street-address"
                                                    class="block text-sm font-medium text-gray-700">Street
                                                    address</label>
                                                <input type="text" name="street-address" id="street-address"
                                                    autocomplete="street-address"
                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                <label for="city"
                                                    class="block text-sm font-medium text-gray-700">City</label>
                                                <input type="text" name="city" id="city" autocomplete="address-level2"
                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                <label for="region"
                                                    class="block text-sm font-medium text-gray-700">State /
                                                    Province</label>
                                                <input type="text" name="region" id="region"
                                                    autocomplete="address-level1"
                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                <label for="postal-code"
                                                    class="block text-sm font-medium text-gray-700">ZIP / Postal
                                                    code</label>
                                                <input type="text" name="postal-code" id="postal-code"
                                                    autocomplete="postal-code"
                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button type="submit"
                                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- test section -->
                <div class="hidden">
                    <div class="relative h-16">
                        <label for="name" class="absolute text-xs font-medium text-gray-500 top-3 left-3">
                            Imię i nazwisko
                        </label>

                        <input type="text" id="name" placeholder="John Doe"
                            class="absolute inset-0 w-full px-3 pb-3 bg-transparent border-gray-200 rounded-lg sm:text-sm pt-9" />
                    </div>


                    <!-- border section -->
                    <div class="hidden sm:block" aria-hidden="true">
                        <div class="py-5">
                            <div class="border-t border-gray-200"></div>
                        </div>
                    </div>




                    <section class="bg-gray-100">
                        <div class="px-4 py-16 mx-auto max-w-screen-xl sm:px-6 lg:px-8">
                            <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5">
                                <div class="lg:py-12 lg:col-span-2">
                                    <p class="max-w-xl text-lg">
                                        At the same time, the fact that we are wholly owned and totally independent from
                                        manufacturer and other group
                                        control gives you confidence that we will only recommend what is right for you.
                                    </p>

                                    <div class="mt-8">
                                        <a href="" class="text-2xl font-bold text-pink-600"> 0151 475 4450 </a>

                                        <address class="mt-2 not-italic">282 Kevin Brook, Imogeneborough, CA 58517
                                        </address>
                                    </div>
                                </div>

                                <div class="p-8 bg-white rounded-lg shadow-lg lg:p-12 lg:col-span-3">
                                    <form action="" class="space-y-4">
                                        <div>
                                            <label class="sr-only" for="name">Name</label>
                                            <input class="w-full p-3 text-sm border-gray-200 rounded-lg"
                                                placeholder="Name" type="text" id="name" />
                                        </div>

                                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                            <div>
                                                <label class="sr-only" for="email">Email</label>
                                                <input class="w-full p-3 text-sm border-gray-200 rounded-lg"
                                                    placeholder="Email address" type="email" id="email" />
                                            </div>

                                            <div>
                                                <label class="sr-only" for="phone">Phone</label>
                                                <input class="w-full p-3 text-sm border-gray-200 rounded-lg"
                                                    placeholder="Phone Number" type="tel" id="phone" />
                                            </div>
                                        </div>

                                        <div class="text-center grid grid-cols-1 gap-4 sm:grid-cols-3">
                                            <div>
                                                <input class="sr-only" id="option1" type="radio" tabindex="-1" />
                                                <label for="option1"
                                                    class="block w-full p-3 border border-gray-200 rounded-lg"
                                                    tabindex="0">
                                                    <span class="text-sm font-medium"> Option 1 </span>
                                                </label>
                                            </div>

                                            <div>
                                                <input class="sr-only" id="option2" type="radio" tabindex="-1" />
                                                <label for="option2"
                                                    class="block w-full p-3 border border-gray-200 rounded-lg"
                                                    tabindex="0">
                                                    <span class="text-sm font-medium"> Option 2 </span>
                                                </label>
                                            </div>

                                            <div>
                                                <input class="sr-only" id="option3" type="radio" tabindex="-1" />
                                                <label for="option3"
                                                    class="block w-full p-3 border border-gray-200 rounded-lg"
                                                    tabindex="0">
                                                    <span class="text-sm font-medium"> Option 3 </span>
                                                </label>
                                            </div>
                                        </div>

                                        <div>
                                            <label class="sr-only" for="message">Message</label>
                                            <textarea class="w-full p-3 text-sm border-gray-200 rounded-lg"
                                                placeholder="Message" rows="8" id="message"></textarea>
                                        </div>

                                        <div class="mt-4">
                                            <button type="submit"
                                                class="inline-flex items-center justify-center w-full px-5 py-3 text-white bg-black rounded-lg sm:w-auto">
                                                <span class="font-medium"> Send Enquiry </span>

                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-3" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                                </svg>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>


                    <ul class="flex text-center border-b border-gray-200">
                        <li class="flex-1">
                            <a class="relative block p-4 text-sm font-medium bg-white border-t border-l border-r border-gray-200"
                                href="">
                                <span class="absolute inset-x-0 w-full h-px bg-white -bottom-px"></span>
                                Nowy kontakt
                            </a>
                        </li>

                        <li class="flex-1">
                            <a class="block p-4 text-sm font-medium text-gray-500" href=""> Messages </a>
                        </li>

                        <li class="flex-1">
                            <a class="block p-4 text-sm font-medium text-gray-500" href=""> Archive </a>
                        </li>

                        <li class="flex-1">
                            <a class="block p-4 text-sm font-medium text-gray-500" href=""> Notifications </a>
                        </li>
                    </ul>



                    <div class="px-4 py-16 mx-auto max-w-screen-xl sm:px-6 lg:px-8">
                        <div class="max-w-lg mx-auto text-center">
                            <h1 class="text-2xl font-bold sm:text-3xl">Nowa osoba</h1>

                            <p class="mt-4 text-gray-500">
                                Wprowadź wszystkie wymagane informacje osobowe.
                            </p>
                        </div>

                        <form action="" class="max-w-xl mx-auto mt-8 mb-0 space-y-4">
                            <div>
                                <label for="email" class="sr-only">Email</label>

                                <div class="relative">
                                    <input type="email"
                                        class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
                                        placeholder="Enter email" />

                                    <span class="absolute inset-y-0 inline-flex items-center right-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                        </svg>
                                    </span>
                                </div>
                            </div>

                            <div>
                                <label for="password" class="sr-only">Password</label>
                                <div class="relative">
                                    <input type="password"
                                        class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
                                        placeholder="Enter password" />

                                    <span class="absolute inset-y-0 inline-flex items-center right-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>

                            <div class="flex items-center justify-between">
                                <p class="text-sm text-gray-500">
                                    No account?
                                    <a class="underline" href="">Sign up</a>
                                </p>

                                <button type="submit"
                                    class="inline-block px-5 py-3 ml-3 text-sm font-medium text-white bg-blue-500 rounded-lg">
                                    Sign in
                                </button>
                            </div>
                        </form>
                    </div>

                </div>

            </main>
        </div>

    </div>


    <footer class="bg-white dark:bg-gray-800 border-t border-gray-300">
        <div class="container px-6 py-8 mx-auto">
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @php $linksTitle = ['Kolejowe', 'Informacyjne', 'Poznań', 'Sieciowe']; @endphp
                @for ($i = 0; $i < count($linksTitle); $i++) <div>
                    <div class="text-xs font-medium text-gray-400 uppercase">
                        {{$linksTitle[$i]}}
                    </div>
                    @foreach (DB::select('select * from footer_links where `group` = ?', [$i+1]) as $link)
                    <a href="{{$link->protocol}}://{{$link->link}}" target="_blank"
                        class="block mt-3 text-sm font-medium text-gray-500 duration-700 dark:text-gray-300 hover:text-gray-400 dark:hover:text-gray-200 hover:underline">
                        {{$link->title}}
                    </a>
                    @endforeach
            </div>
            @endfor
        </div>

        <hr class="my-10 dark:border-gray-700">

        <div class="sm:flex sm:items-center sm:justify-between">
            <p class="text-sm text-gray-400">© {{config('app.name', 'Larax')}} {{config('app.laraxVersion',
                '1.0')}},
                2021.</p>

            <div class="flex mt-3 -mx-2 sm:mt-0">
                <a href="#" class="mx-2 text-gray-400 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                        </path>
                    </svg>
                </a>

                <a href="#" class="mx-2 text-gray-400 hover:text-gray-500 dark:hover:text-gray-300"
                    aria-label="Facebook">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                        </path>
                    </svg>
                </a>

                <a href="#" class="mx-2 text-gray-400 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Github">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
        </div>
    </footer>


    @stack('modals')
    @livewireScripts
</body>

</html>