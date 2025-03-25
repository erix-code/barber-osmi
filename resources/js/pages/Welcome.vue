<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import Header from '@/components/Header.vue';
import Hero from '@/components/pages/home/Hero.vue';
import Services from '@/components/pages/home/Services.vue';
import Pricing from '@/components/pages/home/Pricing.vue';
import Contact from '@/components/pages/home/Contact.vue';

</script>

<template>
    <Head title="OSMI - Barbería">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>

    <Header />

    <div class="min-h-screen bg-gray-900 pt-20">
        <Hero />
        <Services />
        <Pricing />
        <Contact />
    </div>
</template>

<style>
body {
    font-family: 'Inter var', sans-serif;
}
</style>
