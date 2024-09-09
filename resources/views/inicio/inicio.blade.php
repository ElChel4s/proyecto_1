@extends('layouts.app')

@section('title', 'Inicio Responsivo')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portafolio</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .section {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        .section img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        h1 {
            font-size: 3em;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
        }
        .btn, .details {
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }
        .content {
            z-index: 1;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }
        /* Mostrar el contenido completo en hover */
        .section:hover .btn,
        .section:hover .details {
            opacity: 1;
            visibility: visible;
        }
        /* Solo mostrar el título por defecto */
        .content p, .content .btn {
            display: none;
        }
        /* Mostrar detalles y botón en hover */
        .section:hover .content p,
        .section:hover .content .btn {
            display: block;
        }
        .welcome-message {
            text-align: center;
            padding: 50px 20px;
            background-color: var(--sidebar-color);
            color: var(--text-color);
        }

        .welcome-message h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .welcome-message p {
            font-size: 18px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <section class="welcome-message">
        <h1>Bienvenido al Sistema</h1>
        <p>Seleccione una de las opciones abajo para continuar.</p>
    </section>
    <section class="section" id="portafolio">
        <img src="img/portafolio.webp" alt="Imagen de Portafolio">
        <div class="content">
            <h1>Portafolio</h1>
            <p class="details">Bienvenido a mi portafolio profesional</p>
            <button class="btn" onclick="verMas('portafolio')">Ver más</button>
        </div>
    </section>

    <section class="section" id="servicios">
        <img src="img/DALL·E 2024-09-08 20.35.17 - A blog cover for a graphic designer named Paulo Villarroel, featuring a modern and creative design. The focus is on his work related to gym advertisem.webp" alt="Imagen de Servicios">
        <div class="content">
            <h1>Blog</h1>
            <p class="details">Descubre los servicios que ofrezco</p>
            <button class="btn" onclick="verMas('servicios')">Ver más</button>
        </div>
    </section>

    <section class="section" id="fotografias">
        <img src="img/DALL·E 2024-09-08 20.38.29 - A cover for the photography portfolio of graphic designer Paulo Villarroel, featuring a modern and visually striking design. The focus is on photograp.webp" alt="Imagen de Fotografías">
        <div class="content">
            <h1>Fotografías</h1>
            <p class="details">Explora mi galería de fotografías</p>
            <button class="btn" onclick="verMas('fotografias')">Ver más</button>
        </div>
    </section>

    <section class="section" id="contactame">
        <img src="img/DALL·E 2024-09-08 20.39.29 - A contact page cover for graphic designer Paulo Villarroel, featuring a clean and modern design. The focus is on ease of communication, incorporating .webp" alt="Imagen de Contacto">
        <div class="content">
            <h1>Contáctame</h1>
            <p class="details">¿Listo para trabajar juntos? Contáctame ahora</p>
            <button class="btn" onclick="verMas('contactame')">Contactar</button>
        </div>
    </section>

    <script>
        function verMas(seccion) {
            // Aquí puedes poner la URL a la que quieres redirigir según la sección
            switch(seccion) {
                case 'portafolio':
                    window.location.href = 'https://ejemplo.com/portafolio';
                    break;
                case 'servicios':
                    window.location.href = 'https://ejemplo.com/servicios';
                    break;
                case 'fotografias':
                    window.location.href = 'https://ejemplo.com/fotografias';
                    break;
                case 'contactame':
                    window.location.href = 'https://ejemplo.com/contacto';
                    break;
                default:
                    window.location.href = 'https://ejemplo.com';
            }
        }
    </script>
</body>
</html>

@endsection
