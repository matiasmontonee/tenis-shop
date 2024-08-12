<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UsuarioSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(PesoSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(ComprasTableSeeder::class);
        $this->call(NoticiaSeeder::class);
    }
}