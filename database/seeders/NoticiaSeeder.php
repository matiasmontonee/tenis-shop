<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('noticias')->insert([
            [
                'noticia_id' => 1,
                'nombre' => 'DIEGO SCHWARTZMAN',
                'titulo' => 'Diego Schwartzman anunció su retiro del tenis profesional',
                'resumen' => 'El tenista de 31 años se despedirá en el ATP 250 de Buenos Aires en febrero próximo. “¡Qué viaje!”, escribió en sus redes sociales.',
                'cita' => '"¡Qué viaje! Cuántos momentos que jamás imaginé, cuántas anécdotas que jamás soñé, cuánta gente conocí, que me ayudó a crecer, que me enseñó tanto, que me convirtió en un jugador y una persona mucho mejor de lo que alguna vez alguien creyó que sería incluyéndome.
                Cada rincón de la cancha, cada segundo entrenando, cada punto compitiendo, cada momento fui inmensamente feliz. Lo viví con tanta intensidad que hoy me resulta difícil mantener. Todos esos momentos tan lindos se han convertido en algo que hoy lleva peso y me cuesta seguir disfrutando plenamente. Por un lado, dejar una vida que me dio tanto es una decisión demasiado difícil, pero, por otro lado, lo feliz que fui jugando al tenis me impulsa a seguir queriendo mantener la sonrisa dentro y fuera de la cancha como siempre lo hice. Sin embargo, hoy esa sonrisa por momentos me cuesta encontrarla. En mi interior, un animal competitivo me impide disfrutar, jugar y viajar como solía hacerlo. Quiero que mis últimos torneos sean una decisión propia. Que este 2024 sea de esa manera, ojalá teniendo la oportunidad de competir en los torneos que más disfruto. Y en 2025, en Argentina, poder tener mi momento final, el más hermoso cierre que pueda imaginar."',
                'descripcion' => 'Diego Schwartzman tomó la difícil decisión de retirarse del tenis profesional. A sus 31 años, anunció a través de sus redes sociales que su despedida oficial será en el ATP 250 de Buenos Aires el próximo mes de febrero.
                El Peque alcanzó el puesto número 8 del ranking mundial en octubre de 2020 y conquistó cuatro títulos en el circuito profesional. Sin embargo, en el transcurso del año 2024, experimentó dificultades, logrando únicamente cinco victorias, todas ellas en etapas de clasificación.
                Schwartzman había anticipado esta decisión hace algunas semanas con un sugestivo mensaje en su cuenta de X (ex-Twitter). “Final del viaje...”, había escrito el actual número 142° del ranking ATP junto a una serie de emojis: unas manos hacia arriba, un tilde verde y una cara con sonrisa y ojos achinados.
                Muchos de sus seguidores, ya en ese momento, habían entendido esas tres palabras como un posible anuncio de retiro, algo que finalmente ocurrió.
                Lo cierto es que la última victoria en el cuadro principal de un certamen fue en el ATP de 500 de Tokio en octubre del año pasado, es decir, hace más de seis meses. En aquella ocasión había vencido a su compatriota Francisco Cerúndolo en la primera ronda.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'noticia_id' => 2,
                'nombre' => 'FEDERICO CORIA',
                'titulo' => 'Federico Coria sufrió un inesperado “ataque” durante un partido en el Challenger de Cagliari',
                'resumen' => 'El argentino criticó la decisión que tomó el umpire tras lo sucedido y protagonizó un inolvidable momento en la cancha.',
                'cita' => '“Venía el pájaro acá, la iba a tirar cruzado. Llamá al supervisor porque no podés cambiar por él”, dijo el hermano de Guillermo. A pesar de su enojo, se tomó con humor lo sucedido e imitó el ruido de la gaviota.
                “Yo tiré let, Federico. Cuando canté let, tú ya habías pegado la bola”, le respondió el juez. “Venía un dragón ahí, bol... Venía de acá, así. Yo no sabía que ibas a cobrar let”, insistió Coria.
                “Ya lo sé, pero llamé después que habías pegado. Podría haber cantado antes, pero ya cuando canté fue antes”, retrucó el umpire. “No cambié, sólo recordé el hecho de que llamé tarde... ahora debemos seguir”, cerró Sturmer.
                Coria dio a conocer que había sido perjudicado y sentenció: “Fijate ahora cuántas veces le paralelo voy a tirar en todo el partido. Fijate por favor. Es el primero que tiro”.',
                'descripcion' => 'Federico Coria jugó este viernes ante el italiano Luciano Darderi en el Challenger de Cagliari y protagonizó un insólito momento durante el partido. A pocos minutos de haber empezado el encuentro, una gaviota voló a pocos metros del tenista, que se desconcentró y perdió un punto.
                El argentino se asustó con la presencia del pájaro y jugó un revés paralelo que se fue a metros de la línea. El umpire le dio el punto al italiano y su decisión indignó a Coria, que le recriminó que debía repetirse por la invasión que había sufrido.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'noticia_id' => 3,
                'nombre' => 'HORACIO ZEBALLOS',
                'titulo' => 'La durísima noticia que recibió el tenista argentino Horacio Zeballos tras llegar a ser número 1 del ATP ',
                'resumen' => 'El marplatense hizo historia para el tenis argentino tras clasificarse a semifinales del del Masters 1000 de Madrid, pero después sufrió un gran imprevisto.',
                'cita' => '“Lamentablemente me voy a tener que bajar. Estaba saliendo del médico y me dieron las imágenes. En un punto me estiré todo lo que pude y sí, me lastimé la pierna. No llega a ser un desgarro, pero sí es una distensión importante. Lamentablemente no me va a permitir jugar. Habrá que cuidarse bien para llegar a los próximos torneos que también son importantes”, detalló Zeballos en una entrevista con Radio Rivadavia.',
                'descripcion' => 'Horacio Zeballos se convirtió en el primer argentino en llegar a ser número 1 del mundo del ranking ATP en dobles. Junto al español Marcel Granollers vencieron al polaco Jan Zielinski y al monegasco Hugo Nys por 4-6, 6-2 y 16-14 y pasaron a la semifinal del Masters 1000 de Madrid. Sin embargo, no podrán luchar por el título.
                La dupla entre el marplatense y el español se iban a enfrentar al uruguayo Ariel Behar y al checo Adam Pavlasek en la semifinales, pero el Cebolla se lesionó y eso lo obligó a abandonar el torneo.
                Es importante destacar que, a pesar de esta inesperada situación, el puesto en el ranking no corre riesgo: Zeballos y Granollers serán los primeros desde el lunes.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'noticia_id' => 4,
                'nombre' => 'HORACIO ZEBALLOS',
                'titulo' => 'Histórico: el tenista Horacio Zeballos se convirtió en el primer argentino en ser número 1 del ATP en dobles',
                'resumen' => 'Gracias a la victoria del nacido en Mar del Plata la Argentina tiene por primera vez un representante encabezando el ranking.',
                'cita' => '"¡Qué locura! Cuántos momentos que jamás imaginé, cuántas anécdotas que jamás soñé, cuánta gente conocí, que me ayudó a crecer, que me enseñó tanto, que me convirtió en un jugador y una persona mucho mejor de lo que alguna vez alguien creyó que sería incluyéndome.
                Cada rincón de la cancha, cada segundo entrenando, cada punto compitiendo, cada momento fui inmensamente feliz. Muchísimas gracias a mi equipo y familia que hicieron que esto sea posible, no hay nada que me haga más feliz que representar a la Argentina de esta manera" concluyó el doblista Argentino.',
                'descripcion' => 'Horacio Zeballos ganó, avanzó a semifinales del Masters 1000 de Madrid y se convirtió en el primer argentino de la historia en ser número 1 del ranking ATP en dobles. El marplatense y el español Marcel Granollers vencieron al polaco Jan Zielinski y al monegasco Hugo Nys por 4-6, 6-2 y 16-14.
                El encuentro duró una hora y media y por momentos se les complicó al argentino y al español, que tuvieron que salvar tres puntos de partido. Ahora, disputarán un lugar en la gran final ante el equipo formado por el uruguayo Ariel Behar y el checo Adam Pavlasek que vencieron a los estadounidenses Jackson Withrow y Nathaniel Lammons.
                Más allá de lo que pase en semifinales, Zeballos y Granollers se aseguraron el primer puesto del ranking ATP en dobles y aparecerán en la cima en la clasificación del próximo lunes.
                Zeballos es el primer argentino en ser número uno del mundo en tenis en el circuito masculino. Antes habían conquistado este logro Paola Suárez y Gisela Dulko, en dobles, y Gustavo Fernández en tenis adaptado con silla de ruedas. Por su parte Granollers es el cuarto español en alcanzar esta posición en esta modalidad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'noticia_id' => 5,
                'nombre' => 'FRANCISCO CERUNDULO',
                'titulo' => 'Se terminó el sueño de Francisco Cerúndolo en Madrid: no pudo ante Taylor Fritz en los cuartos de final',
                'resumen' => 'El tenista argentino venía de superar con contundencia a Zverev, pero cayó 1-6, 6-3 y 3-6 ante el estadounidense.',
                'cita' => '"Fue una dura derrota, pero debo admitir que mi rival fue superior", exclamó el joven tenista Argentino. "Este deporte es así, a veces las cosas salen mejor, otras veces salen peor, pero lo importante es seguir firme hacia adelante y no rendirse, todavía queda más de la mitad de la temporada y espero con muchas ansias los siguientes torneos."',
                'descripcion' => 'Francisco Cerúndolo era la gran esperanza argentina en el Masters 1000 de Madrid. Sin embargo, este miércoles, se terminó el sueño: el tenista argentino cayó por 1-6. 6-3 y 3-6 ante el estadounidense Taylor Fritz y se despidió del torneo español.
                El partido no arrancó de la mejor manera para el nacido en Pilar donde fue completamente superado por su rival, aunque pudo decorar el marcador con un game. En el segundo set, Cerúndolo demostró un rendimiento superador y se pudo imponer para ganar el trámite. Sin embargo, en el último parcial tuvo un nuevo bajón y perdió casi sin atenuantes.
                De esta manera se termina la semana para el número 22 del ranking ATP y se mantiene como el segundo mejor argentino del circuito detrás de Sebastián Baez.
                Por su parte, Fritz sigue a paso firme y se medirá a Rublev en la semifinal. Además, escaló dos posiciones en el ranking y ahora se ubica 13, a las puertas del Top 10.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'noticia_id' => 6,
                'nombre' => 'RAFAEL NADAL',
                'titulo' => 'El extraño pedido de Cachín a Nadal tras el partido en el Masters 1000 de Madrid: “Me cumpliste un sueño”',
                'resumen' => 'El argentino no logró el batacazo y perdió ante el español. Sin embargo, se las ingenió para poder llevarse algo de su encuentro ante el exnúmero uno del mundo.',
                'cita' => '“Me cumpliste un sueño, gracias. No sé si lo permite el protocolo pero ¿me puedo quedar con tu camiseta, toalla o algo?” fueron las palabras del jugador Argentino hacia Rafael Nadal al finalizar el partido. "Nadal siempre ha sido mi modelo a seguir desde que soy chico, recuerdo siempre cuando veía todos sus partidos desde que arranqué a jugar al Tenis y me sorprendía la calidad de jugador que era, y es por eso que hoy en día, que llegué a enfrentarme a el, no me pude resistir y le pedí su camiseta al saludarnos después del partido, y por suerte me la dió", exclamó el Argentino con una sonrisa.',
                'descripcion' => 'Pedro Cachín jugó un gran partido ante ante Rafael Nadal en los 16avos del Masters 1000 de Madrid pero en más de tres horas de juego no logró llevarse la victoria y quedó eliminado del certamen. Sin embargo, se acercó a saludar al español y aprovechó para tener un recuerdo importante de un encuentro muy especial para él.
                Tras el final de partido. los tenistas se acercaron a la mitad de la cancha para realizar el clásico saludo. Pero Cachín aprovechó su momento para hablarle al oído a su rival y sincerarse. “Me cumpliste un sueño, gracias. No sé si lo permite el protocolo pero ¿me puedo quedar con tu camiseta, toalla o algo?”, expresó el cordobés. Rafa no se sorprendió ante el pedido y respondió: “Sí, Ahora te lo doy. Suerte con todo”.
                El exnúmero uno del mundo fue hacia su bolso para buscar una camiseta y se acercó a donde estaba Cachín para darle el obsequio y volver a saludarlo. Tras el acto, ambos tenistas se fueron del estadio bajo una lluvia de aplausos del público presente en el estadio Manolo Santana',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}