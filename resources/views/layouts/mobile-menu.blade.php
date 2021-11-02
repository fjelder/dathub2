<!--
      Mobile menu
  
      Off-canvas menu for mobile, show/hide based on off-canvas menu state.
    -->
<div class="fixed inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true" x-cloak x-show="mobileMenuOpen">
    <!--
    Off-canvas menu overlay, show/hide based on off-canvas menu state.

    Entering: "transition-opacity ease-linear duration-300"
      From: "opacity-0"
      To: "opacity-100"
    Leaving: "transition-opacity ease-linear duration-300"
      From: "opacity-100"
      To: "opacity-0"
  -->
    <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"
        x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click="mobileMenuOpen = false"></div>

    <!--
    Off-canvas menu, show/hide based on off-canvas menu state.

    Entering: "transition ease-in-out duration-300 transform"
      From: "-translate-x-full"
      To: "translate-x-0"
    Leaving: "transition ease-in-out duration-300 transform"
      From: "translate-x-0"
      To: "-translate-x-full"
  -->
    <div class="relative max-w-xs w-full bg-white shadow-xl pb-12 flex flex-col overflow-y-auto"
        x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full"
        x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform"
        x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full">
        <div class="px-4 pt-5 pb-2 flex">
            <button type="button" class="-m-2 p-2 rounded-md inline-flex items-center justify-center text-gray-400"
                @click="mobileMenuOpen = false">
                <span class="sr-only">Close menu</span>
                <x-heroicon-o-x class="h-6 w-6" />
            </button>
        </div>

        <!-- Links -->
        <div class="mt-2">
  
            <!-- 'Women' tab panel, show/hide based on tab state. -->
            <div id="tabs-1-panel-1" class="pt-10 pb-8 px-4 space-y-5" aria-labelledby="tabs-1-tab-1" role="tabpanel"
                tabindex="0">
      
                <a href="{{ route('dashboard', []) }}" class="block font-medium text-gray-900">
                    @lang('Dashboard')
                </a>

                <a href="{{ route('users.index', []) }}" class="block font-medium text-gray-900">
                    @lang('Users')
                </a>
                <x-ui.mobile-dropdown-menu title="Kontakty" :open="request()->routeIs([
                    'contacts.index',
                    'contacts.create'
                    ])" >
                    <x-ui.mobile-dropdown-menu-link href="{{ route('contacts.index', []) }}" :active="request()->routeIs('contacts.index')">
                        Lista osób
                    </x-ui.mobile-dropdown-menu-link>
                    <x-ui.mobile-dropdown-menu-link href="{{ route('contacts.create', []) }}" :active="request()->routeIs('contacts.create')">
                        Nowa osoba
                    </x-ui.mobile-dropdown-menu-link>
                </x-ui.mobile-dropdown-menu>

                <x-ui.mobile-dropdown-menu title="Obiekty" :open="request()->routeIs([
                    'railwayLines'
                    ])">
                    <x-ui.mobile-dropdown-menu-link href="{{ route('railwayLines', []) }}" :active="request()->routeIs('railwayLines')">
                        Linie kolejowe
                    </x-ui.mobile-dropdown-menu-link>
                    <x-ui.mobile-dropdown-menu-link href="{{ route('railwayLines', []) }}" :active="request()->routeIs('')">
                        Przejazdy kolejowo - drogowe
                    </x-ui.mobile-dropdown-menu-link>
                </x-ui.mobile-dropdown-menu>

            </div>

        </div>

        <div class="border-t border-gray-200 py-6 px-4 space-y-6">
            <div class="flow-root">
                <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Company</a>
            </div>

            <div class="flow-root">
                <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Stores</a>
            </div>
        </div>


    </div>
</div>