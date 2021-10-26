<x-app-layout>
  <x-slot name="header">
    Lista osób
  </x-slot>

  <x-slot name="breadcrumbs">
    {{ Breadcrumbs::render('contacts') }}
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="my-6">
        <livewire:contact-table />
      </div>
    </div>
  </div>


</x-app-layout>