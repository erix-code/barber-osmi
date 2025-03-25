<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Corte Básico',
                'slug' => Str::slug('Corte Básico'),
                'title' => 'Paquete de Corte Básico',
                'image' => 'services/basic-cut.jpg', // You'll need to add these images
                'description' => 'Servicio completo de corte básico que incluye un corte clásico, peinado básico y consulta personalizada.',
                'features' => json_encode(['Corte clásico', 'Peinado básico', 'Consulta personalizada']),
                'price' => 30.00,
                'duration' => 30, // Estimated duration in minutes
                'is_active' => true,
                'is_featured' => false,
            ],
            [
                'name' => 'Paquete Premium',
                'slug' => Str::slug('Paquete Premium'),
                'title' => 'Servicio Premium Completo',
                'image' => 'services/premium-package.jpg',
                'description' => 'Experiencia premium que incluye corte premium, recorte de barba, tratamiento capilar y peinado profesional.',
                'features' => json_encode(['Corte premium', 'Recorte de barba', 'Tratamiento capilar', 'Peinado profesional']),
                'price' => 50.00,
                'duration' => 45,
                'is_active' => true,
                'is_featured' => true,
            ],
            [
                'name' => 'Tratamiento Real',
                'slug' => Str::slug('Tratamiento Real'),
                'title' => 'Experiencia Real de Barbería',
                'image' => 'services/royal-treatment.jpg',
                'description' => 'La experiencia más completa que incluye corte de lujo, arreglo premium de barba, tratamiento capilar, masaje de cabeza y bebida de cortesía.',
                'features' => json_encode(['Corte de lujo', 'Arreglo premium de barba', 'Tratamiento capilar', 'Masaje de cabeza', 'Bebida de cortesía']),
                'price' => 75.00,
                'duration' => 60,
                'is_active' => true,
                'is_featured' => false,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
} 