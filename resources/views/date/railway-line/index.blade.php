<x-app-layout>
  <x-slot name="header">
    Linie kolejowe
  </x-slot>

  <x-slot name="breadcrumbs">
    {{ Breadcrumbs::render('railwayLine') }}
  </x-slot>

  <x-slot name="aside">
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
  </x-slot>


  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


    <div>
      <div class="md:grid md:grid-cols-3 md:gap-6">

        <div class="mt-5 md:mt-0 md:col-span-2 sm:row-start-1">
          @livewire('date.railway-line-table')
        </div>

        <div class="mt-5 md:mt-0 md:col-span-1 sm:row-start-2">
          @livewire('date.railway-line-crud', ['mode' => 'create'])
        </div>

      </div>
    </div>




  </div>

</x-app-layout>