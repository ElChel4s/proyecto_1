@extends('layouts.app')

@section('title', 'Trabajos de Diseño')

@section('content')
<div class="container">
    <h1 class="portfolio-title">Mi Portafolio de Diseño Gráfico</h1>
    <div class="portfolio-grid" id="portfolio-grid">
        <!-- Los elementos del portafolio se insertarán aquí dinámicamente -->
    </div>
</div>

<style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .portfolio-title {
        text-align: center;
        color: #333;
        margin-bottom: 40px;
    }

    .portfolio-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
    }

    .portfolio-item {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .portfolio-item:hover {
        transform: scale(1.05);
    }

    .portfolio-item img {
        width: 100%;
        height: auto;
        display: block;
    }

    .portfolio-info {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.75);
        color: white;
        opacity: 0;
        transition: opacity 0.3s ease;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 20px;
    }

    .portfolio-item:hover .portfolio-info {
        opacity: 1;
    }

    .portfolio-info h3 {
        margin: 0;
        font-size: 1.5rem;
    }

    .portfolio-info p {
        margin: 10px 0 0;
        font-size: 1rem;
    }

    /* Responsivo */
    @media (max-width: 600px) {
        .portfolio-info {
            font-size: 0.9rem;
        }

        .portfolio-info h3 {
            font-size: 1.2rem;
        }
    }
</style>

<script>
    const portfolioItems = [
    { id: 1, title: "Diseño de Marca", description: "Creación de identidad visual para startup tecnológica", image: "img/Diseno publicitario.webp" },
    { id: 2, title: "Campaña Publicitaria", description: "Desarrollo de campaña multicanal para producto de consumo", image: "img/publicidad gym.webp" },
    { id: 3, title: "Diseño Editorial", description: "Maquetación de revista de moda de tirada mensual", image: "img/diseno editorial.webp" },
    { id: 4, title: "Ilustración Digital", description: "Serie de ilustraciones para libro infantil", image: "img/ilustracion digital.webp" },
    { id: 5, title: "Diseño de Packaging", description: "Rediseño de empaque para línea de productos orgánicos", image: "img/diseno packing.webp" },
    { id: 6, title: "Diseño Web", description: "Interfaz de usuario para aplicación web de finanzas personales", image: "img/publicidad musica.webp" },
];


    const portfolioGrid = document.getElementById('portfolio-grid');

    portfolioItems.forEach(item => {
        const portfolioItem = document.createElement('div');
        portfolioItem.className = 'portfolio-item';
        portfolioItem.innerHTML = `
            <img src="${item.image}" alt="${item.title}">
            <div class="portfolio-info">
                <h3>${item.title}</h3>
                <p>${item.description}</p>
            </div>
        `;
        portfolioGrid.appendChild(portfolioItem);
    });
</script>
@endsection
