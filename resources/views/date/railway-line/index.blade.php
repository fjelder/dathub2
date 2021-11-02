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
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Nowa linia kolejowa</h3>
          <p class="mt-1 text-sm text-gray-600">
            Zdefiniuj nową linię kolejową. Należy wypełnić wszystkie pola formularza.
          </p>
        </div>
        <div class="mt-5">
            <x-jet-label value="Numer linii" />
            <x-jet-input type="text" wire:model="state.number" />
        </div>
        <div class="mt-5">
            <x-jet-label value="Początek" />
            <x-jet-input type="text" wire:model="state.start" />
        </div>
        <div class="mt-5">
            <x-jet-label value="Koniec" />
            <x-jet-input type="text" wire:model="state.end" />
        </div>
        <div class="mt-5">
            <x-jet-secondary-button>
                Zapisz
            </x-jet-secondary-button>
        </div>
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2">
        @livewire('date.railway-line-table')
      </div>
    </div>
  </div>
  
  <x-jet-section-border />
  

  
    </div>


    

</x-app-layout>