@props(['active'])

@php
$classes = ($active ?? false)
? 'text-indigo-600'
: 'text-gray-500 hover:text-gray-800';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>