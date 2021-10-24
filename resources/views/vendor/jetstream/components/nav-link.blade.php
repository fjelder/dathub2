@props(['active'])

@php
$classes = ($active ?? false)
? 'flex items-center text-sm font-medium border-b-2 border-indigo-600 text-indigo-600'
: 'flex items-center text-sm font-medium text-gray-700 hover:text-gray-800 border-transparent text-gray-700';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>