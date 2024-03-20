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
                <!-- Hinzugefügter Button zum Starten des Videos -->
                <button id="playButton" class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg motion-safe:hover:scale-[1.05] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500" style="margin-top: 3rem; inline-size: 100%; padding: 5rem">
                    <img src="../../img/playButton.png" alt="Play Button" style="margin: auto; height: 5rem">
                </button>
            </div>
            <!-- Video-Player -->
            <video id="videoPlayer" controls style="display: none;">
                <source src="ad_video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</x-app-layout>

<script>
    document.getElementById('playButton').addEventListener('click', function() {
        const videoPlayer = document.getElementById('videoPlayer');
        videoPlayer.style.display = 'block'; // Video-Player anzeigen
        videoPlayer.play(); // Video abspielen
    });

    const videoPlayer = document.getElementById('videoPlayer');

    videoPlayer.addEventListener('ended', function() {
        console.log("WWW");
        
        // Fetch-Anfrage zum Vergeben der Belohnung direkt ohne CSRF-Token
        fetch('/give-reward', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => {
            if (response.ok) {
                console.log('Belohnung erhalten!');
                // Kontostand aktualisieren
                const accountElement = document.querySelector('#account');
                const currentBalance = parseFloat(accountElement.textContent);
                const rewardAmount = 10; // Annahme: Belohnungsbetrag ist 10
                const newBalance = currentBalance + rewardAmount;
                accountElement.textContent = newBalance.toFixed(2) + ' CHF'; // Aktualisierten Kontostand anzeigen
            } else {
                console.error('Fehler beim Erhalten der Belohnung');
            }
        })
        .catch(error => console.error('Fehler:', error));
    });
</script>

