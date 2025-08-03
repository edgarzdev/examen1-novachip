<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Producto;
use App\Models\Marca;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $productos = [
            [
                'nombre' => 'iPhone 14 Pro',
                'precio' => 999.99,
                'descripcion' => 'El último smartphone de Apple con tecnología avanzada.',
                'imagen' => 'iphone14pro.jpg',
                'disponible' => true,
                'marca' => 'Apple',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Samsung Galaxy S23',
                'precio' => 899.99,
                'descripcion' => 'Smartphone de alta gama con cámara profesional.',
                'imagen' => 'galaxys23.jpg',
                'disponible' => true,
                'marca' => 'Samsung',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Dell XPS 13',
                'precio' => 1200.00,
                'descripcion' => 'Laptop ultradelgada con gran rendimiento.',
                'imagen' => 'dellxps13.jpg',
                'disponible' => true,
                'marca' => 'Dell',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'HP Spectre x360',
                'precio' => 1100.00,
                'descripcion' => 'Convertible potente para productividad y creatividad.',
                'imagen' => 'hpspectre.jpg',
                'disponible' => true,
                'marca' => 'HP',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Lenovo ThinkPad X1 Carbon',
                'precio' => 1300.00,
                'descripcion' => 'Laptop empresarial ligera y robusta.',
                'imagen' => 'thinkpadx1.jpg',
                'disponible' => true,
                'marca' => 'Lenovo',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Asus ROG Strix',
                'precio' => 1500.00,
                'descripcion' => 'Laptop gamer con alto rendimiento gráfico.',
                'imagen' => 'asusrog.jpg',
                'disponible' => true,
                'marca' => 'Asus',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Sony WH-1000XM5',
                'precio' => 350.00,
                'descripcion' => 'Auriculares inalámbricos con cancelación de ruido.',
                'imagen' => 'sonywh1000xm5.jpg',
                'disponible' => true,
                'marca' => 'Sony',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Acer Predator Helios',
                'precio' => 1400.00,
                'descripcion' => 'Laptop gamer con sistema de refrigeración avanzada.',
                'imagen' => 'acerpredator.jpg',
                'disponible' => true,
                'marca' => 'Acer',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Microsoft Surface Pro 9',
                'precio' => 999.00,
                'descripcion' => 'Tablet y laptop en uno, versátil y potente.',
                'imagen' => 'surfacepro9.jpg',
                'disponible' => true,
                'marca' => 'Microsoft',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Google Pixel 7',
                'precio' => 799.00,
                'descripcion' => 'Smartphone con Android puro y cámara avanzada.',
                'imagen' => 'pixel7.jpg',
                'disponible' => true,
                'marca' => 'Google',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        foreach ($productos as $producto) {
            $marca = Marca::where('nombre', $producto['marca'])->first();
            if ($marca) {
                Producto::create([
                    'nombre' => $producto['nombre'],
                    'precio' => $producto['precio'],
                    'descripcion' => $producto['descripcion'],
                    'imagen' => $producto['imagen'],
                    'disponible' => $producto['disponible'],
                    'marca_id' => $marca->id,
                ]);
            }
        }
    }
}
