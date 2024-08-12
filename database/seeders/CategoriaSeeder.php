<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
            'nombre' => 'Adultos'
        ]);
        Categoria::create([
            'nombre' => 'Profesional'
        ]);
        Categoria::create([
            'nombre' => 'Adolescentes'
        ]);
        Categoria::create([
            'nombre' => 'Intermedio'
        ]);
        Categoria::create([
            'nombre' => 'Niños'
        ]);
        Categoria::create([
            'nombre' => 'Principiantes'
        ]);
    }
}