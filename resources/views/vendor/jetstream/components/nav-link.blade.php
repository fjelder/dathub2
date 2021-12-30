@props(['active'])

@php
$classes = ($active ?? false)
? 'active'
: '';
@endphp

<a {{ $attributes->merge(['class' => $classes.' space-x-2']) }}>
    {{ $slot }}
</a>