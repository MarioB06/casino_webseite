@php
    $images = [
        asset('img/dice_img/Dice (1).png'),
        asset('img/dice_img/Dice (2).png'),
        asset('img/dice_img/Dice (3).png'),
        asset('img/dice_img/Dice (4).png'),
        asset('img/dice_img/Dice (5).png'),
        asset('img/dice_img/Dice (6).png')
    ];

    // Erhöhen Sie die Anzahl der Bilder dynamisch, um die Animation unendlich fortzusetzen
    $totalImages = 100; // Anzahl der insgesamt angezeigten Bilder (Anzahl der Würfe)
    $extendedImages = [];
    for ($i = 0; $i < $totalImages; $i++) {
        $extendedImages = array_merge($extendedImages, $images);
    }
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <Head title="Animations_Dice" />

        <AuthenticatedLayout>
            <div id="header">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Animation (Dice)</h2>
            </div>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div style="font-size: 2rem; font-weight: bold; text-align: center;">
                        <div class="p-6 text-gray-900 dark:text-gray-100">Rocket Dice (Animations)</div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 1rem;">
                    <div class="animation-container p-6 text-gray-900 dark:text-gray-100">
        @foreach ($extendedImages as $index => $image)
            @if ($index + 1 == $dice_1 || $index + 1 == $dice_2)
                <img class="image" src="{{ $images[$index % count($images)] }}" alt="Image {{ $index + 1 }}" style="animation-delay: {{ $index * 0.2 }}s;">
            @else
                <img class="image" src="{{ $images[$index % count($images)] }}" alt="Image {{ $index + 1 }}" style="animation-delay: {{ $index * 0.2 }}s; opacity: 0;">
            @endif
        @endforeach
    </div>
    <div class="animation-container p-6 text-gray-900 dark:text-gray-100">
    @foreach ($extendedImages as $index => $image)
        @if ($index + 1 == $dice_1 || $index + 1 == $dice_2)
            <img class="image" src="{{ $images[$index % count($images)] }}" alt="Image {{ $index + 1 }}" style="animation-delay: {{ $index * 0.2 }}s;">
        @else
            <img class="image" src="{{ $images[$index % count($images)] }}" alt="Image {{ $index + 1 }}" style="animation-delay: {{ $index * 0.2 }}s; opacity: 0;">
        @endif
    @endforeach
</div>

                    </div>

                    <br>

                    <div class="py-12">
                      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 1rem;">
                              <div class="p-6 text-gray-900 dark:text-gray-100">
                                  <!-- Anzeige von dice_1, dice_2 und profit -->
                                  <p>Erster Würfel: {{ $dice_1 }}</p>
                                  <p>Zweiter Würfel: {{ $dice_2 }}</p>
                                  <p>Profit: {{ $profit }}</p>

                                  <!-- Hier können Sie Ihre Animationsbilder und den entsprechenden Code einfügen -->

                                  @if ($dice_1)
                    <img src="{{ asset('img/dice_img/Dice (' . $dice_1 . ').png') }}" alt="Dice {{ $dice_1 }}" style="width: 50px; height: 50px;">
                @endif
                @if ($dice_2)
                    <img src="{{ asset('img/dice_img/Dice (' . $dice_2 . ').png') }}" alt="Dice {{ $dice_2 }}" style="width: 50px; height: 50px;">
                @endif

                              </div>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </AuthenticatedLayout>
    </div>

    <style scoped>
        .animation-container {
            position: relative;
            width: 200px; /* Adjust width as needed */
            height: 200px; /* Adjust height as needed */
            overflow: hidden;
        }

        .image {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            animation: fadeInOut {{ count($images) * $totalImages * 0.7 }}s infinite linear; /* Adjust duration based on the number of images and total iterations */
        }

        @keyframes fadeInOut {
            0% {
                opacity: 1;
            }
            16.666% {
                opacity: 0;
            }
            16.667% {
                opacity: 0;
            }
            33.333% {
                opacity: 1;
            }
            50% {
                opacity: 1;
            }
            66.666% {
                opacity: 0;
            }
            66.667% {
                opacity: 0;
            }
            83.333% {
                opacity: 1;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
<script>
    window.onload = function() {
        var diceImages = document.querySelectorAll('.animation-container img');
        setTimeout(function() {
            diceImages.forEach(function(image) {
                image.style.animation = 'none';
                image.style.opacity = 1; // Stellen Sie sicher, dass das letzte Bild sichtbar ist
            });
            
            // Bilder von $dice_1 und $dice_2 anzeigen
            var diceImage1 = document.querySelector('.animation-container img:nth-child({{ $dice_1 }})');
            var diceImage2 = document.querySelector('.animation-container img:nth-child({{ $dice_2 }})');
            diceImage1.style.opacity = 1;
            diceImage2.style.opacity = 1;
        }, 5000); // 5000 Millisekunden entsprechen 5 Sekunden
    };
</script>






</x-app-layout>
