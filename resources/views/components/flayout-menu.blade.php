<div class="flex" x-data="{open: false}">

    <div class="relative flex">
        <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
        <button type="button"
            class="text-gray-700 hover:text-gray-800 relative z-10 flex items-center transition-colors ease-out duration-200 text-sm font-medium border-b-2 -mb-px pt-px"
            aria-expanded="false" @click="open = ! open"
            :class="open ? 'border-indigo-600 text-indigo-300' : 'border-transparent'">
            {{$title}}
        </button>
    </div>

    <div class="absolute top-full inset-x-0 text-sm text-gray-500 z-50" x-cloak x-show="open" @click.away="open = false"
        x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-out duration-150"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
        <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
        <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

        <div class="relative bg-white">
            <div class="max-w-7xl mx-auto px-8">
                {{$slot}}
                <div class="grid grid-cols-2 gap-y-10 gap-x-8 py-16 hidden">
                    <div class="col-start-2 grid grid-cols-2 gap-x-8">
                        <div class="group relative text-base sm:text-sm">
                            <div
                                class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg"
                                    alt="Models sitting back to back, wearing Basic Tee in black and bone."
                                    class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-6 block font-medium text-gray-900">
                                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                New Arrivals
                            </a>
                            <p aria-hidden="true" class="mt-1">Shop now</p>
                        </div>

                        <div class="group relative text-base sm:text-sm">
                            <div
                                class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg"
                                    alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees."
                                    class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-6 block font-medium text-gray-900">
                                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                Basic Tees
                            </a>
                            <p aria-hidden="true" class="mt-1">Shop now</p>
                        </div>
                    </div>
                    <div class="row-start-1 grid grid-cols-2 gap-y-10 gap-x-8 text-sm">
                        <div>
                            <p id="Clothing-heading" class="font-medium text-gray-900">
                                Kontaktowa
                            </p>
                            <ul role="list" aria-labelledby="Clothing-heading"
                                class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                <li class="flex">
                                    <a href="#" class="hover:text-gray-800">
                                        Lista osób
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="hover:text-gray-800">
                                        Lista firm
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="hover:text-gray-800">
                                        Nowa osoba
                                    </a>
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
                                    <a href="#" class="hover:text-gray-800">
                                        Linie kolejowe
                                    </a>
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
                                Brands
                            </p>
                            <ul role="list" aria-labelledby="Brands-heading"
                                class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                <li class="flex">
                                    <a href="#" class="hover:text-gray-800">
                                        Full Nelson
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="hover:text-gray-800">
                                        My Way
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="hover:text-gray-800">
                                        Re-Arranged
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="hover:text-gray-800">
                                        Counterfeit
                                    </a>
                                </li>

                                <li class="flex">
                                    <a href="#" class="hover:text-gray-800">
                                        Significant Other
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>