<div 
x-data="{openStatus: true}"
x-show="openStatus"
x-transition:leave="transition ease-in duration-300"
x-transition:leave-start="opacity-100 transform scale-100"
x-transition:leave-end="opacity-0 transform scale-90" 
class="flex justify-between bg-white rounded overflow-hidden p-2 space-x-5">
    <div class="flex items-baseline">
        <span class="bg-white rounded-full p-1 border">
            @switch($state)
                @case(1)
                <x-heroicon-s-check class="h-6 w-auto text-green-400" />
                @break

                @case(2)
                <x-heroicon-s-ban class="h-6 w-auto text-red-400" />
                @break

                @case(3)
                <x-heroicon-o-exclamation class="h-6 w-auto text-yellow-400" />
                @break

                @default
                <x-heroicon-o-information-circle class="h-6 w-auto text-green-400" />
            @endswitch
        </span>
    </div>
    <div class="flex items-center">
        <p class="leading-tight text-xs md:text-sm text-justify">
            {!!$message!!}
        </p>
    </div>
    <div>
        <button type="button"
        x-on:click="openStatus = false"
            class="text-gray-700 rounded overflow-hidden p-1 lg:p-2 focus:outline-none">
            <x-heroicon-s-x class="h-6 w-auto text-gray-400" />
        </button>
    </div>
</div>