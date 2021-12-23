@props([
'title' => 'Title',
'direct' => 'left',
'icon' => '',
'iconStyle' => 'o'
])
@php
switch($direct) {
case 'left':
$direct = 'left-0';
break;

case 'right':
$direct = 'right-0';
break;

default:
$direct = 'left-0';
break;
}

if(!empty($icon)){

if(empty($iconStyle))
$iconStyle = 'o';

$icon = 'heroicon-'.$iconStyle.'-'.$icon;
}
@endphp
<div x-data="{showDropdown: false}" @click.away="showDropdown = false" class="relative border-gray-300"
    :class="{ 'z-50': showDropdown }">
    <a href=""
        class="flex items-center justify-between w-full transition-colors duration-500 ease-in-out rounded focus:outline-gray"
        :class="{ 'focus:outline-gray ': showDropdown }" @click.prevent="showDropdown = ! showDropdown">
        <div class="flex items-center">
            @if($icon)
            <span class="mr-4">
                <x-dynamic-component :component="$icon" class="w-5 h-5" />
            </span>
            @endif
            <span>{{ $title }}</span>
        </div>
        <div class="transition-all duration-500 ease-in-out transform" :class="{ 'rotate-180': showDropdown }">
            <x-heroicon-s-chevron-down class="w-5 h-5" />

        </div>

    </a>

    <div class="overflow-y-hidden max-h-0 transition-all ease-in-out duration-300 absolute {{$direct}} bg-white border-gray-300 border-b border-l border-r drodown-body font-normal"
        style="" x-ref="dropdownContainer"
        x-bind:style="showDropdown ? 'max-height: ' + $refs.dropdownContainer.scrollHeight + 'px' : '' ">
        <div class="border-t-2 border-white"></div>
        {{$slot}}
    </div>


</div>