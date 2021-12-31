@if (count($breadcrumbs))

<nav class="flex flex-wrap items-center text-sm font-medium text-gray-500 sm:space-x-2 whitespace-nowrap">
    @foreach ($breadcrumbs as $breadcrumb)

    @if ($breadcrumb->url && !$loop->last)
    <a href="{{ $breadcrumb->url }}" class="hidden2 sm:block hover:text-gray-900">
        {{ $breadcrumb->title }}
    </a>
    <svg width="24" height="24" fill="none" class="flex-none text-gray-300 hidden2 sm:block">
        <path d="M10.75 8.75l3.5 3.25-3.5 3.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
            stroke-linejoin="round" />
    </svg>
    @else
    <span class="font-semibold text-green-500 hidden2 sm:block">
        {{ $breadcrumb->title }}
    </span>
    @endif

    @endforeach
</nav>

@endif