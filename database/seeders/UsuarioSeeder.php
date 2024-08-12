<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'admin@gmail.com')->first();

        if ($user) { // Actualiza el usuario existente
            $user->update([
                'name' => 'Admin',
                'password' => Hash::make('matias'),
                'is_admin' => true,
            ]);
        } else { // Crea un nuevo usuario si no existe
            User::create([
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('matias'),
                'is_admin' => true,
            ]);
        }
    }
}