<script setup lang="ts">
const prices = [
    {
        name: 'Corte Básico',
        price: 30,
        features: ['Corte Clásico', 'Peinado Básico', 'Consulta'],
    },
    {
        name: 'Paquete Premium',
        price: 50,
        features: ['Corte Premium', 'Recorte de Barba', 'Tratamiento Capilar', 'Peinado'],
        featured: true,
    },
    {
        name: 'Tratamiento Real',
        price: 75,
        features: ['Corte de Lujo', 'Arreglo Premium de Barba', 'Tratamiento Capilar', 'Masaje de Cabeza', 'Bebida de Cortesía'],
    },
];
</script>

<template>
    <div id="pricing" class="py-24 sm:py-32 bg-gray-800/30">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Precios Simples y Transparentes</h2>
                <p class="mt-6 text-lg leading-8 text-gray-300">
                    Elige el paquete perfecto para tus necesidades
                </p>
            </div>

            <div class="mx-auto mt-16 grid max-w-lg grid-cols-1 gap-8 lg:max-w-none lg:grid-cols-3">
                <div v-for="tier in prices" :key="tier.name"
                     :class="[
                         tier.featured ? 'bg-[#ffdf00] text-gray-900' : 'bg-gray-800/50',
                         'rounded-3xl p-8 ring-1 ring-gray-700 xl:p-10 relative'
                     ]">
                    <div class="flex items-center justify-between gap-x-4">
                        <h3 :class="[
                            tier.featured ? 'text-gray-900' : 'text-[#ffdf00]',
                            'text-lg font-semibold leading-8'
                        ]">{{ tier.name }}</h3>
                    </div>
                    <p class="mt-6 flex items-baseline gap-x-1">
                        <span class="text-4xl font-bold tracking-tight text-white">{{ tier.price }} Bs</span>
                    </p>
                    <ul role="list" :class="['mt-8 mb-20 space-y-3 text-sm leading-6', tier.featured ? 'text-gray-900' : 'text-gray-300']">
                        <li v-for="feature in tier.features" :key="feature" class="flex gap-x-3">
                            <svg :class="['h-6 w-5 flex-none ', tier.featured ? 'text-gray-900' : 'text-[#ffdf00]']" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            {{ feature }}
                        </li>
                    </ul>
                    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-full px-3">
                        <a href="#"
                           :class="[
                               tier.featured ? 'bg-gray-900 text-[#ffdf00] hover:bg-gray-800' : 'bg-[#ffdf00] text-gray-900 hover:bg-[#ffdf00]/90',
                               'mt-8 w-full block rounded-md px-3 py-2 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#ffdf00]'
                           ]">
                            Reservar Ahora
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template> 