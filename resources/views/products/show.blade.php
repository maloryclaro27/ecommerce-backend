<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalle del Producto</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
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
    /* Ajuste de la imagen para ocupar toda la parte izquierda */
    .product-image {
      width: 100%;
      height: 100vh;
      object-fit: cover;
    }
    /* Contenedor de la información */
    .product-info {
      display: flex;
      flex-direction: column;
      justify-content: center;
      height: 100vh;
      padding: 2rem;
    }
    .category {
      font-size: 1.2rem;
      color: gray;
    }
    .price {
      font-size: 2rem;
      color: #d32f2f;
      font-weight: bold;
      margin: 10px 0;
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
          <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Ecommerce</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/perfil') }}">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/perfil/intereses') }}">Promociones</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/perfil/habilidades') }}">Carrito</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <!-- Imagen del producto en la izquierda -->
      <div class="col-md-7 p-0">
        <img src="https://leonisa.co/cdn/shop/files/195612_391_1200X1500_1_380x.jpg?v=1740495560" alt="Pantalón HDE" class="product-image">
      </div>
      <!-- Información del producto en la derecha -->
      <div class="col-md-5 product-info">
        <h1 class="text-primary">HDE Pantalones de yoga para mujer</h1>
        <p class="category">Categoría: Ropa</p>
        <p class="price">US$35.99</p>
        <button class="btn btn-lg btn-primary">Agregar al carrito</button>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!-- Modal con información adicional (opcional) -->
<div class="modal fade" id="modalDetalles" tabindex="-1" aria-labelledby="modalDetallesLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalDetallesLabel">Detalles del Producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <p>
          • 75% poliéster, 20% rayón, 5% spandex<br>
          • Lavado a máquina<br>
          • Origen: Importado
        </p>
        <p>
          Estos pantalones de yoga combinan comodidad y estilo. 
          Ideales para usar tanto en casa como en el gimnasio.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS (necesario para el funcionamiento de los modales, etc.) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


