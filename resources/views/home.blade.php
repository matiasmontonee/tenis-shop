<x-layout>
    <x-slot:title>Home</x-slot>

    <section class="home-section" id = "styleBodyHome">
        <div class="home-content mb-5">
            <h1>¡Bienvenidos a TeniShop! <span class ="subtituloHome">Aquí encontrarás las mejores raquetas y sus últimos modelos</span></h1>
            <p>Somos una reconocida marca que se dedica a vender raquetas de primera marca. Decidimos aplicar nuestros conocimientos sobre el Tenis en este sitio web y así surgió nuestro negocio, el cual utilizamos para ofrecer un amplio catálogo de productos para los entusiastas del Tenis, ¡por lo que te invitamos a explorar todo nuestro sitio!</p>
            <a class="btn btn-primary" href="{{ route('productos.index') }}">Ver productos</a>
        </div>

        <div class="home-content">
            <span class ="subtituloHome">Queremos que conozcas las últimas noticias sobre Tenis</span>
            <p>Además de vender productos de primera marca, también tenemos un apartado de noticias el cual utilizamos para facilitar a los usuarios la comprensión del Tenis vía la información proporcionada aquí. ¡No te pierdas las novedades más recientes del Tenis!</p>
            <a class="btn btn-primary" href="{{ route('noticias.index') }}">Ver noticias</a>
        </div>
    </section>
</x-layout>