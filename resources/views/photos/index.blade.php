@extends('layouts.app')

@section('title', 'Fotografías')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carlos Rodríguez - Fotógrafo</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
            padding-top: 20px;
            margin-bottom: 20px;
            color: #000;
        }

        /* Grid para la galería */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 10px;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            color: #fff;
            font-size: 1.2rem;
        }

        .gallery-item:hover .overlay {
            opacity: 1;
        }

        /* Estilos para el lightbox */
        #lightbox {
            display: none;
            position: fixed;
            z-index: 1000;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            justify-content: center;
            align-items: center;
        }

        #lightbox img {
            max-width: 90%;
            max-height: 90%;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        footer {
            background-color: #111;
            padding: 20px;
            text-align: center;
        }

        footer a {
            color: #fff;
            text-decoration: none;
            border: 2px solid #fff;
            padding: 10px 20px;
            margin: 5px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        footer a:hover {
            background-color: #fff;
            color: #000;
        }
    </style>
</head>
<body>
    <main>
        <section id="galeria">
            <h2>Galería de Fotos</h2>
            <div class="gallery">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1682686581498-5e85c7228119?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Foto 1">
                    <div class="overlay">Ver Detalles</div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1682686580003-22d3d65399a8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" alt="Foto 2">
                    <div class="overlay">Ver Detalles</div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1682687982501-1e58ab814714?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Foto 3">
                    <div class="overlay">Ver Detalles</div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1682695796954-bad0d0f59ff1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Foto 4">
                    <div class="overlay">Ver Detalles</div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1682687220742-aba13b6e50ba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Foto 5">
                    <div class="overlay">Ver Detalles</div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1682687220509-61b8a906ca19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Foto 6">
                    <div class="overlay">Ver Detalles</div>
                </div>
            </div>
        </section>
    </main>


    <div id="lightbox">
        <img src="" alt="Imagen ampliada">
    </div>

    <script>
        // Abre el lightbox al hacer clic en la imagen
        document.querySelectorAll('.gallery-item').forEach(item => {
            item.addEventListener('click', function() {
                const imgSrc = this.querySelector('img').src;
                const lightbox = document.getElementById('lightbox');
                const lightboxImg = lightbox.querySelector('img');
                
                lightboxImg.src = imgSrc;
                lightbox.style.display = 'flex';
            });
        });

        // Cierra el lightbox al hacer clic en cualquier parte de él
        document.getElementById('lightbox').addEventListener('click', function() {
            this.style.display = 'none';
        });
    </script>
</body>
</html>

@endsection
