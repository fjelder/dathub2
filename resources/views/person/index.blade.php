<x-app-layout>
    <x-slot name="header">
            Kontakty
    </x-slot>

    <x-slot name="breadcrumbs">
    {{ Breadcrumbs::render('contacts') }}
    </x-slot>
    
   
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-10">
                <x-people.table :people="$people" />
            </div>
          <div class="hidden">
            <x-heading.heading title="" class="mb-5">
              <x-slot name="icon">
                <x-heading.icon name="user" style="o" text="Administratorów"/>
                <x-heading.icon name="users" style="o" text="Użytkowników"/>
                <x-heading.icon name="calculator" style="o" text="Łącznie"/>
              </x-slot>
            </x-heading.heading>
          </div>
          <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                  <livewire:person.show-people />
                </div>
              </div>
            </div>
          </div>
          
        </div>
        
    </div>
    



    <!-- This example requires Tailwind CSS v2.0+ -->


    
</x-app-layout>
