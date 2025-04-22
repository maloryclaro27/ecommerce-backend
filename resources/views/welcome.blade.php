<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>

  <!-- Bootstrap CSS desde CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* Establecer fondo de la página */
    body {
      background-image: url("https://images.unsplash.com/photo-1514228742587-6b1558fcca3d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"); /* Fondo lila */
    }

    /* Navbar */
    .navbar {
      background-color: #837fc800; 
    }

    .navbar a {
      color: #f39f0d;
      font-weight: bold;
    }

    .navbar a:hover {
      color: #ffd700; 
    }

    /* Header con imagen de fondo */
    .header-section {
      background-image: url("https://e0.pxfuel.com/wallpapers/873/235/desktop-wallpaper-plain-colour-light-plain-color-background.jpg"); /* Imagen de fondo */
      background-size: cover;
      background-position: center;
      padding: 75px 0;
      position: relative;
      text-align: left;
      color: #f39f0d;
    }

    .header-content {
      position: relative;
      z-index: 2;
      max-width: 800px;
      margin-left: 50px;
      display: flex;
      align-items: center;
    }

    /* Estilo del logo en el header */
    .header-content img {
      height: 100px;
      margin-right: 40px;
    }

    /* Estilo del título */
    .header-content h1 {
      font-size: 3.5rem;
      font-weight: bold;
      text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
      border-left: 8px solid white;
      padding-left: 20px;
      margin: 0;
    }

    /* Estilo del carrusel */
    .carousel-container {
      max-width: 800px;
      margin: auto;
      padding: 50px 0;
    }

    .carousel-item img {
      height: 400px;
      object-fit: cover;
      border-radius: 15px;
    }

    /* Estilo del título dentro del carrusel */
    .carousel-caption {
      background: rgba(0, 0, 0, 0.6);
      padding: 15px;
      border-radius: 10px;
      font-size: 1.5rem;
      font-weight: bold;
    }

    /* Flechas del carrusel */
    .carousel-control-prev, .carousel-control-next {
      filter: invert(100%);
    }
  </style>
</head>
<body>
  <!-- Navbar translúcido -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="{{ url('/perfil') }}">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/perfil/intereses') }}">Promociones</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/perfil/habilidades') }}">Carrito</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header con imagen de fondo y logo junto al título -->
  <div class="header-section">
    <div class="container header-content">
      <!-- Logo obtenido desde una URL externa -->
      <img src="https://unired.edu.co/images/instituciones/UNAB/2021/Marzo/Logo_UNAB.png" alt="Logo">
      <h1>Welcome Ecommerce</h1>
    </div>
  </div>

  <!-- Carrusel de imágenes -->
  <div class="container carousel-container">
    <div id="interesesCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- Imagen 1: Cine -->
        <div class="carousel-item active">
          <img src="https://images.unsplash.com/photo-1627384113743-6bd5a479fffd?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Cine - Woody Allen">
          <div class="carousel-caption">
            Dermocosmética
          </div>
        </div>

        <!-- Imagen 2: Música -->
        <div class="carousel-item">
          <img src="https://images.unsplash.com/photo-1627384113972-f4c0392fe5aa?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Música - The Weeknd">
          <div class="carousel-caption">
            Perfumes
          </div>
        </div>
      </div>

      <!-- Controles del carrusel -->
      <button class="carousel-control-prev" type="button" data-bs-target="#interesesCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#interesesCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
  </div>

  <!-- Bootstrap JavaScript desde CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

