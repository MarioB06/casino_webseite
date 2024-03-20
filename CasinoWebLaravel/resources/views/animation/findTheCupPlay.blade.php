<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Find the Cup') }}
        </h2>
    </x-slot>

    <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div style="font-size: 2rem; font-weight: bold; text-align: center;">
                    <div class="p-6 text-gray-900 dark:text-gray-100">Find the Cup</div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 1rem;">
                    <div class="p-6 text-gray-900 dark:text-gray-100" style="text-align: center;">
                        <button @click="startGame">Start</button>
                        <div class="gameContainer">
                            <div class="cup" id="cup1"></div>
                            <div class="cup" id="cup2"></div>
                            <div class="cup" id="cup3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    
</x-app-layout>

<style>

.gameContainer{
border-width: 0.1rem;
border-color: black;
border-radius: 0.5rem;
padding: 10rem;
}

.cup{
    height: 6rem;
    width: 5rem;
    background-color: aquamarine;
    margin: 5rem;
    display: inline-block;
}

.cup.red {
  background-color: red;
}

button{
    background-color: aquamarine;
    padding: 1rem;
    margin: 0.5rem;
    border-radius: 0.5rem;
    font-weight: bold;
}

</style>

<script>
let cup2Timer;

function startGame() {
  // Reset cup colors
  document.querySelectorAll('.cup').forEach((cup) => {
    cup.classList.remove('red');
  });

  setTimeout(() => {
    animateRedCup2(3, 250);
  }, 500);
}

function animateRedCup2(repetitions, duration) {
  let count = 0;
  cup2Timer = setInterval(() => {
    const cup2 = document.getElementById('cup2');
    if (cup2) {
      cup2.classList.toggle('red');
      count++;

      if (count >= 2 * repetitions) {
        clearInterval(cup2Timer);
        setTimeout(() => {
          // Reset cup color after a delay
          cup2.classList.remove('red');
        }, duration);
      }
    }
  }, duration);
}
</script>
