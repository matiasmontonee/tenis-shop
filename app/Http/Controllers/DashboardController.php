<?php

namespace App\Http\Controllers;

use App\Models\Producto;

class DashboardController extends Controller
{
    public function index()
    {
        // Productos más comprados
        $productosMasComprados = Producto::withCount('compras')
            ->orderBy('compras_count', 'desc')
            ->take(5)
            ->get();

        // Mes con mayor facturación
        $facturacionPorMes = [
            (object) ['fecha' => 'Enero 2024', 'total' => 80000],
            (object) ['fecha' => 'Marzo 2024', 'total' => 95000],
            (object) ['fecha' => 'Mayo 2024', 'total' => 78000],
            (object) ['fecha' => 'Julio 2024', 'total' => 100000],
        ];

        // Usuarios registrados por mes
        $usuariosRegistrados = [
            (object) ['fecha' => 'Enero 2024', 'total' => 50],
            (object) ['fecha' => 'Febrero 2024', 'total' => 75],
            (object) ['fecha' => 'Marzo 2024', 'total' => 60],
            (object) ['fecha' => 'Abril 2024', 'total' => 90],
        ];

        // Total de ingresos de los últimos 5 años
        $ingresosAnuales = [
            (object) ['year' => 2020, 'total' => 450000],
            (object) ['year' => 2021, 'total' => 480000],
            (object) ['year' => 2022, 'total' => 500000],
            (object) ['year' => 2023, 'total' => 530000],
            (object) ['year' => 2024, 'total' => 560000],
        ];

        return view('dashboard.index', compact('productosMasComprados', 'facturacionPorMes', 'usuariosRegistrados', 'ingresosAnuales'));
    }
}