<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Exceptions\MPApiException;
use Illuminate\Support\Facades\Log;

class MercadoPagoController extends Controller
{
    public function show()
    {
        $carrito = session()->get('carrito', []);

        $items = [];
        $total = 0;

        // Verificar si hay productos en el carrito
        if (!empty($carrito)) {
            foreach ($carrito as $item) {
                $producto = Producto::find($item['producto_id']);
                if ($producto) {
                    $items[] = [
                        'id' => $producto->producto_id,
                        'title' => $producto->nombre,
                        'unit_price' => round($producto->precio, 3),
                        'quantity' => $item['cantidad'],
                    ];
                    $total += $producto->precio * $item['cantidad'];
                }
            }

             // Log de los datos que se van a enviar a Mercado Pago
            Log::info('Datos de la preferencia a enviar a Mercado Pago:', ['items' => $items]);

            try {
                MercadoPagoConfig::setAccessToken(config('mercadopago.access_token'));

                $preferenceClient = new PreferenceClient();
                $preference = $preferenceClient->create([
                    'items' => $items,
                    'back_urls' => [
                        'success' => route('test.mercadopago.success'),
                        'pending' => route('test.mercadopago.pending'),
                        'failure' => route('test.mercadopago.failure'),
                    ],
                    'auto_return' => 'approved',
                ]);

            } catch (MPApiException $e) {
                Log::error('Error de la API de Mercado Pago:', ['message' => $e->getMessage()]);
                dd($e->getMessage());
            } catch (\Throwable $e) {
                Log::error('Error inesperado:', ['message' => $e->getMessage()]);
                dd($e);
            }
        }

        return view('carrito.view', [
            'carrito' => $carrito,
            'total' => $total,
            'preference' => $preference ?? null,
        ]);
    }

    public function success(Request $request)
    {
        dd($request->query);
    }

    public function pending(Request $request)
    {
        dd($request->query);
    }

    public function failure(Request $request)
    {
        dd($request->query);
    }
}