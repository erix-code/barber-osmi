<script setup lang="ts">
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
</script>

<template>
    <div id="contact" class="py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Contáctanos</h2>
                <p class="mt-6 text-lg leading-8 text-gray-300">
                    ¿Tienes preguntas? Estamos aquí para ayudarte
                </p>
            </div>

            <div class="mx-auto mt-16 grid max-w-4xl grid-cols-1 gap-8 sm:grid-cols-2">
                <div class="rounded-2xl bg-gray-800/50 p-8">
                    <h3 class="text-xl font-semibold text-white">Información de Contacto</h3>
                    <dl class="mt-6 space-y-4 text-base leading-7 text-gray-300">
                        <div class="flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Address</span>
                                <font-awesome-icon icon="location-dot" class="h-7 w-6 text-gray-400" />
                            </dt>
                            <dd>123 Barber Street<br>City, State 12345</dd>
                        </div>
                        <div class="flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Telephone</span>
                                <font-awesome-icon icon="phone" class="h-7 w-6 text-gray-400" />
                            </dt>
                            <dd><a class="hover:text-white" href="tel:+1 (555) 234-5678">+1 (555) 234-5678</a></dd>
                        </div>
                        <div class="flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Email</span>
                                <font-awesome-icon icon="envelope" class="h-7 w-6 text-gray-400" />
                            </dt>
                            <dd><a class="hover:text-white" href="mailto:info@barberosmi.com">info@barberosmi.com</a></dd>
                        </div>
                    </dl>
                    <div class="mt-8">
                        <h4 class="text-lg font-semibold text-white">Horario de Atención</h4>
                        <dl class="mt-4 space-y-2 text-base leading-7 text-gray-300">
                            <div class="flex justify-between">
                                <dt>Lunes - Viernes</dt>
                                <dd>9:00 - 20:00</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt>Sábado</dt>
                                <dd>9:00 - 18:00</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt>Domingo</dt>
                                <dd>10:00 - 16:00</dd>
                            </div>
                        </dl>
                    </div>
                </div>

                <div class="rounded-2xl bg-gray-800/50 p-8">
                    <h3 class="text-xl font-semibold text-white">Envíanos un Mensaje</h3>
                    <form class="mt-6 space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-300">Nombre</label>
                            <input type="text" id="name" class="mt-2 block w-full rounded-md border-0 bg-gray-700 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-600 focus:ring-2 focus:ring-inset focus:ring-[#ffdf00] sm:text-sm sm:leading-6" />
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-300">Correo Electrónico</label>
                            <input type="email" id="email" class="mt-2 block w-full rounded-md border-0 bg-gray-700 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-600 focus:ring-2 focus:ring-inset focus:ring-[#ffdf00] sm:text-sm sm:leading-6" />
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-300">Mensaje</label>
                            <textarea id="message" rows="4" class="mt-2 block w-full rounded-md border-0 bg-gray-700 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-600 focus:ring-2 focus:ring-inset focus:ring-[#ffdf00] sm:text-sm sm:leading-6"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="w-full rounded-md bg-[#ffdf00] px-3.5 py-2.5 text-center text-sm font-semibold text-gray-900 shadow-sm hover:bg-[#ffdf00]/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#ffdf00]">
                                Enviar Mensaje
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template> 