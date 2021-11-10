<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <x-slot name="breadcrumbs">
    {{ Breadcrumbs::render('home') }}
  </x-slot>







  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      {{config('app.name')}}
      <x-dropdown-menu />
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg hidden">
        {{config('app.name')}}
        <x-jet-welcome />
      </div>
    </div>
  </div>





</x-app-layout>