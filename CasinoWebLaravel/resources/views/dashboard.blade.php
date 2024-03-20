<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div style="font-size: 2rem; font-weight: bold; text-align: center;">
                    <div class="p-6 text-gray-900 dark:text-gray-100">Herzlich willkommen im virtuellen Casino! <br> Tauchen Sie ein in die Welt des Glücks, ohne echtes Geld zu riskieren.</div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 1rem;">
                    <div class="p-6 text-gray-900 dark:text-gray-100">Kontostand: {{ $account }} CHF </div>
                </div>
                <div class="flex">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg motion-safe:hover:scale-[1.05] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500" style="margin-top: 3rem; inline-size: 33.33% ; margin-right: 1rem;" >
                        <a href="{{ url('slotMachine') }}">
                            <div class="p-6 text-gray-900 dark:text-gray-100" style="text-align: center;">
                                <p style="font-weight: bold; font-size: large;">Slot Machine</p>
                                <p style="text-align: left;">Setze einen Einsatz und drehe die Walzen. Gewinne bei passenden Symbolen.</p>
                            </div>
                        </a>
                    </div>
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg motion-safe:hover:scale-[1.05] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500" style="margin-top: 3rem; inline-size: 33.33% ; margin-right: 1rem;">
                        <a href="{{ url('rocketDice') }}">
                            <div class="p-6 text-gray-900 dark:text-gray-100" style="text-align: center;">
                                <p style="font-weight: bold; font-size: large;">Rocket Dice</p>
                                <p style="text-align: left;">Wähle einen Einsatz, bestimme ob die gewürfelte Zahl kleiner oder grösser ist und wirf die Würfel. </p>
                            </div>
                        </a>
                    </div>
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg motion-safe:hover:scale-[1.05] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500" style="margin-top: 3rem; inline-size: 33.33%">
                        <a href="{{ url('findTheCup') }}">
                            <div class="p-6 text-gray-900 dark:text-gray-100" style="text-align: center;">
                                <p style="font-weight: bold; font-size: large;">Find the Cup</p>
                                <p style="text-align: left;">Bestimme den Einsatz, behalte den richtigen Becher im Auge und decke ihn auf. </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            dwsa
        </div>
</x-app-layout>
