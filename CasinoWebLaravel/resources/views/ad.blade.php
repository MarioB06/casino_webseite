<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ad') }}
        </h2>
    </x-slot>

    <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div style="font-size: 2rem; font-weight: bold; text-align: center;">
                    <div class="p-6 text-gray-900 dark:text-gray-100">Ad</div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 1rem;">
                    <div class="p-6 text-gray-900 dark:text-gray-100">Kontostand: {{ $account }} CHF </div>
                </div>
                <div class="flex">
                    <button class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg motion-safe:hover:scale-[1.05] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500" style="margin-top: 3rem; inline-size: 100%; padding: 5rem"><img src="../../img/playButton.png" alt="Play Button" style="margin: auto; height: 5rem"></button>
                </div>
            </div>
        </div>
</x-app-layout>
