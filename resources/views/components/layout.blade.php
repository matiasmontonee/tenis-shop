<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} :: TeniShop</title>
    <link rel="shortcut icon" href="{{ url('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div id="app">
      <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">TeniShop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('productos.index') }}">Productos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('noticias.index') }}">Noticias</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('contacto.contacto') }}">Contacto</a>
                </li>
                @auth
                  @if(auth()->user()->is_admin)
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('usuarios.index') }}">Usuarios</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('dashboard.index') }}">Dashboard</a>
                    </li>
                  @endif
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('perfil.show') }}">Perfil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('carrito.view') }}">Carrito</a>
                  </li>
                  <li class="nav-item">
                    <form action="{{ route('auth.logout.process') }}" method="POST">
                      @csrf
                      <button class="nav-link">{{ auth()->user()->email }} (Cerrar Sesión)</button>
                    </form>
                  </li>
                @else
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('auth.login.form') }}">Iniciar sesión</a>
                  </li>
                @endauth
              </ul>
            </div>
          </div>
        </nav>
      </header>

      <main>
        @if(session()->has('feedback.message'))
          <div class="container p-4 pb-0">
            <div class="alert alert-{{ session()->get('feedback.type', 'success') }}">{!! session()->get('feedback.message') !!}</div>
          </div>
        @endif
        
        {{ $slot }}
      </main>

      <footer class="footer">
        <p>Copyright &copy; TeniShop 2024</p>
      </footer>
    </div>
    
    <script src="{{ url('js/bootstrap.bundle.js') }}"></script>
</body>
</html>