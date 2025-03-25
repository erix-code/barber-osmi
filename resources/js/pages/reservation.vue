<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import Header from '@/components/Header.vue';
import ReservationForm from '@/components/pages/reservation/ReservationForm.vue';
</script>

<template>
    <Head title="OSMI - Reservaciones">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>

    <Header />

    <div class="min-h-screen bg-gray-900 pt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h1 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    Reserva tu Cita
                </h1>
                <p class="mt-4 text-lg leading-8 text-gray-300">
                    Selecciona el servicio, fecha y hora que prefieras
                </p>
            </div>
            
            <ReservationForm />
        </div>
    </div>
</template>

<style>
body {
    font-family: 'Inter var', sans-serif;
}
</style>

