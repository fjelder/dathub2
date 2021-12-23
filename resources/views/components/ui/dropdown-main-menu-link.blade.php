<a href="{{$href}}" {{ $attributes->merge(['class' => 'box-border flex items-center px-2 py-2 my-2 text-gray-500
    transition-colors duration-100 ease-in-out border-t border-b border-white hover:border-gray-200 hover:bg-gray-100'])
    }}
    class="">
    <span class="mr-4">
        @isset($icon)
        {{$icon}}
        @endif
    </span>
    <span>{{$slot}}</span>
</a>