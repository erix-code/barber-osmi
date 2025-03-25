<script setup lang="ts">
import { useForm } from '@inertiajs/vue3';
import { router } from '@inertiajs/vue3';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';

const form = useForm({
    selectedDate: null as string | null,
    selectedTime: null as string | null,
    selectedService: null as number | null,
    name: null as string | null,
    phone: null as string | null,
    email: null as string | null
});
// Available time slots (you can adjust these)
const timeSlots = [
    '09:00', '09:30', '10:00', '10:30', '11:00', '11:30',
    '12:00', '12:30', '13:00', '13:30', '14:00', '14:30',
    '15:00', '15:30', '16:00', '16:30', '17:00', '17:30',
    '18:00', '18:30', '19:00', '19:30'
];

const services = [
    { id: 1, name: 'Corte Básico', duration: '30 min', price: '25 Bs' },
    { id: 2, name: 'Paquete Premium', duration: '45 min', price: '50 Bs' },
    { id: 3, name: 'Tratamiento Real', duration: '60 min', price: '75 Bs' },
];

const handleSubmit = () => {
    // Handle form submission
    console.log(form.data());
    // Create a text with the information of the reservation
    const reservationText = `
    Fecha: ${form.selectedDate}\n
    Hora: ${form.selectedTime}\n
    Servicio: ${form.selectedService}\n
    `;
    // send the text to the whatsapp
    // window.open(`https://wa.me/59168458505?text=${reservationText}`, '_blank');
    router.post(route('reservation.store'), {
        date: form.selectedDate,
        time: form.selectedTime,
        service: form.selectedService,
        name: form.name,
        phone: form.phone,
        email: form.email
    });

};
</script>

<template>
    <div class="py-12">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gray-800/50 rounded-lg shadow-xl overflow-hidden">
                <div class="px-6 py-8">
                    <h2 class="text-2xl font-bold text-white text-center mb-8">Reserva tu Cita</h2>
                    
                    <form @submit.prevent="handleSubmit" class="space-y-6">
                        <!-- Service Selection -->
                        <div>
                            <label for="service" class="block text-sm font-medium text-gray-300 mb-2">
                                Selecciona el Servicio
                            </label>
                            <div class="grid gap-4 sm:grid-cols-3">
                                <div v-for="service in services" 
                                     :key="service.id"
                                     @click="form.selectedService = service.id"
                                     :class="[
                                         'cursor-pointer rounded-lg p-4 text-center',
                                         form.selectedService === service.id 
                                             ? 'bg-[#ffdf00] text-gray-900' 
                                             : 'bg-gray-700 text-gray-300 hover:bg-gray-600'
                                     ]"
                                >
                                    <h3 class="font-semibold">{{ service.name }}</h3>
                                    <p class="text-sm mt-1">{{ service.duration }}</p>
                                    <p class="font-medium mt-2">{{ service.price }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Date Selection -->
                        <div>
                            <label for="date" class="block text-sm font-medium text-gray-300 mb-2">
                                Selecciona la Fecha
                            </label>
                            <input
                                type="date"
                                id="date"
                                v-model="form.selectedDate"
                                class="mt-1 block w-full rounded-md border-0 bg-gray-700 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-600 focus:ring-2 focus:ring-inset focus:ring-[#ffdf00] sm:text-sm sm:leading-6"
                                :min="new Date().toISOString().split('T')[0]"
                            />
                        </div>

                        <!-- Time Selection -->
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                Selecciona la Hora
                            </label>
                            <div class="grid grid-cols-4 gap-2">
                                <button
                                    v-for="time in timeSlots"
                                    :key="time"
                                    type="button"
                                    @click="form.selectedTime = time"
                                    :class="[
                                        'py-2 px-4 text-sm rounded-md font-medium',
                                        form.selectedTime === time
                                            ? 'bg-[#ffdf00] text-gray-900'
                                            : 'bg-gray-700 text-gray-300 hover:bg-gray-600'
                                    ]"
                                >
                                    {{ time }}
                                </button>
                            </div>
                        </div>

                        <!-- Contact Information -->
                        <div class="space-y-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-300">Nombre</label>
                                <input type="text" id="name" required v-model="form.name"
                                    class="mt-1 block w-full rounded-md border-0 bg-gray-700 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-600 focus:ring-2 focus:ring-inset focus:ring-[#ffdf00] sm:text-sm sm:leading-6" />
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-300">Teléfono</label>
                                <input type="tel" id="phone" required v-model="form.phone"
                                    class="mt-1 block w-full rounded-md border-0 bg-gray-700 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-600 focus:ring-2 focus:ring-inset focus:ring-[#ffdf00] sm:text-sm sm:leading-6" />
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-300">Correo Electrónico</label>
                                <input type="email" id="email" required v-model="form.email"
                                    class="mt-1 block w-full rounded-md border-0 bg-gray-700 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-600 focus:ring-2 focus:ring-inset focus:ring-[#ffdf00] sm:text-sm sm:leading-6" />
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-6">
                            <button
                                type="submit"
                                class="w-full rounded-md bg-[#ffdf00] px-3.5 py-2.5 text-center text-sm font-semibold text-gray-900 shadow-sm hover:bg-[#ffdf00]/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#ffdf00]"
                                :disabled="!form.selectedDate || !form.selectedTime || !form.selectedService"
                            >
                                Confirmar Reserva
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template> 