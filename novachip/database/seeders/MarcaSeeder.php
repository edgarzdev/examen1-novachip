<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Marca;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $marcas = [
            'Apple',
            'Samsung',
            'Dell',
            'HP',
            'Lenovo',
            'Asus',
            'Sony',
            'Acer',
            'Microsoft',
            'Google',
        ];

        foreach ($marcas as $nombre) {
            Marca::create(['nombre' => $nombre]);
        }
    }
}
