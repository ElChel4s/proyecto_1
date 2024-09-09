<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/m1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>@yield('title', 'Título predeterminado')</title>
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="{{ asset('images/logoDis.png') }}" alt="Logo">
                </span>
                <div class="text logo-text">
                    <span class="name"></span>
                    <span class="profession">Paulo Villarroel</span>
                </div>
            </div>
            <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="{{ url('inicio') }}">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{ url('works') }}">
                        <i class='bx bxs-book-content icon'></i>
                            <span class="text nav-text">Proyectos</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{ url('blog') }}">
                        <i class='bx bxs-book-content icon'></i>
                            <span class="text nav-text">Blog</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{ url('photos') }}">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text">Fotogrfias</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{ url('emails') }}">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text">Contactame</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Modo oscuro</span>
                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </nav>
    <section class="home" id="home-content">
        @yield('content')
    </section>
    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/inicio.js') }}"></script>
</body>
</html>
