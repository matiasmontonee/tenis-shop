<x-layout>
    <x-slot:title>Datos enviados</x-slot>

    <section class="container p-4">
        <h1 class="mb-4">Hemos recibido sus datos</h1>
    
        <p>Muchas gracias por contactarse con nosotros. Próximamente nos estaremos comunicando con usted vía email respondiendo sus dudas.</p>
    
        <p>Atentamente, equipo de TeniShop.</p>
    
        <a href="{{ route('home') }}" class="btn btn-primary">Volver a la home</a>
    </section>
</x-layout>