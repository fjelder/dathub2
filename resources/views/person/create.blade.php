<x-app-layout>
    <x-slot name="header">
        Nowy Kontakt
    </x-slot>

    <x-slot name="breadcrumbs">
        {{ Breadcrumbs::render('contactsCreate') }}
    </x-slot>


    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    
        <x-jet-form-section submit="updateProfileInformation">
            <x-slot name="title">
                {{ __('Profile Information') }}
            </x-slot>
        
            <x-slot name="description">
                {{ __('Update your account\'s profile information and email address.') }}
            </x-slot>
        
            <x-slot name="form">
                <!-- Profile Photo -->
                
        
                <!-- Name -->
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                    
                </div>
        
                <!-- Email -->
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    
                </div>
            </x-slot>
        
            <x-slot name="actions">
                <x-jet-action-message class="mr-3" on="saved">
                    {{ __('Saved.') }}
                </x-jet-action-message>
        
                <x-jet-button wire:loading.attr="disabled" wire:target="photo">
                    {{ __('Save') }}
                </x-jet-button>
            </x-slot>
        </x-jet-form-section>
        
        <div class="mt-2">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-700">Dane osobowe</h3>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="#" method="POST">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <x-jet-label value="Imię"/>
                                        <x-jet-input type="text" name="first_name" />
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <x-jet-label value="Nazwisko"/>
                                        <x-jet-input type="text" name="last_name" />
                                    </div>


                                    <div class="col-span-6 sm:col-span-3">
                                        <x-jet-label value="Telefon 1"/>
                                        <x-jet-input type="text" name="phone1" />
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="email-address" class="block text-sm font-medium text-gray-700">Telefon 2</label>
                                        <input type="text" name="email-address" id="email-address" autocomplete="email"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="email-address" class="block text-sm font-medium text-gray-700">Adres e-mail</label>
                                        <input type="text" name="email-address" id="email-address" autocomplete="email"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-2">
                                        <label for="country"
                                            class="block text-sm font-medium text-gray-700">Firma/Organizacja</label>
                                        <select id="country" name="country" autocomplete="country-name"
                                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="">Brak</option>
                                            @foreach($companies as $company)
                                                <option value="{{$company->id}}">{{$company->short_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-span-6">
                                        <label for="street-address"
                                            class="block text-sm font-medium text-gray-700">Informacje dodatkowe</label>
                                        <textarea rows="6" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                                        </textarea>
                                    </div>

                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Zapisz
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>





</x-app-layout>