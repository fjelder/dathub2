<x-app-layout>
    <x-slot name="header">
        Edytuj kontakt
    </x-slot>

    <x-slot name="breadcrumbs">
        {{ Breadcrumbs::render('contactsNameEdit', $person) }}
    </x-slot>


    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @livewire('person.create-edit-person', ['mode' => 'edit', 'state' => $person])
    </div>

</x-app-layout>