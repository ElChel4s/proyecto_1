@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Alex Designer - Blog</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    header {
      padding: 1rem 1.5rem;
      display: flex;
      align-items: center;
      height: 56px;
      border-bottom: 1px solid #eaeaea;
    }

    header nav {
      margin-left: auto;
      display: flex;
      gap: 1rem;
    }

    nav a {
      text-decoration: none;
      color: #333;
      font-size: 0.875rem;
      font-weight: 500;
    }

    nav a:hover {
      text-decoration: underline;
    }

    main {
      flex: 1;
      padding: 2rem 1.5rem;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .hero {
      text-align: center;
      margin-bottom: 3rem;
    }

    .hero h1 {
      font-size: 2.5rem;
      font-weight: bold;
    }

    .hero p {
      font-size: 1.125rem;
      color: #666;
      margin: 1rem auto;
      max-width: 600px;
    }

    .hero .buttons {
      margin-top: 1.5rem;
    }

    .button {
      padding: 0.75rem 1.5rem;
      border: none;
      background-color: #0070f3;
      color: white;
      cursor: pointer;
      margin-right: 1rem;
    }

    .button.outline {
      background-color: transparent;
      color: #0070f3;
      border: 2px solid #0070f3;
    }

    .section-title {
      font-size: 2rem;
      margin-bottom: 1.5rem;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 1.5rem;
    }

    .card {
      background-color: white;
      border: 1px solid #eaeaea;
      padding: 1rem;
      border-radius: 8px;
      text-align: center;
    }

    .card img {
      max-width: 100%;
      border-radius: 8px;
    }

    footer {
      padding: 1.5rem;
      border-top: 1px solid #eaeaea;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    footer nav {
      display: flex;
      gap: 1rem;
    }

    footer nav a {
      font-size: 0.875rem;
      color: #666;
      text-decoration: none;
    }

    footer nav a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>


  <main>
    <section class="hero">
      <div class="container">
        <h1 style="color: #eaeaea;">Paulo Villarroel</h1>
        <p>Diseñador gráfico apasionado por crear experiencias visuales únicas y memorables.</p>
        <div class="buttons">
          <button class="button">Ver proyectos</button>
          <button class="button outline">Contactar</button>
        </div>
      </div>
    </section>

    <section class="container">
      <h2 class="section-title">Entradas recientes</h2>
      <div class="grid">
        <div class="card">
          <h3>Título del post 1</h3>
          <p>Breve descripción del post.</p>
          <a href="#">Leer más</a>
        </div>
        <div class="card">
          <h3>Título del post 2</h3>
          <p>Breve descripción del post.</p>
          <a href="#">Leer más</a>
        </div>
        <div class="card">
          <h3>Título del post 3</h3>
          <p>Breve descripción del post.</p>
          <a href="#">Leer más</a>
        </div>
      </div>
    </section>

    <section class="container">
      <h2 class="section-title">Proyectos destacados</h2>
      <div class="grid">
        <div class="card">
          <img src="https://via.placeholder.com/300x200" alt="Proyecto 1" />
          <h3>Proyecto 1</h3>
          <p>Descripción del proyecto 1</p>
        </div>
        <div class="card">
          <img src="https://via.placeholder.com/300x200" alt="Proyecto 2" />
          <h3>Proyecto 2</h3>
          <p>Descripción del proyecto 2</p>
        </div>
        <div class="card">
          <img src="https://via.placeholder.com/300x200" alt="Proyecto 3" />
          <h3>Proyecto 3</h3>
          <p>Descripción del proyecto 3</p>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <p>© 2023 Alex Designer. Todos los derechos reservados.</p>
    <nav>
      <a href="#">Términos de servicio</a>
      <a href="#">Privacidad</a>
    </nav>
  </footer>
</body>
</html>

@endsection
