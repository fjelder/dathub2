@props(['active'])
@php
$classes = ($active ?? false)
? '-m-2 p-2 block text-indigo-500'
: '-m-2 p-2 block text-gray-500';
@endphp
<li class="flow-root">
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</li>