<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    
    <style>
        .btn-custom {
    background-color: #ff9900;
    border-color: #e68a00;
    color: white;
}

.btn-custom:hover {
    background-color: #e68a00;
    border-color: #cc7a00;
    color: white;
}

.card-header-custom {
    background-color: #ff9900;
    color: white;
    font-weight: bold;
}

.input-focus-custom:focus {
    border-color: #ff9900;
    box-shadow: 0 0 0 0.2rem rgba(255, 153, 0, 0.25);
}

.link-custom {
    color: #ff9900;
}

.link-custom:hover {
    color: #cc7a00;
    text-decoration: none;
}
</style>
</head>
<body>
    <!-- Header con imagen de fondo y logo junto al título -->
    <div class="header-section" style="background-color: #003366; color: white; padding: 20px 0; margin-bottom: 30px;">
        <div class="container" style="display: flex; align-items: center; max-width: 1200px; margin: 0 auto; padding: 0 15px;">
            <!-- Logo obtenido desde una URL externa -->
            <img src="https://unired.edu.co/images/instituciones/UNAB/2021/Marzo/Logo_UNAB.png" alt="Logo" style="height: 60px; margin-right: 20px;">
            <h1 style="margin: 0; font-size: 24px; font-weight: normal;">Sistema de Gestión Universitaria</h1>
        </div>
    </div>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <!-- Eliminamos el navbar-brand ya que ahora tenemos el logo en el header -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <!-- Puedes agregar elementos de navegación aquí si es necesario -->
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}" style="color: #003366; font-weight: bold;">{{ __('Iniciar Sesión') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" style="color: #003366;">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: #003366;">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Footer similar al de la imagen -->
    <footer style="background-color: #f8f9fa; padding: 20px 0; margin-top: 50px; text-align: center; font-size: 14px; color: #666;">
        <div class="container">
            <p>Universidad Autónoma de Bucaramanga - UNAB © 2025</p>
            <p>© 2024 UNAB Tienda. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>
