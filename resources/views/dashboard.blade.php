<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-slot name="breadcrumbs">
      

        <nav class="flex items-center text-gray-500 text-sm font-medium sm:space-x-2 whitespace-nowrap">
            <a href="{{route('dashboard')}}" class="hidden sm:block hover:text-gray-900">
              Home
            </a>
            <svg width="24" height="24" fill="none" class="hidden sm:block flex-none text-gray-300">
              <path d="M10.75 8.75l3.5 3.25-3.5 3.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <a href="{{route('users')}}" class="hidden sm:block hover:text-gray-900">
              Użytkownicy
            </a>
            <svg width="24" height="24" fill="none" class="hidden sm:block flex-none text-gray-300">
              <path d="M10.75 8.75l3.5 3.25-3.5 3.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <a href="/components/application-ui/navigation/navbars" class="truncate hover:text-gray-900">
              Michał Kowalski
            </a>
            <svg width="24" height="24" fill="none" class="hidden sm:block flex-none text-gray-300">
              <path d="M10.75 8.75l3.5 3.25-3.5 3.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <a href="/components/application-ui/navigation/navbars" class="truncate hover:text-gray-900 text-indigo-500">
              Edytuj
            </a>
          </nav>
    </x-slot>






    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              {{config('app.name')}}
                <x-jet-welcome />
            </div>
        </div>
    </div>

    


    
</x-app-layout>
