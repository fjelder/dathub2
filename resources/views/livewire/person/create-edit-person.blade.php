<div>
    <x-jet-form-section submit="createNewContact">
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
            <x-person.person-form :companies="$companies"/>
        </x-slot>
    
        <x-slot name="actions">
    
            <x-jet-button wire:loading.attr="disabled" wire:target="">
                {{ __('Save') }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>

    <x-jet-section-border />
</div>
