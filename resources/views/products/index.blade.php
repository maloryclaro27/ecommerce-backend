<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Listado de Productos</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
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
    
    /* Compensar la navbar fija */
    body {
      padding-top: 80px;
    }
    
    /* Efecto hover en cards */
    .card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.15);
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

  <!-- Sección de listado de productos -->
  <div class="container my-5">
    <h1 class="text-center mb-5">Listado de Producto</h1>
    <div class="row">
      <!-- Card Producto 1 -->
      <div class="col-sm-6 col-md-4 mb-4">
        <div class="card h-100">
          <img src="ruta_imagen_producto1.jpg" class="card-img-top" alt="Producto 1">
          <div class="card-body">
            <h5 class="card-title">Producto 1</h5>
            <p class="card-text text-primary">US$29.99</p>
          </div>
        </div>
      </div>
      <!-- Card Producto 2 -->
      <div class="col-sm-6 col-md-4 mb-4">
        <div class="card h-100">
          <img src="ruta_imagen_producto2.jpg" class="card-img-top" alt="Producto 2">
          <div class="card-body">
            <h5 class="card-title">Producto 2</h5>
            <p class="card-text text-primary">US$39.99</p>
          </div>
        </div>
      </div>
      <!-- Card Producto 3 -->
      <div class="col-sm-6 col-md-4 mb-4">
        <div class="card h-100">
          <img src="ruta_imagen_producto3.jpg" class="card-img-top" alt="Producto 3">
          <div class="card-body">
            <h5 class="card-title">Producto 3</h5>
            <p class="card-text text-primary">US$49.99</p>
          </div>
        </div>
      </div>
      <!-- Card Producto 4 -->
      <div class="col-sm-6 col-md-4 mb-4">
        <div class="card h-100">
          <img src="ruta_imagen_producto4.jpg" class="card-img-top" alt="Producto 4">
          <div class="card-body">
            <h5 class="card-title">Producto 4</h5>
            <p class="card-text text-primary">US$19.99</p>
          </div>
        </div>
      </div>
      <!-- Card Producto 5 -->
      <div class="col-sm-6 col-md-4 mb-4">
        <div class="card h-100">
          <img src="ruta_imagen_producto5.jpg" class="card-img-top" alt="Producto 5">
          <div class="card-body">
            <h5 class="card-title">Producto 5</h5>
            <p class="card-text text-primary">US$24.99</p>
          </div>
        </div>
      </div>
      <!-- Card Producto 6 -->
      <div class="col-sm-6 col-md-4 mb-4">
        <div class="card h-100">
          <img src="ruta_imagen_producto6.jpg" class="card-img-top" alt="Producto 6">
          <div class="card-body">
            <h5 class="card-title">Producto 6</h5>
            <p class="card-text text-primary">US$34.99</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

