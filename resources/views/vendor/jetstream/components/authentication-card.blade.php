<div class="flex flex-col items-center min-h-screen pt-16 bg-white sm:justify-center sm:pt-0">
    <div class="flex items-center space-x-3 text-4xl font-bold">
        {{ $logo }}
        <p class="hidden border-b logo login">{{ config('app.name', 'Larax') }}</p>
        <span class="tracking-wider text-green-800">{{config('app.name',
            'Larax')}}</span>
    </div>

    <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
        {{ $slot }}
    </div>
</div>