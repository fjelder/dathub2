<x-app-layout>
    <x-slot name="header">
            Linki w stopce
    </x-slot>

    <x-slot name="breadcrumbs">
        {{ Breadcrumbs::render('footerLinks') }}
    </x-slot>

    <div class="flex flex-wrap -mx-px overflow-hidden">

        <div class="my-2 px-2 w-full overflow-hidden xl:w-1/2">
            <div class="bg-white rounded2 border px-4 py-3 space-y-4">
                <h2 class="text-base uppercase">Grupa 1</h2>
                <div class="space-y-2">
                    <x-jet-label value="Nazwa grupy" />
                    <x-jet-input type="text" name="" />
                </div>

                <div class="space-y-2">
                    <x-jet-label value="Tytuł" />
                    <x-jet-input type="text" name="" />
                </div>

                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="text-gray-500 sm:text-sm">
                                $
                            </span>
                        </div>
                        <input type="text" name="price" id="price" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 
                            rounded-md" placeholder="0.00">
                        <div class="absolute inset-y-0 right-0 flex items-center">
                            <label for="currency" class="sr-only">Currency</label>
                            <select id="currency" name="currency"
                                class="focus:ring-indigo-500 focus:border-indigo-500 h-full py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md">
                                <option>USD</option>
                                <option>CAD</option>
                                <option>EUR</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="space-y-2">
                    <x-jet-label value="Protokół" />
                    <select>
                        <option value="http://">http://</option>
                        <option value="https://">https://</option>
                        <option value="ftp://">ftp://</option>
                    </select>

                </div>

                <div class="space-y-2">
                    <x-jet-label value="Link" />
                    <x-jet-input type="text" name="" />
                </div>


            </div>
        </div>

        <div class="my-2 px-2 w-full overflow-hidden xl:w-1/2">
            <div class="bg-white rounded2 border px-4 py-3 space-y-4">
                <h2 class="text-base uppercase">Grupa 2</h2>
                <div class="space-y-2">
                    <x-jet-label value="Nazwa grupy" />
                    <x-jet-input type="text" name="" />
                </div>

                <div class="space-y-2">
                    <x-jet-label value="Tytuł" />
                    <x-jet-input type="text" name="" />
                </div>

                <div class="space-y-2">
                    <x-jet-label value="Protokół" />
                    <select>
                        <option value="http://">http://</option>
                        <option value="https://">https://</option>
                        <option value="ftp://">ftp://</option>
                    </select>

                </div>

                <div class="space-y-2">
                    <x-jet-label value="Link" />
                    <x-jet-input type="text" name="" />
                </div>


            </div>
        </div>

        <div class="my-2 px-2 w-full overflow-hidden xl:w-1/2">
            3 grupa
        </div>

        <div class="my-2 px-2 w-full overflow-hidden xl:w-1/2">
            4 grupa
        </div>

    </div>


</x-app-layout>