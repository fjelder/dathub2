<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark2">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->

    <!-- Styles -->

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">


    @livewireStyles
    <style>
        [x-cloak] {
            display: none !important;
        }

        .drodown-body {
            margin-top: 21px;
            min-width: 10rem;
            max-width: 20rem;
        }
    </style>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>


</head>

<body x-data="{ mobileMenuOpen: false, asideOpen: true }"
    class="flex flex-col min-h-screen antialiased text-gray-600 bg-gray-50 dark:bg-gray-700 dark:text-gray-200">


    @livewire('navigation-menu')
    <div class="flex-grow">
        <div class="box-border relative z-50 h-16 bg-white border-b border-gray-300 shadow-sm">

            @include('layouts.header')
            <!-- mobile menu -->
            <x-mobile-menu />

        </div>


        @if (isset($header) || isset($breadcrumbs))
        <header
            class="flex flex-col items-center px-6 py-6 mx-auto space-y-4 border-b lg:flex-row lg:justify-between max-w-7xl xl:px-0 lg:space-y-0 dark:border-gray-600">

            <div class="w-full text-2xl font-semibold lg:w-auto">
                @if(isset($header))
                {{ $header }}
                @endif
            </div>

            <div class="w-full lg:w-auto">
                @if(isset($breadcrumbs))
                {{ $breadcrumbs }}
                @endif
            </div>
        </header>
        @endif


        <div class="flex mx-auto max-w-7xl">
            @isset($aside)
            <aside class="hidden max-w-xs py-10 border-r xl:block" x-show="asideOpen">
                {{$aside}}
            </aside>
            @endif

            <main class="w-full py-10 lg:ml-6">
                {{$slot}}

                <!-- test section -->
                <div class="hidden2">
                    <div class="relative h-16">
                        <label for="name" class="absolute text-xs font-medium text-gray-500 top-3 left-3">
                            Imię i nazwisko
                        </label>

                        <input type="text" id="name" placeholder=""
                            class="absolute inset-0 w-full px-3 pb-3 text-gray-700 bg-transparent border-gray-200 sm:text-sm pt-9 focus:outline-none focus:ring-0 focus:border-green-300" />
                    </div>


                    <!-- border section -->
                    <div class="hidden sm:block" aria-hidden="true">
                        <div class="py-5">
                            <div class="border-t border-gray-200"></div>
                        </div>
                    </div>




                    <section class="mb-10 bg-gray-100">
                        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
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

                                        <div class="grid grid-cols-1 gap-4 text-center sm:grid-cols-3">
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


                    <ul class="flex text-center border-b border-gray-200 tabs">
                        <li class="flex-1">
                            <a class="" href="">
                                <span class=""></span>
                                Nowy kontakt
                            </a>
                        </li>

                        <li class="flex-1">
                            <a class="active" href="">
                                <span class=""></span>
                                Messages </a>
                        </li>

                        <li class="flex-1">
                            <a class="" href="">
                                <span class=""></span>
                                Archive </a>
                        </li>

                        <li class="flex-1">
                            <a class="" href="">
                                <span class=""></span>
                                Notifications </a>
                        </li>
                    </ul>



                    <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
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


    @include('layouts.footer')


    @stack('modals')
    @livewireScripts
</body>

</html>