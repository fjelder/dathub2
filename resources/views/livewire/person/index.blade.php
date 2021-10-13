<div class="bg-white">
    <div>
        <!--
      Mobile filter dialog

      Off-canvas filters for mobile, show/hide based on off-canvas filters state.
    -->
        <div class="fixed inset-0 flex z-40 lg:hidden hidden" role="dialog" aria-modal="true">
            <!--
        Off-canvas menu overlay, show/hide based on off-canvas menu state.

        Entering: "transition-opacity ease-linear duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
            <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>

            <!--
        Off-canvas menu, show/hide based on off-canvas menu state.

        Entering: "transition ease-in-out duration-300 transform"
          From: "translate-x-full"
          To: "translate-x-0"
        Leaving: "transition ease-in-out duration-300 transform"
          From: "translate-x-0"
          To: "translate-x-full"
      -->
            <div
                class="ml-auto relative max-w-xs w-full h-full bg-white shadow-xl py-4 pb-12 flex flex-col overflow-y-auto">
                <div class="px-4 flex items-center justify-between">
                    <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                    <button type="button"
                        class="-mr-2 w-10 h-10 bg-white p-2 rounded-md flex items-center justify-center text-gray-400">
                        <span class="sr-only">Close menu</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Filters -->
                <form class="mt-4 border-t border-gray-200">
                    <h3 class="sr-only">Categories</h3>
                    <ul role="list" class="font-medium text-gray-900 px-2 py-3">
                        <li>
                            <a href="#" class="block px-2 py-3">
                                Totes
                            </a>
                        </li>

                        <li>
                            <a href="#" class="block px-2 py-3">
                                Backpacks
                            </a>
                        </li>

                        <li>
                            <a href="#" class="block px-2 py-3">
                                Travel Bags
                            </a>
                        </li>

                        <li>
                            <a href="#" class="block px-2 py-3">
                                Hip Bags
                            </a>
                        </li>

                        <li>
                            <a href="#" class="block px-2 py-3">
                                Laptop Sleeves
                            </a>
                        </li>
                    </ul>

                    <div class="border-t border-gray-200 px-4 py-6">
                        <h3 class="-mx-2 -my-3 flow-root">
                            <!-- Expand/collapse section button -->
                            <button type="button"
                                class="px-2 py-3 bg-white w-full flex items-center justify-between text-gray-400 hover:text-gray-500"
                                aria-controls="filter-section-mobile-0" aria-expanded="false">
                                <span class="font-medium text-gray-900">
                                    Wyszukaj
                                </span>
                                <span class="ml-6 flex items-center">
                                    <!--
                    Expand icon, show/hide based on section open state.

                    Heroicon name: solid/plus-sm
                  -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <!--
                    Collapse icon, show/hide based on section open state.

                    Heroicon name: solid/minus-sm
                  -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </button>
                        </h3>
                        <!-- Filter section, show/hide based on section state. -->
                        <div class="pt-6" id="filter-section-mobile-0">
                            <div class="space-y-6">
                                <div class="flex items-center">
                                    <input id="filter-mobile-color-0" name="color[]" value="white" type="checkbox"
                                        class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-color-0" class="ml-3 min-w-0 flex-1 text-gray-500">
                                        White
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="filter-mobile-color-1" name="color[]" value="beige" type="checkbox"
                                        class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-color-1" class="ml-3 min-w-0 flex-1 text-gray-500">
                                        Beige
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="filter-mobile-color-2" name="color[]" value="blue" type="checkbox"
                                        checked
                                        class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-color-2" class="ml-3 min-w-0 flex-1 text-gray-500">
                                        Blue
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="filter-mobile-color-3" name="color[]" value="brown" type="checkbox"
                                        class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-color-3" class="ml-3 min-w-0 flex-1 text-gray-500">
                                        Brown
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="filter-mobile-color-4" name="color[]" value="green" type="checkbox"
                                        class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-color-4" class="ml-3 min-w-0 flex-1 text-gray-500">
                                        Green
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="filter-mobile-color-5" name="color[]" value="purple" type="checkbox"
                                        class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-color-5" class="ml-3 min-w-0 flex-1 text-gray-500">
                                        Purple
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-gray-200 px-4 py-6">
                        <h3 class="-mx-2 -my-3 flow-root">
                            <!-- Expand/collapse section button -->
                            <button type="button"
                                class="px-2 py-3 bg-white w-full flex items-center justify-between text-gray-400 hover:text-gray-500"
                                aria-controls="filter-section-mobile-1" aria-expanded="false">
                                <span class="font-medium text-gray-900">
                                    Category
                                </span>
                                <span class="ml-6 flex items-center">
                                    <!--
                    Expand icon, show/hide based on section open state.

                    Heroicon name: solid/plus-sm
                  -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <!--
                    Collapse icon, show/hide based on section open state.

                    Heroicon name: solid/minus-sm
                  -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </button>
                        </h3>
                        <!-- Filter section, show/hide based on section state. -->
                        <div class="pt-6" id="filter-section-mobile-1">
                            <div class="space-y-6">
                                <div class="flex items-center">
                                    <input id="filter-mobile-category-0" name="category[]" value="new-arrivals"
                                        type="checkbox"
                                        class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-category-0" class="ml-3 min-w-0 flex-1 text-gray-500">
                                        New Arrivals
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="filter-mobile-category-1" name="category[]" value="sale" type="checkbox"
                                        class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-category-1" class="ml-3 min-w-0 flex-1 text-gray-500">
                                        Sale
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="filter-mobile-category-2" name="category[]" value="travel"
                                        type="checkbox" checked
                                        class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-category-2" class="ml-3 min-w-0 flex-1 text-gray-500">
                                        Travel
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="filter-mobile-category-3" name="category[]" value="organization"
                                        type="checkbox"
                                        class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-category-3" class="ml-3 min-w-0 flex-1 text-gray-500">
                                        Organization
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="filter-mobile-category-4" name="category[]" value="accessories"
                                        type="checkbox"
                                        class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-category-4" class="ml-3 min-w-0 flex-1 text-gray-500">
                                        Accessories
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-gray-200 px-4 py-6">
                        <h3 class="-mx-2 -my-3 flow-root">
                            <!-- Expand/collapse section button -->
                            <button type="button"
                                class="px-2 py-3 bg-white w-full flex items-center justify-between text-gray-400 hover:text-gray-500"
                                aria-controls="filter-section-mobile-2" aria-expanded="false">
                                <span class="font-medium text-gray-900">
                                    Size
                                </span>
                                <span class="ml-6 flex items-center">
                                    <!--
                    Expand icon, show/hide based on section open state.

                    Heroicon name: solid/plus-sm
                  -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <!--
                    Collapse icon, show/hide based on section open state.

                    Heroicon name: solid/minus-sm
                  -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </button>
                        </h3>
                        <!-- Filter section, show/hide based on section state. -->
                        <div class="pt-6" id="filter-section-mobile-2">
                            <div class="space-y-6">
                                <div class="flex items-center">
                                    <input id="filter-mobile-size-0" name="size[]" value="2l" type="checkbox"
                                        class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-size-0" class="ml-3 min-w-0 flex-1 text-gray-500">
                                        2L
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="filter-mobile-size-1" name="size[]" value="6l" type="checkbox"
                                        class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-size-1" class="ml-3 min-w-0 flex-1 text-gray-500">
                                        6L
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="filter-mobile-size-2" name="size[]" value="12l" type="checkbox"
                                        class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-size-2" class="ml-3 min-w-0 flex-1 text-gray-500">
                                        12L
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="filter-mobile-size-3" name="size[]" value="18l" type="checkbox"
                                        class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-size-3" class="ml-3 min-w-0 flex-1 text-gray-500">
                                        18L
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="filter-mobile-size-4" name="size[]" value="20l" type="checkbox"
                                        class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-size-4" class="ml-3 min-w-0 flex-1 text-gray-500">
                                        20L
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="filter-mobile-size-5" name="size[]" value="40l" type="checkbox" checked
                                        class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                    <label for="filter-mobile-size-5" class="ml-3 min-w-0 flex-1 text-gray-500">
                                        40L
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative z-10 flex items-baseline justify-between pt-10 pb-6 border-b border-gray-200">
                <h1 class="text-4xl font-extrabold tracking-tight text-gray-900">Lista kontaktowa</h1>

                <div class="flex items-center">
                    <div x-data="{openSortMenu: false}" class="relative inline-block text-left">
                        <div>
                            <button type="button"
                                class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900"
                                @click="openSortMenu = !openSortMenu"
                                id="menu-button" aria-expanded="false" aria-haspopup="true">
                                Sortuj
                                <x-heroicon-s-chevron-down class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500" />
                            </button>
                        </div>

    
                        <div 
                        class="origin-top-right absolute right-0 mt-2 w-40 rounded-md shadow-2xl bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                        x-show="openSortMenu"
                        @click.away="openSortMenu = false"
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95"
                        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">

                                <a href="#" class="{{$sort == 'asc' ? 'font-medium text-gray-900' : 'text-gray-500' }} block px-4 py-2 text-sm" role="menuitem"
                                    tabindex="-1" id="menu-item-0"
                                    wire:click="$set('sort', 'asc')">
                                    Alfabetycznie rosnąco
                                </a>

                                <a href="#" class="{{$sort == 'desc' ? 'font-medium text-gray-900' : 'text-gray-500' }} block px-4 py-2 text-sm" role="menuitem"    tabindex="-1" id="menu-item-1"
                                    wire:click="$set('sort', 'desc')">
                                    Alfabetycznie malejącą
                                </a>

                            </div>
                        </div>
                    </div>

                    <button type="button" class="p-2 -m-2 ml-5 sm:ml-7 text-gray-400 hover:text-gray-500">
                        <span class="sr-only">View grid</span>
                        <!-- Heroicon name: solid/view-grid -->
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                    </button>
                    <button type="button" class="p-2 -m-2 ml-4 sm:ml-6 text-gray-400 hover:text-gray-500 lg:hidden">
                        <span class="sr-only">Filters</span>
                        <!-- Heroicon name: solid/filter -->
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>

            <section aria-labelledby="products-heading" class="pt-6 pb-24">
                <h2 id="products-heading" class="sr-only">Products</h2>

                <div class="grid grid-cols-1 lg:grid-cols-4 gap-x-8 gap-y-10">
                    <!-- Filters -->
                    <form class="hidden lg:block">
                        <h3 class="sr-only">Categories</h3>
                        <ul role="list"
                            class="hidden text-sm font-medium text-gray-900 space-y-4 pb-6 border-b border-gray-200">
                            <li>
                                <a href="#">
                                    Totes1
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    Backpacks
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    Travel Bags
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    Hip Bags
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    Laptop Sleeves
                                </a>
                            </li>
                        </ul>
                        <x-filterBlock title="Wyszukaj" open="true">
                            <div class="flex items-center relative">
                                <input name="search" type="text"
                                    class="h-10 w-full border-gray-300 rounded text-indigo-600 focus:ring-indigo-300 text-sm pr-8"
                                    wire:model="search">
                                <x-heroicon-o-trash class="w-5 text-gray-500 absolute right-2 cursor-pointer hover:text-indigo-600"
                                    wire:click="$set('search', '')" />
                            </div>
                        </x-filterBlock>
                        @isset($companies)
                        <x-filterBlock title="Firmy">
                            @foreach($companies as $company)
                                <div class="flex items-center">
                                    <input id="filter-category-0" name="category[]" value="new-arrivals"
                                        type="checkbox"
                                        class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500 ring-0">
                                    <label for="filter-category-0" class="ml-3 text-sm text-gray-600">
                                        {{$company->short_name}}
                                    </label>
                                </div>
                            @endforeach
                        </x-filterBlock>
                        @endif
                    </form>

                    <!-- Product grid -->
                    <div class="lg:col-span-3">

                        <div class="flex flex-wrap">
                            @foreach($people as $person)
                                <div class="w-full sm:w-1/2">
                                    
                                    <div class="border rounded-md m-2">
                                        <div class="px-3 py-2 text-sm flex justify-between items-center">
                                            <div class="h-6">
                                                <p>{{$person->first_name}} {{$person->last_name}}</p>
                                            </div>
                                   
                                            <div
                                            x-data="{ showDescription: false }" 
                                            class="relative flex flex-row space-x-3">
                                                @isset($person->description)
                                                <div class="cursor-pointer" @click="showDescription = ! showDescription">  
                                                    <x-heroicon-o-information-circle class="w-6 h-6 text-indigo-400"/>
                                                </div> 
                                                <div
                                                x-show="showDescription"
                                                @click.outside="showDescription = false"
                                                x-cloak 
                                                class="absolute right-0 mt-2 w-80 bg-white text-gray-500 text-xs border p-2 rounded-md">
                                                    <h2 class="font-semibold border-b-2 border-indigo-300">Informacje dodatkowe</h2>
                                                    <p class="mt-1 text-justify">
                                                        {{$person->description}}
                                                    </p>
                                                </div>
                                                @endif
                                                
                                                
                                            </div>
                                            
                                        </div>

                                        <div class="flex flex-col border-t-2 border-indigo-200 text-xs text-gray-500">
                                            <div class="px-3 py-2 flex items-center">
                                                <div>
                                                    <x-heroicon-o-mail class="w-5 h-5 mr-3 text-indigo-400"/>
                                                </div>
                                                <div class="">
                                                    {{$person->email}}
                                                </div>
                                            </div>
                                            <div class="px-3 py-2 flex items-center">
                                                <div>
                                                    <x-heroicon-o-phone class="w-5 h-5 mr-3 text-blue-400"/>
                                                </div>
                                                <div>
                                                    {{$person->phone1}}</br>
                                                    {{$person->phone2}}
                                                </div>                                                
                                            </div>

                                            <div class="px-3 py-2 flex items-center">
                                                @isset($person->company->id)
                                                <div>
                                                    <x-heroicon-o-users class="w-5 h-5 mr-3 text-green-400"/>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">{{$person->company->full_name}}</p>
                                                </div> 
                                                @else
                                                <div>
                                                    <x-heroicon-o-user class="w-5 h-5 mr-3 text-green-400"/>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">[Bez firmy]</p>
                                                </div> 
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                          
                          </div>

                    </div>
                </div>
            </section>
        </main>
    </div>
</div>