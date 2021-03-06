<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->

    <!-- Styles -->

    {{--
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">


    @livewireStyles
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body x-data="{ mobileMenuOpen: false }" class="antialiased">
    <!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->

    <div class="bg-white">
        <div>
            <x-mobile-menu />
        </div>
        <x-jet-banner />
        <header class="relative bg-white border-b border-gray-200">
            @livewire('navigation-menu')
        </header>

        @if (isset($header) || isset($breadcrumbs))
        <div class="bg-white mt-2">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row justify-between">
                <div>
                    @if(isset($header))
                    <h2>{{ $header }}</h2>
                    @endif
                </div>
                <div>
                    @if(isset($breadcrumbs))
                    {{ $breadcrumbs }}
                    @endif
                </div>
            </div>
        </div>
        @endif
        <main>
            {{$slot}}
        </main>
    </div>


    @stack('modals')
    @livewireScripts
</body>

</html>