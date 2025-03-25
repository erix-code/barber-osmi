<script setup lang="ts">
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

const isMenuOpen = ref(false);

const navigation = [
    { name: 'Inicio', href: route('home') },
    { name: 'Servicios', href: route("home") + '#services' },
    { name: 'Precios', href: route("home") + '#pricing' },
    { name: 'Contacto', href: route("home") + '#contact' },
];

// Close mobile menu when clicking on a link
const handleNavClick = () => {
    isMenuOpen.value = false;
    // Add a small delay to allow the hash navigation to work
    setTimeout(() => {
        const hash = window.location.hash;
        if (hash) {
            const element = document.querySelector(hash);
            if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
            }
        }
    }, 100);
};
</script>

<template>
    <div>
        <!-- Backdrop -->
        <div 
            v-show="isMenuOpen" 
            class="fixed inset-0 bg-gray-900/80 backdrop-blur-sm z-40 lg:hidden"
            @click="isMenuOpen = false"
        ></div>

        <header class="fixed w-full top-0 z-30 bg-gray-900/95 backdrop-blur-sm border-b border-[#ffdf00]/10">
            <nav class="mx-auto flex max-w-7xl items-center justify-between p-4 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <Link :href="route('home')" class="-m-1.5 p-1.5">
                        <span class="text-2xl font-bold text-[#ffdf00]">Osmi Barberstudio</span>
                    </Link>
                </div>
                
                <!-- Mobile menu button -->
                <div class="flex lg:hidden">
                    <button 
                        type="button" 
                        class="inline-flex items-center justify-center rounded-md p-2.5 text-gray-400 hover:text-[#ffdf00] transition-colors"
                        @click="isMenuOpen = !isMenuOpen"
                    >
                        <span class="sr-only">{{ isMenuOpen ? 'Cerrar menú' : 'Abrir menú' }}</span>
                        <svg 
                            class="h-6 w-6" 
                            fill="none" 
                            viewBox="0 0 24 24" 
                            stroke-width="1.5" 
                            stroke="currentColor"
                        >
                            <path 
                                stroke-linecap="round" 
                                stroke-linejoin="round" 
                                :d="isMenuOpen ? 'M6 18L18 6M6 6l12 12' : 'M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5'"
                            />
                        </svg>
                    </button>
                </div>

                <!-- Desktop menu -->
                <div class="hidden lg:flex lg:gap-x-12">
                    <Link 
                        v-for="item in navigation" 
                        :key="item.name"
                        :href="item.href"
                        class="text-sm font-semibold leading-6 text-white hover:text-[#ffdf00] transition-colors"
                        @click="handleNavClick"
                    >
                        {{ item.name }}
                    </Link>
                </div>

                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <Link 
                        :href="route('reservation')" 
                        class="rounded-md bg-[#ffdf00] px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-[#ffdf00]/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#ffdf00] transition-all"
                    >
                        Reservar
                    </Link>
                </div>
            </nav>

            <!-- Mobile menu -->
            <div 
                v-show="isMenuOpen"
                class="lg:hidden"
            >
                <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10 transform transition-transform duration-300 ease-in-out"
                     :class="isMenuOpen ? 'translate-x-0' : 'translate-x-full'"
                >
                    <div class="flex items-center justify-between mb-6">
                        <Link :href="route('home')" class="-m-1.5 p-1.5">
                            <span class="text-2xl font-bold text-[#ffdf00]">Osmi Barberstudio</span>
                        </Link>
                        <button 
                            type="button" 
                            class="rounded-md p-2.5 text-gray-400 hover:text-[#ffdf00] transition-colors"
                            @click="isMenuOpen = false"
                        >
                            <span class="sr-only">Cerrar menú</span>
                            <svg 
                                class="h-6 w-6" 
                                fill="none" 
                                viewBox="0 0 24 24" 
                                stroke-width="1.5" 
                                stroke="currentColor"
                            >
                                <path 
                                    stroke-linecap="round" 
                                    stroke-linejoin="round" 
                                    d="M6 18L18 6M6 6l12 12" 
                                />
                            </svg>
                        </button>
                    </div>
                    <div class="flow-root">
                        <div class="divide-y divide-gray-700">
                            <div class="space-y-2 py-6">
                                <a
                                    v-for="item in navigation"
                                    :key="item.name"
                                    :href="item.href"
                                    class="block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800 hover:text-[#ffdf00] transition-colors"
                                    @click="handleNavClick"
                                >
                                    {{ item.name }}
                                </a>
                            </div>
                            <div class="py-6">
                                <a
                                    href="#"
                                    class="block w-full rounded-md bg-[#ffdf00] px-3.5 py-2.5 text-center text-sm font-semibold text-gray-900 shadow-sm hover:bg-[#ffdf00]/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#ffdf00] transition-all"
                                >
                                    Reservar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
</template>

<style scoped>
.backdrop-blur-sm {
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
}
</style>