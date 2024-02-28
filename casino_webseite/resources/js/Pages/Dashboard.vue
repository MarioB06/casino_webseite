<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';


</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div style="font-size: 2rem; font-weight: bold; text-align: center;">
                    <div class="p-6 text-gray-900 dark:text-gray-100">Herzlich willkommen im virtuellen Casino! <br> Tauchen Sie ein in die Welt des Glücks, ohne echtes Geld zu riskieren.</div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 1rem;">
                    <div class="p-6 text-gray-900 dark:text-gray-100">Kontostand: {{ $attrs.account }} CHF </div>
                </div>
                <div class="flex">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg motion-safe:hover:scale-[1.05] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500" style="margin-top: 3rem; inline-size: 33.33% ; margin-right: 1rem;" >
                        <div class="p-6 text-gray-900 dark:text-gray-100" style="text-align: center;">
                            <p style="font-weight: bold; font-size: large;">Slot Machine</p>
                            <p style="text-align: left;">Setze Einsatz, drehe Walzen. Gewinne bei passenden Symbolen.</p>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg motion-safe:hover:scale-[1.05] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500" style="margin-top: 3rem; inline-size: 33.33% ; margin-right: 1rem;">
                        <div class="p-6 text-gray-900 dark:text-gray-100" style="text-align: center;">
                            <p style="font-weight: bold; font-size: large;">Rocket Dice</p>
                            <p style="text-align: left;">Im Spiel werden zwei Würfel verwendet. Der Spieler platziert einen Einsatz, wählt "Über" oder "Unter" sowie die gewünschte Zahl und wirft die Würfel. Bei korrekter Vorhersage gewinnt der Spieler.</p>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg motion-safe:hover:scale-[1.05] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500" style="margin-top: 3rem; inline-size: 33.33%">
                        <div class="p-6 text-gray-900 dark:text-gray-100" style="text-align: center;">
                            <p style="font-weight: bold; font-size: large;">Find the Cup</p>
                            <p style="text-align: left;">Wähle den Wert, mit dem du spielen möchtest. Drücke auf den 'Drehen'-Button oder wiederhole den Einsatz, um zu spielen.
                                Gewinne, wenn die Symbole auf einer aktivierten Gewinnlinie übereinstimmen!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
