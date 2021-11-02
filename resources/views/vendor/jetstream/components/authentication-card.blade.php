<div class="min-h-screen flex flex-col sm:justify-center items-center pt-16 sm:pt-0 bg-white">
    <div class="flex items-center space-x-3">
        {{ $logo }}
        <p class="logo login border-b">{{ config('app.name', 'Larax') }}</p>
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>