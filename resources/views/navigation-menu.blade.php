<nav aria-label="Top" class="hidden px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="border-gray-200 border-bx">
        <div class="flex items-center h-16">
            <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
            <button type="button" @click="mobileMenuOpen = true"
                class="p-2 text-gray-400 bg-white rounded-md lg:hidden">
                <span class="sr-only">Open menu</span>
                <x-heroicon-o-menu class="w-6 h-6" />
            </button>

            <!-- Logo -->
            <div class="flex ml-4 lg:ml-0">
                <a href="{{ route('dashboard') }}">
                    <x-jet-application-mark class="block w-auto h-11" />
                </a>
            </div>

            <!-- Flyout menus -->
            <div class="hidden lg:ml-8 lg:block lg:self-stretch">
                <div class="flex h-full space-x-8">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Contracts') }}
                    </x-jet-nav-link>
                    @if(Auth::user()->is_admin)
                    <x-jet-nav-link href="{{ route('users.index') }}" :active="request()->routeIs('users.index')">
                        {{ __('Users') }}
                    </x-jet-nav-link>
                    @endif

                    <x-flayout-menu title="Dane" :active="request()->is('data/*')">
                        <div class="grid grid-cols-2 py-16 border-t gap-y-10 gap-x-8">
                            <div class="hidden grid-cols-2 col-start-2 grid2 gap-x-8">
                                <div class="relative text-base group sm:text-sm">
                                    <div
                                        class="overflow-hidden bg-gray-100 rounded-lg aspect-w-1 aspect-h-1 group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg"
                                            alt="Models sitting back to back, wearing Basic Tee in black and bone."
                                            class="object-cover object-center">
                                    </div>
                                    <a href="#" class="block mt-6 font-medium text-gray-900">
                                        <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                        New Arrivals
                                    </a>
                                    <p aria-hidden="true" class="mt-1">Shop now</p>
                                </div>

                                <div class="relative text-base group sm:text-sm">
                                    <div
                                        class="overflow-hidden bg-gray-100 rounded-lg aspect-w-1 aspect-h-1 group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg"
                                            alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees."
                                            class="object-cover object-center">
                                    </div>
                                    <a href="#" class="block mt-6 font-medium text-gray-900">
                                        <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                        Basic Tees
                                    </a>
                                    <p aria-hidden="true" class="mt-1">Shop now</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 row-start-1 text-sm gap-y-10 gap-x-8">
                                <div>
                                    <p id="Clothing-heading" class="font-medium text-gray-900">
                                        Kontakty
                                    </p>
                                    <ul role="list" aria-labelledby="Clothing-heading"
                                        class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                        <li class="flex">
                                            <x-ui.link href="{{ route('contacts.index') }}"
                                                :active="request()->routeIs('contacts.index')">
                                                Lista osób
                                            </x-ui.link>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="hover:text-gray-800">
                                                Lista firm
                                            </a>
                                        </li>

                                        <li class="flex">
                                            <x-ui.link href="{{ route('contacts.create') }}"
                                                :active="request()->routeIs('contacts.create')">
                                                Nowa osoba
                                            </x-ui.link>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="hover:text-gray-800">
                                                Nowa firma
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div>
                                    <p id="Accessories-heading" class="font-medium text-gray-900">
                                        Obiekty
                                    </p>
                                    <ul role="list" aria-labelledby="Accessories-heading"
                                        class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                        <li class="flex">
                                            <x-ui.link href="{{ route('railwayLines', []) }}"
                                                :active="request()->routeIs('railwayLines')">
                                                Linie kolejowe
                                            </x-ui.link>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="hover:text-gray-800">
                                                Stacje kolejowe
                                            </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="hover:text-gray-800">
                                                Posterunki odgałęźne
                                            </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="hover:text-gray-800">
                                                Przystanki osobowe
                                            </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="hover:text-gray-800">
                                                Przejazdy kolejowo - drogowe
                                            </a>
                                        </li>

                                    </ul>
                                </div>

                                <div>
                                    <p id="Brands-heading" class="font-medium text-gray-900">
                                        Dane systemowe
                                    </p>
                                    <ul role="list" aria-labelledby="Brands-heading"
                                        class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                        <li class="flex">
                                            <a href="#" class="hover:text-gray-800">
                                                Branże
                                            </a>
                                        </li>

                                        <li class="flex">
                                            <a href="#" class="hover:text-gray-800">
                                                Stadium projektowe
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </x-flayout-menu>

                </div>
            </div>

            <div class="flex items-center ml-auto">
                <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                    <span class="text-sm font-normal text-gray-700 hover:text-gray-800">
                        {{ now()->translatedFormat('D, j F Y\r.') }}
                    </span>
                    <span class="w-px h-6 bg-gray-200" aria-hidden="true"></span>
                </div>

                <!-- Search -->
                <div class="flex lg:ml-6">
                    <a href="#" class="p-2 text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Search</span>
                        <!-- Heroicon name: outline/search -->
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </a>
                </div>

                <!-- Cart -->
                <div class="hidden flow-root ml-4 lg:ml-6">
                    <a href="#" class="flex items-center p-2 -m-2 group">
                        <!-- Heroicon name: outline/shopping-bag -->
                        <svg class="flex-shrink-0 w-6 h-6 text-gray-400 group-hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                        <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">10</span>
                        <span class="sr-only">items in cart, view bag</span>
                    </a>
                </div>

                <!-- Settings Dropdown -->
                <div class="relative flow-root ml-4 lg:ml-6">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button
                                class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                                <img class="object-cover w-8 h-8 rounded-full"
                                    src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>
                            @else
                            <span class="inline-flex rounded-md">
                                <button type="button"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
                                    {{ Auth::user()->name }}

                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>
        </div>
    </div>
</nav>







<nav x-data="{ open: false }"
    class="bg-white border-b-2 border-green-600 shadow-sm dark:border-gray-600 dark:bg-gray-800 dark:text-gray-300">
    <!-- Primary Navigation Menu -->
    <div class="px-6 mx-auto max-w-7xl xl:px-0">
        <div class="flex justify-between h-16">

            <!-- Navigation Links -->
            <div class="hidden space-x-6 lg:flex lg:items-center main-menu">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    <x-heroicon-o-home class="w-5 h-5" />
                    <span>{{ __('Dashboard') }}</span>
                </x-jet-nav-link>

                @if(Auth::user()->is_admin)
                <x-jet-nav-link href="{{ route('users.index') }}" :active="request()->routeIs('users.index')">
                    <x-heroicon-o-users class="w-5 h-5" />
                    <span>{{ __('Users') }}</span>
                </x-jet-nav-link>
                @endif

                <x-jet-nav-link href="#">
                    <x-heroicon-o-chip class="w-5 h-5" />
                    <span>{{ __('Data') }}</span>
                </x-jet-nav-link>
            </div>


            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('dashboard') }}"
                    class="flex items-center space-x-3 text-2xl font-bold transition-all duration-100 hover:scale-95">
                    <x-jet-application-mark class="block w-auto h-10" />
                    <span class="tracking-wider text-green-900 hover:border-b-2">{{config('app.name',
                        'Larax')}}</span>

                </a>
            </div>

            <!-- Right menu -->
            <div x-data="{searchBoxOpen: false }" class="hidden space-x-5 sm:flex sm:items-center"
                :class="{'border-l': ! searchBoxOpen, 'border-l-0': searchBoxOpen}">
                <!-- search box -->
                <div class="relative ml-4 border rounded-md cursor-pointer">

                    <div class="box-content flex items-center justify-center w-8 h-8 hover:bg-gray-100"
                        @click="searchBoxOpen = ! searchBoxOpen; $nextTick(() => $refs.searchBox.focus());">
                        <x-heroicon-o-search class="w-5 h-5" />
                    </div>
                    <input type="text" name="searchSlug"
                        class="absolute right-0 h-12 mt-4 text-sm font-semibold text-green-700 border-2 border-t-0 border-green-600 w-96 focus:border-green-600 focus:ring-0 focus:bg-white"
                        placeholder="Wyszukaj" x-cloak x-ref="searchBox" x-show="searchBoxOpen"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                </div>
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                <div class="relative">
                    <x-jet-dropdown align="right" width="60">
                        <x-slot name="trigger">
                            <span class="inline-flex rounded-md">
                                <button type="button"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition bg-white border border-transparent rounded-md hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50">
                                    {{ Auth::user()->currentTeam->name }}

                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>
                        </x-slot>

                        <x-slot name="content">
                            <div class="w-60">
                                <!-- Team Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Team') }}
                                </div>

                                <!-- Team Settings -->
                                <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                    {{ __('Team Settings') }}
                                </x-jet-dropdown-link>

                                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                    {{ __('Create New Team') }}
                                </x-jet-dropdown-link>
                                @endcan

                                <div class="border-t border-gray-100"></div>

                                <!-- Team Switcher -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Switch Teams') }}
                                </div>

                                @foreach (Auth::user()->allTeams() as $team)
                                <x-jet-switchable-team :team="$team" />
                                @endforeach
                            </div>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="relative">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button
                                class="flex text-sm transition border border-transparent rounded-md focus:outline-none focus:border-green-600">
                                <img class="object-cover w-8 h-8 rounded-md" src="{{ Auth::user()->profile_photo_url }}"
                                    alt="{{ Auth::user()->name }}" />
                            </button>
                            @else
                            <span class="inline-flex rounded-md">
                                <button type="button"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
                                    {{ Auth::user()->name }}

                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="flex items-center -mr-2 sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 text-gray-400 transition rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <div class="flex-shrink-0 mr-3">
                    <img class="object-cover w-10 h-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}"
                        alt="{{ Auth::user()->name }}" />
                </div>
                @endif

                <div>
                    <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}"
                    :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}"
                    :active="request()->routeIs('api-tokens.index')">
                    {{ __('API Tokens') }}
                </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-jet-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                <div class="border-t border-gray-200"></div>

                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('Manage Team') }}
                </div>

                <!-- Team Settings -->
                <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
                    :active="request()->routeIs('teams.show')">
                    {{ __('Team Settings') }}
                </x-jet-responsive-nav-link>

                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                <x-jet-responsive-nav-link href="{{ route('teams.create') }}"
                    :active="request()->routeIs('teams.create')">
                    {{ __('Create New Team') }}
                </x-jet-responsive-nav-link>
                @endcan

                <div class="border-t border-gray-200"></div>

                <!-- Team Switcher -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('Switch Teams') }}
                </div>

                @foreach (Auth::user()->allTeams() as $team)
                <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                @endforeach
                @endif
            </div>
        </div>
    </div>
</nav>