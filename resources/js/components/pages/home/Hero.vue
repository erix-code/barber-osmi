<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

</script>

<template>
    <div class="relative isolate overflow-hidden h-[90vh]">
        <!-- Background image and overlay -->
        <div class="absolute inset-0">
            <img 
                src="/images/barber-shop.jpg" 
                alt="Barber Shop" 
                class="h-full w-full object-cover brightness-50 md:object-cover object-[25%] sm:object-[35%]" 
            />
            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/80 via-gray-900/50 to-[#ffdf00]/20"></div>
        </div>

        <!-- Decorative elements -->
        <div class="absolute left-0 top-0 -z-10 h-full w-full">
            <svg
                class="absolute inset-0 h-full w-full stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
                aria-hidden="true"
            >
                <defs>
                    <pattern
                        id="983e3e4c-de6d-4c3f-8d64-b9761d1534cc"
                        width="200"
                        height="200"
                        x="50%"
                        y="-1"
                        patternUnits="userSpaceOnUse"
                    >
                        <path d="M.5 200V.5H200" fill="none" />
                    </pattern>
                </defs>
                <rect
                    width="100%"
                    height="100%"
                    stroke-width="0"
                    fill="url(#983e3e4c-de6d-4c3f-8d64-b9761d1534cc)"
                />
                <svg x="50%" y="-1" class="overflow-visible fill-[#ffdf00]/10">
                    <path
                        d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
                        stroke-width="0"
                    />
                </svg>
            </svg>
        </div>
        
        <!-- Content -->
        <div class="relative flex h-full items-center px-6 py-24 sm:px-12 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl font-serif">
                    Barbería <span class="text-[#ffdf00]">OSMI</span>
                </h1>
                <p class="mt-6 text-lg leading-8 text-gray-300">
                    Donde la artesanía tradicional se encuentra con el estilo moderno. Experimenta el arte de la excelencia en el cuidado personal.
                </p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <Link 
                        :href="route('reservation')" 
                        class="rounded-md bg-[#ffdf00] px-5 py-3 text-sm font-semibold text-gray-900 shadow-sm hover:bg-[#ffdf00]/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#ffdf00] transform transition-all hover:scale-105"
                    >
                        Reservar Ahora
                    </Link>
                    <Link 
                        :href="route('home') + '#services'" 
                        class="text-sm font-semibold leading-6 text-white hover:text-[#ffdf00] transition-all flex items-center gap-x-2 group"
                    >
                        Nuestros Servicios 
                        <span aria-hidden="true" class="transform transition-transform group-hover:translate-x-1">→</span>
                    </Link>
                </div>
            </div>
        </div>

        <!-- Bottom fade -->
        <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-gray-900"></div>
    </div>
</template> 