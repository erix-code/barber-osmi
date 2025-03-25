<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import Header from '@/components/Header.vue';
import { library } from '@fortawesome/fontawesome-svg-core';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { 
    faScissors,
    faFlask,
    faStar, 
    faUser, 
    faLocationDot,
    faPhone,
    faEnvelope 
} from '@fortawesome/free-solid-svg-icons';

library.add( faStar, faUser,  faLocationDot, faPhone, faEnvelope, faScissors, faFlask);

const services = [
    {
        title: 'Afeitado',
        description: 'Afeitado tradicional con navaja y tratamiento de toalla caliente',
        icon: 'scissors',
    },
    {
        title: 'Corte',
        description: 'Corte y peinado de precisión adaptado a tus preferencias',
        icon: 'star',
    },
    {
        title: 'Peinado',
        description: 'Estilismo contemporáneo con productos premium',
        icon: 'user',
    },
    {
        title: 'Tratamiento Capilar',
        description: 'Tratamientos especializados para el cuidado del cabello',
        icon: 'flask',
    },
];

</script>

<template>
    <div id="services" class="py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Nuestros Servicios</h2>
                <p class="mt-6 text-lg leading-8 text-gray-300">
                    Experimenta servicios premium de cuidado personal adaptados a tu estilo
                </p>
            </div>
            <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-6 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-4">
                <div v-for="service in services" :key="service.title" 
                     class="flex flex-col overflow-hidden rounded-lg bg-gray-800/50 shadow-lg transition-all hover:bg-gray-800">
                    <div class="flex-shrink-0 flex items-center justify-center pt-6">
                        <font-awesome-icon 
                            :icon="service.icon" 
                            class="h-16 w-16 text-[#ffdf00]"
                        />
                    </div>
                    <div class="flex flex-1 flex-col justify-between p-6">
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-white text-center">
                                {{ service.title }}
                            </h3>
                            <p class="mt-3 text-base text-gray-300 text-center">
                                {{ service.description }}
                            </p>
                        </div>
                        <div class="mt-4 text-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template> 