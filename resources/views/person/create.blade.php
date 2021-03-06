<x-app-layout>
    <x-slot name="header">
        Nowy Kontakt
    </x-slot>

    <x-slot name="breadcrumbs">
        {{ Breadcrumbs::render('contactsCreate') }}
    </x-slot>


    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @livewire('person.create-edit-person', ['mode' => 'create',])
    </div>

</x-app-layout>