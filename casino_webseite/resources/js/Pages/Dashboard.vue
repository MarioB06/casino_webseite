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
                <h1 style="font-weight: bold; font-size: 2rem; padding: 1rem; text-align: center;">Herzlich willkommen im virtuellen Casino! <br> Tauchen Sie ein in die Welt des Glücks, ohne echtes Geld zu riskieren.</h1>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 1rem;">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h2 style="font-weight: bold;">Money: </h2>
                    </div>
                </div>
                <div class="flex">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500" style="margin-top: 3rem; inline-size: 33.33% ; margin-right: 1rem;;" >
                        <a href="slotMachine">
                            <div class="p-6 text-gray-900 dark:text-gray-100" style="text-align: center;">
                                <h2 style="font-weight: bold;">Slot Machine</h2>
                                <p style="text-align: left; margin-top: 1rem;">in this game you...</p>
                            </div>
                        </a>
                    </div>
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500" style="margin-top: 3rem; inline-size: 33.33% ; margin-right: 1rem;">
                        <a href="rocketDice">
                            <div class="p-6 text-gray-900 dark:text-gray-100" style="text-align: center;">
                                <h2 style="font-weight: bold;">Rocket Dice</h2>
                                <p style="text-align: left; margin-top: 1rem;">in this game you...</p>
                            </div>
                        </a>
                    </div>
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500" style="margin-top: 3rem; inline-size: 33.33%">
                        <a href="findTheCup">
                            <div class="p-6 text-gray-900 dark:text-gray-100" style="text-align: center;">
                                <h2 style="font-weight: bold;">Find the Cup</h2>
                                <p style="text-align: left; margin-top: 1rem;">in this game you...</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
