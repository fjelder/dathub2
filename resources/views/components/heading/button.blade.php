@props([
    'icon',
    'href',
    'title',
    'buttonStyle',
    'iconStyle' => 'o'
])
@php
    switch($buttonStyle){
        case 1:
            $buttonClass = ' border-transparent text-white bg-indigo-600 hover:bg-indigo-700 ';
            break;
        case 2:
        $buttonClass = ' border-transparent text-white bg-red-600 hover:bg-red-700 ';
        break;
        case 3:
        $buttonClass = ' border-transparent text-white bg-green-600 hover:bg-green-700 ';
        break;
        default:
            $buttonClass = 'border-gray-300 text-gray-700 bg-white hover:bg-gray-50';
            break;
    };
    if($iconStyle !== 's')
        $iconStyle = 'o';
    $iconName = 'heroicon-'.$iconStyle.'-'.$icon;
@endphp
<span class="sm:ml-3">
    <a href="{{$href}}" class="inline-flex items-center px-4 py-2 border rounded-md shadow-sm text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 {{$buttonClass}}" {{ $attributes }}>
        <x-dynamic-component :component="$iconName" class="-ml-1 mr-2 h-5 w-5" />
        {{$title}}
    </a>
</span>

