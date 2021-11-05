<div>
    <x-jet-form-section :submit="$mode" display="horizontal">
        <x-slot name="title">
            Nowa linia kolejowa
        </x-slot>
    
        <x-slot name="description">
            @switch($mode)
                @case('edit')
                    Wprowadz zmiany w danych kontaktowych.   
                    @break
                @case('create')
                    Zdefiniuj nową linię kolejową. Należy wypełnić wszystkie pola formularza.
                    @break
                @default
                    
            @endswitch
            
        </x-slot>
    
        <x-slot name="form">
            <div class="col-span-6">
                <x-jet-label for="number" value="Numer linii" />
                <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.number" autocomplete="number" />
                <x-jet-input-error for="state.number" class="mt-2" />
            </div>

            <div class="col-span-6">
                <x-jet-label for="start" value="Początek linii" />
                <x-jet-input id="start" type="text" class="mt-1 block w-full" wire:model.defer="state.start" autocomplete="start" />
                <x-jet-input-error for="state.start" class="mt-2" />
            </div>

            <div class="col-span-6">
                <x-jet-label for="end" value="Początek linii" />
                <x-jet-input id="end" type="text" class="mt-1 block w-full" wire:model.defer="state.end" autocomplete="end" />
                <x-jet-input-error for="state.end" class="mt-2" />
            </div>
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

