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
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">Welcome!</div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 1rem;">
                    <div class="p-6 text-gray-900 dark:text-gray-100">Money: {{ $attrs.account }} CHF </div>
                </div>
                <div class="flex">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 3rem; inline-size: 33.33% ; margin-right: 1rem;" >
                        <div class="p-6 text-gray-900 dark:text-gray-100" style="text-align: center;">
                            Slot Machine
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 3rem; inline-size: 33.33% ; margin-right: 1rem;">
                        <div class="p-6 text-gray-900 dark:text-gray-100" style="text-align: center;">
                            Rocket Dice
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 3rem; inline-size: 33.33%">
                        <div class="p-6 text-gray-900 dark:text-gray-100" style="text-align: center;">
                            Find the Cup
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
