<div>
    <x-jet-form-section :submit="$mode">
        <x-slot name="title">
            Dane osobowe
        </x-slot>
    
        <x-slot name="description">
            @switch($mode)
                @case('edit')
                    Wprowadz zmiany w danych kontaktowych.   
                    @break
                @case('create')
                    Wprowadz wszystkie niezbędne dane kontaktowe.
                    @break
                @default
                    
            @endswitch
            
        </x-slot>
    
        <x-slot name="form">
            forms
        </x-slot>
    
        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                {{ __('Saved.') }}..
            </x-jet-action-message>
            <x-jet-button wire:loading.attr="disabled" wire:target="edit">
                {{ __('Save') }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>

    <x-jet-section-border />
</div>

<div>
    <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Nowa linia kolejowa</h3>
        <p class="mt-1 text-sm text-gray-600">
          Zdefiniuj nową linię kolejową. Należy wypełnić wszystkie pola formularza.
        </p>
      </div>
      <div class="mt-5">
          <x-jet-label value="Numer linii" />
          <x-jet-input type="text" wire:model.defer="state.number"/>
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
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}..
        </x-jet-action-message>
          <x-jet-button wire:click="save">
              Zapisz
          </x-jet-button>
      </div>
</div>
