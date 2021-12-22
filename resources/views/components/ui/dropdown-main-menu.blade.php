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
        class="flex items-center justify-between w-full p-1 transition-colors duration-500 ease-in-out rounded my-2a px-2a focus:outline-gray"
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

        <a href=""
            class="flex items-center px-2 py-2 my-2 transition-colors duration-500 ease-in-out rounded hover:shadow">
            <span class="mr-4">
                <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M20.71 16.71l-2.42-2.42a1 1 0 00-1.42 0l-3.58 3.58a1 1 0 00-.29.71V21a1 1 0 001 1h2.42a1 1 0 00.71-.29l3.58-3.58a1 1 0 000-1.42zM16 20h-1v-1l2.58-2.58 1 1zm-6 0H6a1 1 0 01-1-1V5a1 1 0 011-1h5v3a3 3 0 003 3h3v1a1 1 0 002 0V9v-.06a1.31 1.31 0 00-.06-.27v-.09a1.07 1.07 0 00-.19-.28l-6-6a1.07 1.07 0 00-.28-.19.32.32 0 00-.09 0L12.06 2H6a3 3 0 00-3 3v14a3 3 0 003 3h4a1 1 0 000-2zm3-14.59L15.59 8H14a1 1 0 01-1-1zM8 14h6a1 1 0 000-2H8a1 1 0 000 2zm0-4h1a1 1 0 000-2H8a1 1 0 000 2zm2 6H8a1 1 0 000 2h2a1 1 0 000-2z">
                    </path>
                </svg>
            </span>
            <span>{{ trans('Roles') }}</span>
        </a>
        <a href=""
            class="flex items-center px-2 py-2 my-2 transition-colors duration-500 ease-in-out rounded hover:shadow">
            <span class="mr-4">
                <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M10.21 14.75a1 1 0 001.42 0l4.08-4.08a1 1 0 00-1.42-1.42l-3.37 3.38-1.21-1.22a1 1 0 00-1.42 1.42zM21 2H3a1 1 0 00-1 1v18a1 1 0 001 1h18a1 1 0 001-1V3a1 1 0 00-1-1zm-1 18H4V4h16z" />
                </svg>
            </span>
            <span>{{ trans('Permissions') }}</span>
        </a>
        <a href=""
            class="flex items-center px-2 py-2 my-2 transition-colors duration-500 ease-in-out rounded hover:shadow">
            <span class="mr-4">
                <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M12.3 12.22A4.92 4.92 0 0014 8.5a5 5 0 00-10 0 4.92 4.92 0 001.7 3.72A8 8 0 001 19.5a1 1 0 002 0 6 6 0 0112 0 1 1 0 002 0 8 8 0 00-4.7-7.28zM9 11.5a3 3 0 113-3 3 3 0 01-3 3zm9.74.32A5 5 0 0015 3.5a1 1 0 000 2 3 3 0 013 3 3 3 0 01-1.5 2.59 1 1 0 00-.5.84 1 1 0 00.45.86l.39.26.13.07a7 7 0 014 6.38 1 1 0 002 0 9 9 0 00-4.23-7.68z" />
                </svg>
            </span>
            <span>{{ trans('Users') }}</span>
        </a>
    </div>


</div>