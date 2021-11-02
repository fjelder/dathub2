<x-app-layout>
    <x-slot name="header">
        Linie kolejowe
    </x-slot>

    <x-slot name="breadcrumbs">
        {{ Breadcrumbs::render('railwayLine') }}
    </x-slot>


    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
       

<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        @livewire('date.railway-line-crud', ['mode' => 'save'])
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2 row-start-1">
        @livewire('date.railway-line-table')
      </div>
    </div>
  </div>
  
  <x-jet-section-border />
  

  
    </div>


    

</x-app-layout>