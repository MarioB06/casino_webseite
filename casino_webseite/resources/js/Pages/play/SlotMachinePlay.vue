<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Slot Machine" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Find the Cup</h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div style="font-weight: bold; text-align: center;">
                    <div class="p-6 text-gray-900 dark:text-gray-100" style="">
                        <p style="font-size: 2rem;">Find the Cup</p>
                    </div>
                </div>
            </div>
        </div>


    </AuthenticatedLayout>
</template>