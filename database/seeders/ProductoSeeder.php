<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            [
                'producto_id' => 1,
                'peso_fk' => 1,
                'nombre' => 'RAQUETA DE TENIS BLADE 104 V8.0',
                'marca' => 'Wilson',
                'imagen' => 'img/blade_104_V8.webp',
                'precio' => 249999,
                'descripcion' => 'La Blade 104 V8 bien podría considerarse la raqueta del renacimiento: presenta una combinación realmente envidiable de sensaciones, potencia, permisividad, flexibilidad, estabilidad y un diseño impresionante. Con un acabado elástico dinámico que cambia de color y se transforma entre tonos de verde y cobre, esta raqueta deja boquiabiertos con su aspecto y deja atónitos a los oponentes con su rendimiento.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 2,
                'peso_fk' => 1,
                'nombre' => 'RAQUETA DE TENIS BLADE 26 V8.0',
                'marca' => 'Wilson',
                'imagen' => 'img/blade_26_V8.webp',
                'precio' => 139999,
                'descripcion' => 'La Blade 26 v8 es una raqueta con un aspecto atractivo y un rendimiento de alto nivel para los jugadores juniors que están desarrollando su juego. Con esta raqueta se pueden realizar movimientos suaves y sencillos que permiten a los jugadores ser agresivos y dictar el juego, y puede acelerar la habilidad y la confianza antes de lo previsto. Su diseño totalmente nuevo presenta un llamativo acabado metálico verde para un aspecto vibrante.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 3,
                'peso_fk' => 1,
                'nombre' => 'RAQUETA DE TENIS BLADE 98 V8.0',
                'marca' => 'Wilson',
                'imagen' => 'img/blade_98_V8.webp',
                'precio' => 199999,
                'descripcion' => 'El Blade 98 (16x19) v8 combina un diseño cautivador con una nueva disposición para adaptarse mejor a la trayectoria de swing vertical más moderna que suelen utilizar los jugadores competitivos. La innovación principal, FORTYFIVE°, logra aumentar tanto la flexibilidad como la estabilidad del marco para brindar una sensación suprema de la pelota en cada golpe.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 4,
                'peso_fk' => 1,
                'nombre' => 'RAQUETA DE TENIS POWER RXT 105',
                'marca' => 'Wilson',
                'imagen' => 'img/blade_105_V8.webp',
                'precio' => 48999,
                'descripcion' => 'La Ultra Power RXT 105 incorpora potencia, estabilidad y durabilidad ligera en una estética vívida que realmente resalta en la pista. Los jugadores aficionados no solo apreciarán la vara más gruesa que ayuda a generar potencia fácil, sino que también disfrutarán de la sensación de solidez y estabilidad del marco hasta completar el swing. Con un punto dulce más cómodo, es un placer manejar la Ultra Power RXT en la pista.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 5,
                'peso_fk' => 2,
                'nombre' => 'RAQUETA HEAD SPEED MP 2022/2023',
                'marca' => 'Head',
                'imagen' => 'img/speed_1.webp',
                'precio' => 399999,
                'descripcion' => 'La nueva versión mejorada de la SPEED MP continúa ofreciendo velocidad y un juego rápido, pero además, ahora incorpora un tacto más sensacional. Podrás jugar rápido mientras sientes cada golpe con una raqueta que forma parte de la serie superventas SPEED, recomendada por Novak Djokovic. Incorpora un nuevo diseño elegante y asimétrico con un acabado mate y brillo, y detalles cromados.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 6,
                'peso_fk' => 2,
                'nombre' => 'RAQUETA HEAD EXT. MP 2022/2023',
                'marca' => 'Head',
                'imagen' => 'img/speed_2.webp',
                'precio' => 379999,
                'descripcion' => 'Genera un efecto extremo y confunde a tus rivales con la EXTREME MP Recomendada por Matteo Berrettini, esta raqueta se ha renovado con la innovadora tecnología Auxetic para una sensación de impacto extraordinariamente auténtica. Es ideal para jugadores de rendimiento que buscan efecto y potencia. Su nivel extremo de rendimiento viene acompañado de un diseño fresco y atrevido.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 7,
                'peso_fk' => 2,
                'nombre' => 'RAQUETA TENIS HEAD Ti. CONQUEST',
                'marca' => 'Head',
                'imagen' => 'img/speed_3.webp',
                'precio' => 69999,
                'descripcion' => 'Si tienes un swing más moderado y buscas un poco más de control en tus golpes, dale la Ti. Conquista un intento. La tecnología Nano Titanium proporciona mayor potencia y estabilidad en cada disparo. El tamaño de la cabeza de gran tamaño brinda un control mejorado en los golpes con velocidades de swing moderadas. La construcción o-beam da el Ti. Conquista la durabilidad y la comodidad.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 8,
                'peso_fk' => 2,
                'nombre' => 'RAQUETA TENIS HEAD SPEED JR.23',
                'marca' => 'Head',
                'imagen' => 'img/speed_4.webp',
                'precio' => 54999,
                'descripcion' => 'La serie de raquetas júnior de HEAD, las cuales proporcionan mayor potencia y estabilidad en cada disparo, ayudan a los niños a iniciarse en su apasionante viaje tenístico. Hecho de una construcción de vigas en O de aluminio, el Speed 23 es ideal para niños que recién comienzan el juego que sean mayores de la edad de 6 años y estén entre 45-49 pulgadas de altura.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 9,
                'peso_fk' => 3,
                'nombre' => 'Raqueta Pure Aero Rafa Origin 2023',
                'marca' => 'Babolat',
                'imagen' => 'img/pure_1.webp',
                'precio' => 469999,
                'descripcion' => 'Enérgico, combativo, decidido... ¡Juegas con la misma mentalidad que Rafa! Hemos desarrollado esta segunda generación en estrecha colaboración con el artista indiscutible del juego liftado y de la tierra batida. La Pure Aero Rafa Origin es la raqueta de tenis con las mismas características de la de Rafa. ¡Descubre el arma definitiva que te permitirá a ti también convertirte en leyenda!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 10,
                'peso_fk' => 3,
                'nombre' => 'Raqueta Pure Aero Rafa 2023',
                'marca' => 'Babolat',
                'imagen' => 'img/pure_2.webp',
                'precio' => 429999,
                'descripcion' => 'Si luchas por cada punto con la misma entrega que Rafa, tu ídolo, la raqueta de tenis Pure Aero Rafa de segunda generación es lo que estás buscando. Más radiante y enérgica, el diseño de esta raqueta, específico para Rafa, se ha realizado en su totalidad con su colaboración directa. Hemos diseñado esta raqueta para que tu golpe sea más largo y con más efecto con el fin de hacer retroceder a tu rival y desgastarlo en cada intercambio.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 11,
                'peso_fk' => 3,
                'nombre' => 'Raqueta Pure Aero 98 2022/2023',
                'marca' => 'Babolat',
                'imagen' => 'img/pure_3.webp',
                'precio' => 399999,
                'descripcion' => '¿Desearías golpear con más efecto la bola para desplazar a tu oponente y dominar el juego? La nueva y evolucionada Pure Aero te ofrece un nuevo enfoque centrado en tu juego. Según su morfología, el momento de golpear la pelota tras el rebote y su lenguaje corporal, encontrarás una respuesta adaptada a tus necesidades para exteriorizar mejor el efecto que hay en tu juego.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 12,
                'peso_fk' => 3,
                'nombre' => 'Raqueta Pure Drive Rafa 98 2023',
                'marca' => 'Babolat',
                'imagen' => 'img/pure_4.webp',
                'precio' => 349999,
                'descripcion' => '¿Quieres combinar potencia y precisión sin renunciar a ninguna de ellas? La nueva Pure Drive 98 es la raqueta que necesitas. Cuando BABOLAT lanza la raqueta de tenis Pure Drive, se convierte en una referencia en términos de potencia. Los modelos siguientes muestran cómo hemos evolucionado para responder a las exigencias del juego. No es de extrañar que la Pure Drive sea una de las raquetas más populares y polivalentes del mundo.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        DB::table('productos_tienen_categorias')->insert([
            [
                'producto_fk' => 1,
                'categoria_fk' => 1
            ],
            [
                'producto_fk' => 1,
                'categoria_fk' => 2
            ],
            [
                'producto_fk' => 2,
                'categoria_fk' => 1
            ],
            [
                'producto_fk' => 2,
                'categoria_fk' => 2
            ],
            [
                'producto_fk' => 3,
                'categoria_fk' => 1
            ],
            [
                'producto_fk' => 3,
                'categoria_fk' => 2
            ],
            [
                'producto_fk' => 4,
                'categoria_fk' => 1
            ],
            [
                'producto_fk' => 4,
                'categoria_fk' => 2
            ],
            [
                'producto_fk' => 5,
                'categoria_fk' => 1
            ],
            [
                'producto_fk' => 5,
                'categoria_fk' => 2
            ],
            [
                'producto_fk' => 6,
                'categoria_fk' => 1
            ],
            [
                'producto_fk' => 6,
                'categoria_fk' => 2
            ],
            [
                'producto_fk' => 7,
                'categoria_fk' => 5
            ],
            [
                'producto_fk' => 7,
                'categoria_fk' => 6
            ],
            [
                'producto_fk' => 8,
                'categoria_fk' => 5
            ],
            [
                'producto_fk' => 8,
                'categoria_fk' => 6
            ],
            [
                'producto_fk' => 9,
                'categoria_fk' => 3
            ],
            [
                'producto_fk' => 9,
                'categoria_fk' => 4
            ],
            [
                'producto_fk' => 10,
                'categoria_fk' => 3
            ],
            [
                'producto_fk' => 10,
                'categoria_fk' => 4
            ],
            [
                'producto_fk' => 11,
                'categoria_fk' => 3
            ],
            [
                'producto_fk' => 11,
                'categoria_fk' => 4
            ],
            [
                'producto_fk' => 12,
                'categoria_fk' => 3
            ],
            [
                'producto_fk' => 12,
                'categoria_fk' => 4
            ],
        ]);
    }
}