<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Rocket Dice') }}
        </h2>
    </x-slot>

    <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div style="font-weight: bold; text-align: center;">
                    <div class="p-6 text-gray-900 dark:text-gray-100" style="">
                        <p style="font-size: 2rem;">Rocket Dice</p>
                        <br>
                        <p style="font-size: 1rem;">1. Wählen Sie einen Einsatz <br>
                            2. Wählen Sie eine Zahl und bestimme, ob die gewürfelte Zahl kleiner oder grösser sein wird <br>
                            3. Drücken Sie auf "Spielen"
                        </p>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 1rem;">
                    <form action="{{ route('rocketDice.play') }}" method="POST">
                        <div style="display: grid; grid-template-columns: 1fr 1fr;">
                            <div class="p-6 text-gray-900 dark:text-gray-100">
                                Kontostand: {{ $account }} CHF<br>
                                <label for="bet_amount">Einsatz: </label>
                                <input type="text" class="form-control" id="einsatz" placeholder="mind. 1 CHF">
                            </div>
                            <div class="p-6 text-gray-900 dark:text-gray-100">
                                <div>
                                    <label for="number" style="margin: 1rem;">Zahl:</label>
                                    <select id="number" name="number" required>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                    </select>
                                </div>
                                <div>
                                    <input type="radio" id="number_lower" name="option" value="number_lower" required>
                                    <label for="number_lower" style="margin: 0.5rem;">kleiner</label>              
                                                    
                                    <input type="radio" id="number_higher" name="option" value="number_higher" required>
                                    <label for="number_higher" style="margin: 0.5rem;">größer</label>
                                </div>
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