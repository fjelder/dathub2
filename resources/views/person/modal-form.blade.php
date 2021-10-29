<x-jet-dialog-modal wire:model="viewingModal">
    <x-slot name="title">
        
    </x-slot>

    <x-slot name="content">
        @isset($currentModal)
            <!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white shadows overflow-hidden sm:rounded-md -mx-6 -my-4">
    <div class="px-4 pb-5 sm:px-6">
      <h3 class="text-lg leading-6 font-medium text-gray-900">
        Informacje osobowe
      </h3>
      <p class="mt-1 max-w-2xl text-sm text-gray-500">
        Dane szczegółowe.
      </p>
    </div>
    <div class="border-t border-b border-gray-200">
      <dl>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Imię i nazwisko
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{$currentModal->name}}
          </dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Firma/Organizacja
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{$currentModal->company->full_name}}
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            E-mail adres
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{$currentModal->email}}
          </dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Numery telefonu
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 flex items-center space-x-10">
            <span>
              <x-heroicon-o-phone class="w-4 h-4 text-indigo-500 inline-block" />
              {{$currentModal->phone1}}
            </span>
            <span>
              <x-heroicon-o-phone class="w-4 h-4 text-green-500 inline-block" />
              {{$currentModal->phone2}}
            </span>
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Informacje dodatkowe
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            {{$currentModal->description}}
          </dd>
        </div>

      </dl>
    </div>
  </div>
  
        @endisset           
    </x-slot>

    <x-slot name="footer">
      @isset($currentModal)
      <div class="flex justify-between">
          
          <a href="{{ route('contacts.edit', $currentModal->id) }}">
            <x-jet-secondary-button>
              Edytuj
            </x-jet-secondary-button>
          </a>
          
          <x-jet-secondary-button wire:click="resetModal" wire:loading.attr="disabled">
              Gotowe
          </x-jet-secondary-button>
      </div>
      @endif
    </x-slot>
</x-jet-dialog-modal>
