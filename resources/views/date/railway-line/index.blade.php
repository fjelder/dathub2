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
      
      <div class="mt-5 md:mt-0 md:col-span-2 sm:row-start-1">
        @livewire('date.railway-line-table')
      </div>

      <div class="md:col-span-1 sm:row-start-2 mt-10">
        @livewire('date.railway-line-crud', ['mode' => 'create'])
      </div>

    </div>
  </div>
  
  <x-jet-section-border />
  

  
    </div>


    

</x-app-layout>