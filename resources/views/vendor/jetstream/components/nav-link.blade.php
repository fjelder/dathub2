@props(['active'])

@php
$classes = ($active ?? false)
? 'flex items-center text-sm font-medium text-indigo-600'
: 'flex items-center text-sm font-medium text-gray-700 hover:text-gray-800';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>