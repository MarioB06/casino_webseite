<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Find the Cup') }}
        </h2>
    </x-slot>

    <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div style="font-weight: bold; text-align: center;">
                    <div class="p-6 text-gray-900 dark:text-gray-100" style="">
                        <p style="font-size: 2rem;">Find the Cup</p>
                        <br>
                        <p style="font-size: 1rem;">1. Wählen Sie einen Einsatz <br>
                            2. Betätigen Sie den "Spielen" Knopf<br>
                            3. Behalten Sie den aufleuchtenden Becher im Auge<br>
                            4. Die Becher werden nun durchmischt<br>
                            5. Wählen Sie den zuvor aufleuchtenden Becher aus<br>
                            6. Falls Sie richtig lagen, gewinnen Sie
                        </p>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 1rem;">
                    <form action="/submit" method="post"> 
                        <div style="display: grid; grid-template-columns: 8fr 1fr;">
                            <div class="p-6 text-gray-900 dark:text-gray-100">
                                Kontostand: {{ $account }} CHF<br>
                                <label for="bet_amount">Einsatz: </label>
                                <input type="text" class="form-control" id="einsatz" placeholder="mind. 1 CHF">
                            </div>
                            <div style="margin: 1.5rem;">
                                <button class="p-6 text-gray-900 dark:text-gray-100 motion-safe:hover:scale-[1.05] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500" style="background-color: aquamarine; border-radius: 0.5rem;"><input type="submit" value="Spielen"></button>
                            </div>    
                        </div>
                    </form>
                </div>          
            </div>
        </div>

</x-app-layout>