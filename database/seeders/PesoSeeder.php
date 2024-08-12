<?php

namespace Database\Seeders;

use App\Models\Peso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Peso::create([
            'peso' => '300'
        ]);
        Peso::create([
            'peso' => '325'
        ]);
        Peso::create([
            'peso' => '350'
        ]);
    }
}
