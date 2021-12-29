@props(['active'])

@php
$classes = ($active ?? false)
? 'flex items-center text-sm font-semibold text-green-800 dark:text-green-500 tracking-wider'
: 'flex items-center text-sm font-semibold tracking-wider text-gray-700 hover:text-gray-800 dark:text-gray-300
dark:hover:text-gray-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>