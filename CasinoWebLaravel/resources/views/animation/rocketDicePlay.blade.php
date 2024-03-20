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
                                <img class="image" src="{{ $images[$index % count($images)] }}" alt="Image {{ $index + 1 }}" style="animation-delay: {{ $index * 0.2 }}s;">
                            @endforeach
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
</x-app-layout>
