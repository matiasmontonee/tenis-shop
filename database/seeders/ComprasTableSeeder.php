<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Compra;
use App\Models\User;
use App\Models\Producto;

class ComprasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userId = 2;
        $productoId = 1;

        $user = User::find($userId);
        $producto = Producto::find($productoId);

        if ($user && $producto) {
            Compra::create([
                'user_id' => $user->id,
                'producto_id' => $producto->producto_id,
            ]);
        } else { // Si el usuario o el producto no existen
            if (!$user) {
                echo "Usuario con ID $userId no encontrado.\n";
            }
            if (!$producto) {
                echo "Producto con ID $productoId no encontrado.\n";
            }
        }
    }
}