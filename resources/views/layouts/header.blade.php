<nav class="relative flex justify-between h-full mx-auto max-w-7xl">
    <!-- main menu -->
    <div class="items-center hidden xl:flex">


        <ul
            class="hidden h-full space-x-5 text-sm font-medium text-gray-600 bg-white main-menu xl:flex xl:items-center whitespace-nowrap">
            <li class="{{ Request::routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>

            @if(Auth::user()->is_admin)
            <x-jet-nav-link href="{{ route('users.index') }}" :active="request()->routeIs('users.index')">
                {{ __('Users') }}
            </x-jet-nav-link>
            @endif

            <li class="">
                <a class="" href="#">Kontrakty</a>
            </li>

            <li class="{{ Request::Is('data*') ? 'active' : '' }}">
                <x-ui.dropdown-main-menu title="Dane" direct="left" icon="chip" iconStyle='o'>

                    <x-ui.dropdown-main-menu-link href="{{ route('contacts.index', []) }}"
                        class="{{ Request::routeIs('contacts.*') ? 'active' : '' }}">
                        Kontakty
                    </x-ui.dropdown-main-menu-link>


                    <x-ui.dropdown-main-menu-link href="{{ route('railwayLines', []) }}"
                        class="{{ Request::routeIs('railwayLines') ? 'active' : '' }}">
                        Linie kolejowe
                    </x-ui.dropdown-main-menu-link>

                </x-ui.dropdown-main-menu>
            </li>



        </ul>

        <div class="items-center hidden xl:flex2">
            <a class="mr-10 hover:text-gray-600" href="#">
                <svg width="23" height="20" viewbox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.4998 19.2061L2.70115 9.92527C1.92859 9.14433 1.41864 8.1374 1.24355 7.04712C1.06847 5.95684 1.23713 4.8385 1.72563 3.85053V3.85053C2.09464 3.10462 2.63366 2.45803 3.29828 1.96406C3.9629 1.47008 4.73408 1.14284 5.5483 1.00931C6.36252 0.875782 7.19647 0.939779 7.98144 1.19603C8.7664 1.45228 9.47991 1.89345 10.0632 2.48319L11.4998 3.93577L12.9364 2.48319C13.5197 1.89345 14.2332 1.45228 15.0182 1.19603C15.8031 0.939779 16.6371 0.875782 17.4513 1.00931C18.2655 1.14284 19.0367 1.47008 19.7013 1.96406C20.3659 2.45803 20.905 3.10462 21.274 3.85053V3.85053C21.7625 4.8385 21.9311 5.95684 21.756 7.04712C21.581 8.1374 21.071 9.14433 20.2984 9.92527L11.4998 19.2061Z"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </a>
            <a class="flex items-center hover:text-gray-600" href="#">
                <svg class="mr-3" width="23" height="23" viewbox="0 0 23 23" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M18.1159 8.72461H2.50427C1.99709 8.72461 1.58594 9.12704 1.58594 9.62346V21.3085C1.58594 21.8049 1.99709 22.2074 2.50427 22.2074H18.1159C18.6231 22.2074 19.0342 21.8049 19.0342 21.3085V9.62346C19.0342 9.12704 18.6231 8.72461 18.1159 8.72461Z"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path
                        d="M6.34473 6.34469V4.95676C6.34473 3.85246 6.76252 2.79338 7.5062 2.01252C8.24988 1.23165 9.25852 0.792969 10.3102 0.792969C11.362 0.792969 12.3706 1.23165 13.1143 2.01252C13.858 2.79338 14.2758 3.85246 14.2758 4.95676V6.34469"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <span
                    class="inline-block w-6 h-6 font-semibold text-center bg-gray-100 rounded-full font-heading">3</span>
            </a>
        </div>
    </div>
    <!-- logo -->
    <div class="flex items-center flex-shrink-0 ml-6 xl:ml-0">
        <a class="flex items-center flex-shrink-0 space-x-3 text-2xl font-bold text-gray-600 xl:mx-auto" href="#">
            <img class="h-9" src="/larax.svg" alt="" width="auto">
            <span class="">{{config('app.name', 'Larax')}}</span>
        </a>
    </div>

    <!-- right menu -->
    <div class="flex items-center space-x-3">
        <!-- search input -->
        <div class="hidden xl:inline-block ">

            <div class="relative text-gray-600 h-9">
                <input class="search-input form-input" type="text" placeholder="WYSZUKAJ">
                <div class="absolute top-0 left-0 px-2 text-green-600 border-r h-9">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>

                <div class="absolute text-green-600 cursor-pointer top-2 right-2 hover:text-green-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>

            </div>
        </div>

        <!-- user menu -->
        <div
            class="items-center hidden h-full font-semibold border-l xl:flex font-heading hover:text-gray-600 whitespace-nowrap">
            <a class="ml-2 border rounded-full hover:border-green-300" href="#">
                <svg class="" width="32" height="31" viewbox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M16.0006 16.3154C19.1303 16.3154 21.6673 13.799 21.6673 10.6948C21.6673 7.59064 19.1303 5.07422 16.0006 5.07422C12.871 5.07422 10.334 7.59064 10.334 10.6948C10.334 13.799 12.871 16.3154 16.0006 16.3154Z"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path
                        d="M24.4225 23.8963C23.6678 22.3507 22.4756 21.0445 20.9845 20.1298C19.4934 19.2151 17.7647 18.7295 15.9998 18.7295C14.2349 18.7295 12.5063 19.2151 11.0152 20.1298C9.52406 21.0445 8.33179 22.3507 7.57715 23.8963"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </a>
        </div>

    </div>

    <!-- hamburger -->
    <a class="self-center mr-12 navbar-burger xl:hidden" href="#">
        <x-heroicon-o-menu class="w-6 h-6" />
    </a>

</nav>