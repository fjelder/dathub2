@props(['title', 'open' => false])
@php
    if($open)
        $open = 'true';
    else {
        $open = 'false';
    }
@endphp
<div x-data="{open: {!! $open !!} }">
    <p @click="open = !open" class="font-medium text-gray-900 cursor-pointer">
        {{ $title }}
    </p>
    <ul x-show="open" role="list" class="mt-6 flex flex-col space-y-6">
        {{$slot}}
    </ul>
</div>