@props([
'open' => 'false',
'title' => ''
])
<div class="border-b border-gray-200 pb-6" x-data="{open: {{$open}} }">
    <h3 class="-my-3 flow-root">
        <!-- Expand/collapse section button -->
        <button type="button"
            class="py-3 bg-white w-full flex items-center justify-between text-sm text-gray-400 hover:text-gray-500"
            aria-controls="filter-section-0" aria-expanded="false">
            <span class="font-medium text-gray-900">
                {{$title}}
            </span>
            <span class="ml-6 flex items-center">
                <x-heroicon-s-plus class="h-5 w-5" @click="open=true" />
                <x-heroicon-s-minus-sm class="h-5 w-5" @click="open=false" />
            </span>
        </button>
    </h3>
    <!-- Filter section, show/hide based on section state. -->
    <div class="pt-6" id="filter-section-0" 
    x-show="open" 
    x-cloak 
    x-transition:enter="transition ease-out duration-100"
    x-transition:enter-start="opacity-0 transform scale-90" 
    x-transition:enter-end="opacity-100 transform scale-100"
    x-transition:leave="transition ease-in duration-75" 
    x-transition:leave-start="opacity-100 transform scale-100"
    x-transition:leave-end="opacity-0 transform scale-90">
        <div class="space-y-4">
            {{$slot}}
            
        </div>
    </div>
</div>