<!-- Name -->
<div class="col-span-6 md:col-span-4">
    <x-jet-label for="name" value="{{ __('Name') }}" />
    <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
    <x-jet-input-error for="state.name" class="mt-2" />
</div>
<!-- Email -->
<div class="col-span-6 md:col-span-4">
    <x-jet-label for="email" value="{{ __('Email') }}" />
    <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model="state.email" />
    <x-jet-input-error for="state.email" class="mt-2" />
</div>
<!-- Phone1 -->
<div class="col-span-6 md:col-span-4">
        <x-jet-label for="phone1" value="Telefon 1" />
        <x-jet-input type="text" class="mt-1 block w-full" wire:model.defer="state.phone1" />
        <x-jet-input-error for="state.phone1" class="mt-2" />
</div>

<!-- Phone2 -->
<div class="col-span-6 md:col-span-4">
        <x-jet-label for="phone2" value="Telefon 2" />
        <x-jet-input type="text" class="mt-1 block w-full" wire:model.defer="state.phone2" />
        <x-jet-input-error for="state.phone2" class="mt-2" />
</div>

<!-- Company -->
<div class="col-span-6 md:col-span-4">
    <x-jet-label for="email" value="Firma/Organizacja" />
    <select class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" wire:model.defer="state.company_id">
        <option value="">Wybierz</option>
        @foreach ($companies as $key => $value)
            <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
    <x-jet-input-error for="state.company_id" class="mt-2" />
</div>

<div class="col-span-6 md:col-span-4">
    <label for="email-address" class="block text-sm font-medium text-gray-700">Informacje dodatkowe</label>
    <x-ui.textarea name="description" wire:model.defer="state.description" rows="5" />
    <x-jet-input-error for="state.description" class="mt-2" />
</div>
