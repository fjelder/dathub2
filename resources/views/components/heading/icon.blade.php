@props([
    'name',
    'text',
    'style' => 'o'
])
@php 
    if($style !== 's')
        $style = 'o';
    $iconName = 'heroicon-'.$style.'-'.$name;
@endphp

@isset($name)
<div class="mt-2 flex items-center text-sm text-gray-500">
    <x-dynamic-component :component="$iconName" class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" />
    @isset($text)
        {{$text}}
    @endif
</div>
@endif