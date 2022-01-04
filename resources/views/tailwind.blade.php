<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark2">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap"
        rel="stylesheet">

    <!-- Styles -->

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
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

<body>



    <header class="w-full bg-white border-b">
        <nav class="">
            <div class="px-6 bg-white border-b lg:px-0 border-slate-300">
                <div class="flex items-center justify-between h-16 mx-auto max-w-7xl">

                    <a href="#" class="flex items-center justify-center flex-1 logo ">
                        <img src="http://larax.pl/pyramid.svg" alt="" class="w-auto h-8 mr-4">
                        <span class="border-emerald-700">Lara</span>
                        <span class="">x</span>
                        <span class="text-emerald-700">.</span>
                    </a>
                    <a href="https://www.vecteezy.com/vector-art/596339-pyramid-logo-and-symbol-business-abstract-design-template-vector"
                        class="sr-only">Source</a>

                    <div class="h-full text-slate-500" x-data="{open: false}">
                        <!-- user menu -->
                        <div class="relative z-10 hidden h-full md:block">
                            <div class="flex items-center h-full cursor-pointer hover:text-slate-600 "
                                @click="open = ! open">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" :class="{ 'rotate-180': open }"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <!-- user menu -->
                            <div class="absolute right-0 w-56 bg-white border shadow-lg border-slate-300 border-t-white user-menu"
                                x-show="open" @click.away="open = false">
                                <h4 class="px-3 pt-2 text-xs font-semibold text-right text-slate-400">Ustawienia
                                    użytkownika
                                </h4>
                                <ul class="">
                                    <li>Profil</li>
                                    <li>Zmiana hasła</li>
                                    <li>Powiadomienia</li>
                                    <li>Logowanie dwuetapowe</li>
                                    <li>Wyloguj się</li>
                                </ul>
                            </div>

                        </div>
                        <!-- hamburger -->
                        <div class="md:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="items-center justify-between hidden h-12 px-8 mx-auto bg-white max-w-7xl md:flex lg:px-0">
                <div class="flex flex-grow h-full main-menu">
                    <a href="" class="relative inline-flex items-center active">
                        <svg xmlns="http://www.w3.org/2000/svg" class=""" fill=" none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span>Panel</span>
                    </a>

                    <a href="" class="relative inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                        Kontrakty
                    </a>

                    <a href="" class="relative inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        Link 3
                    </a>

                    <a href="" class="relative inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        Link 4
                    </a>

                </div>

                <div class="relative">
                    <input type="text" placeholder="Wyszukaj"
                        class="pl-8 pr-3 text-sm leading-7 border rounded-sm py-1x" />
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute w-5 h-5 top-1 left-1" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>
        </nav>
    </header>

    <div class="flex flex-col justify-between px-6 mx-auto my-6 space-y-2 max-w-7xl md:flex-row lg:px-2 md:space-y-0">
        <h2 class="text-xl font-semibold">Panel</h2>

        <ul class="flex items-center breadcrumbs">
            <li>Home</li>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd" />
            </svg>
            <li>Ustawienia</li>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd" />
            </svg>
            <li>Profil</li>
        </ul>
    </div>
    <main class="px-6 mx-auto my-8 max-w-7xl lg:px-2">
        <div class="max-w-3xl p-4 text-justify border bg-slate-50 first-letter:font-semibold">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi numquam itaque iste suscipit
            necessitatibus
            laudantium illum nisi quaerat cumque reprehenderit perspiciatis deleniti, accusantium, eaque aperiam
            mollitia
            ducimus eveniet et eos asperiores. Tempora nulla ea debitis autem incidunt labore beatae, rem est sapiente
            cumque provident ullam commodi animi officia. Suscipit quod cum recusandae quisquam tempore ut animi, cumque
            quo
            perferendis, fugiat ipsam maiores maxime non iste libero! Ipsam officia dolorem autem incidunt? Facilis modi
            molestias neque ut voluptas recusandae deserunt ipsum ipsam officia possimus, sapiente iure perferendis
            provident quam totam vel quisquam expedita! Quas assumenda quia cumque totam fugiat velit tempore?
        </div>
    </main>








    @stack('modals')
    @livewireScripts
</body>

</html>