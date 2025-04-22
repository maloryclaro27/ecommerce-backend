<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Listado de Productos</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome para iconos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary-color: #f39f0d;
      --hover-color: #ffd700;
      --text-dark: #333;
      --text-light: #f8f9fa;
    }
    
    /* Navbar */
    .navbar {
      background-color: rgba(131, 127, 200, 0.8);
      backdrop-filter: blur(10px);
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    .navbar a {
      color: var(--primary-color);
      font-weight: bold;
      transition: all 0.3s ease;
      position: relative;
    }
    .navbar a:hover {
      color: var(--hover-color);
    }
    .navbar a::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: var(--hover-color);
      transition: width 0.3s ease;
    }
    .navbar a:hover::after {
      width: 100%;
    }
    
    /* Compensar la navbar fija */
    body {
      padding-top: 80px;
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    /* Título principal */
    .main-title {
      position: relative;
      display: inline-block;
      margin-bottom: 2rem;
      color: var(--text-dark);
    }
    .main-title::after {
      content: '';
      position: absolute;
      width: 50%;
      height: 4px;
      bottom: -10px;
      left: 25%;
      background: linear-gradient(to right, var(--primary-color), var(--hover-color));
      border-radius: 2px;
    }
    
    /* Efecto hover en cards */
    .card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: none;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }
    .card-img-top {
      height: 200px;
      object-fit: cover;
      transition: transform 0.5s ease;
    }
    .card:hover .card-img-top {
      transform: scale(1.05);
    }
    .card-body {
      display: flex;
      flex-direction: column;
    }
    .card-title {
      color: var(--text-dark);
      font-weight: 600;
      margin-bottom: 0.75rem;
    }
    .price {
      color: var(--primary-color);
      font-weight: 700;
      font-size: 1.25rem;
      margin-bottom: 1rem;
    }
    
    /* Botón Añadir al carrito */
    .add-to-cart {
      background-color: var(--primary-color);
      color: white;
      border: none;
      padding: 0.5rem 1rem;
      border-radius: 50px;
      font-weight: 600;
      transition: all 0.3s ease;
      margin-top: auto;
      align-self: flex-start;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }
    .add-to-cart:hover {
      background-color: var(--hover-color);
      transform: translateY(-2px);
      box-shadow: 0 5px 10px rgba(243, 159, 13, 0.3);
    }
    
    /* Placeholder para imágenes */
    .img-placeholder {
      background: linear-gradient(45deg, #f3f3f3, #e0e0e0);
      height: 200px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #aaa;
      font-size: 1.5rem;
    }
    
    /* Efecto de carga */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .product-card {
      animation: fadeIn 0.5s ease forwards;
      opacity: 0;
    }
    .product-card:nth-child(1) { animation-delay: 0.1s; }
    .product-card:nth-child(2) { animation-delay: 0.2s; }
    .product-card:nth-child(3) { animation-delay: 0.3s; }
    .product-card:nth-child(4) { animation-delay: 0.4s; }
    .product-card:nth-child(5) { animation-delay: 0.5s; }
    .product-card:nth-child(6) { animation-delay: 0.6s; }
    
    /* Footer */
    footer {
      background-color: rgba(131, 127, 200, 0.8);
      color: white;
      padding: 2rem 0;
      margin-top: 3rem;
    }
    .footer-links a {
      color: var(--primary-color);
      text-decoration: none;
      transition: color 0.3s ease;
    }
    .footer-links a:hover {
      color: var(--hover-color);
    }
  </style>
</head>
<body>

  <!-- Navbar translúcido -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="fas fa-store me-2"></i>MiTienda
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="{{ url('/') }}"><i class="fas fa-home me-1"></i> Ecommerce</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/perfil') }}"><i class="fas fa-user me-1"></i> Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/perfil/intereses') }}"><i class="fas fa-tag me-1"></i> Promociones</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/perfil/habilidades') }}"><i class="fas fa-shopping-cart me-1"></i> Carrito</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Sección de listado de productos -->
  <div class="container my-5">
    <h1 class="text-center main-title">Listado de Productos</h1>
    
    <div class="row">
      <!-- Card Producto 1 -->
      <div class="col-sm-6 col-md-4 mb-4 product-card">
        <div class="card h-100">
          <div class="img-placeholder">
            <i class="fas fa-camera"></i>
          </div>
          <div class="card-body">
            <h5 class="card-title">Cámara Digital Profesional</h5>
            <p class="price">US$29.99</p>
            <p class="card-text">Cámara de 24MP con lente intercambiable y grabación 4K.</p>
            <button class="add-to-cart">
              <i class="fas fa-cart-plus"></i> Añadir al carrito
            </button>
          </div>
        </div>
      </div>
      
      <!-- Card Producto 2 -->
      <div class="col-sm-6 col-md-4 mb-4 product-card">
        <div class="card h-100">
          <div class="img-placeholder">
            <i class="fas fa-headphones"></i>
          </div>
          <div class="card-body">
            <h5 class="card-title">Audífonos Inalámbricos</h5>
            <p class="price">US$39.99</p>
            <p class="card-text">Audífonos Bluetooth con cancelación de ruido y 30h de batería.</p>
            <button class="add-to-cart">
              <i class="fas fa-cart-plus"></i> Añadir al carrito
            </button>
          </div>
        </div>
      </div>
      
      <!-- Card Producto 3 -->
      <div class="col-sm-6 col-md-4 mb-4 product-card">
        <div class="card h-100">
          <div class="img-placeholder">
            <i class="fas fa-laptop"></i>
          </div>
          <div class="card-body">
            <h5 class="card-title">Laptop Ultradelgada</h5>
            <p class="price">US$49.99</p>
            <p class="card-text">Laptop de 14" con procesador i7, 16GB RAM y SSD 512GB.</p>
            <button class="add-to-cart">
              <i class="fas fa-cart-plus"></i> Añadir al carrito
            </button>
          </div>
        </div>
      </div>
      
      <!-- Card Producto 4 -->
      <div class="col-sm-6 col-md-4 mb-4 product-card">
        <div class="card h-100">
          <div class="img-placeholder">
            <i class="fas fa-mobile-alt"></i>
          </div>
          <div class="card-body">
            <h5 class="card-title">Smartphone Premium</h5>
            <p class="price">US$19.99</p>
            <p class="card-text">Teléfono con pantalla AMOLED de 6.5", triple cámara y 128GB.</p>
            <button class="add-to-cart">
              <i class="fas fa-cart-plus"></i> Añadir al carrito
            </button>
          </div>
        </div>
      </div>
      
      <!-- Card Producto 5 -->
      <div class="col-sm-6 col-md-4 mb-4 product-card">
        <div class="card h-100">
          <div class="img-placeholder">
            <i class="fas fa-tablet-alt"></i>
          </div>
          <div class="card-body">
            <h5 class="card-title">Tablet Multiusos</h5>
            <p class="price">US$24.99</p>
            <p class="card-text">Tablet de 10.1" con stylus incluido y 64GB de almacenamiento.</p>
            <button class="add-to-cart">
              <i class="fas fa-cart-plus"></i> Añadir al carrito
            </button>
          </div>
        </div>
      </div>
      
      <!-- Card Producto 6 -->
      <div class="col-sm-6 col-md-4 mb-4 product-card">
        <div class="card h-100">
          <div class="img-placeholder">
            <i class="fas fa-smartwatch"></i>
          </div>
          <div class="card-body">
            <h5 class="card-title">Smartwatch Deportivo</h5>
            <p class="price">US$34.99</p>
            <p class="card-text">Reloj inteligente con monitor de ritmo cardíaco y GPS integrado.</p>
            <button class="add-to-cart">
              <i class="fas fa-cart-plus"></i> Añadir al carrito
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4">
          <h5><i class="fas fa-store me-2"></i> MiTienda</h5>
          <p>Tu destino para los mejores productos tecnológicos al mejor precio.</p>
        </div>
        <div class="col-md-4 mb-4">
          <h5>Enlaces rápidos</h5>
          <ul class="list-unstyled footer-links">
            <li><a href="#"><i class="fas fa-chevron-right me-1"></i> Inicio</a></li>
            <li><a href="#"><i class="fas fa-chevron-right me-1"></i> Productos</a></li>
            <li><a href="#"><i class="fas fa-chevron-right me-1"></i> Promociones</a></li>
            <li><a href="#"><i class="fas fa-chevron-right me-1"></i> Contacto</a></li>
          </ul>
        </div>
        <div class="col-md-4 mb-4">
          <h5>Contacto</h5>
          <p><i class="fas fa-envelope me-2"></i> info@mitienda.com</p>
          <p><i class="fas fa-phone me-2"></i> +1 234 567 890</p>
          <div class="social-icons mt-3">
            <a href="#" class="text-primary me-3"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-primary me-3"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-primary me-3"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
      <hr class="my-4 bg-light">
      <div class="text-center">
        <p class="mb-0">&copy; 2023 MiTienda. Todos los derechos reservados.</p>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Efecto de añadir al carrito
    document.querySelectorAll('.add-to-cart').forEach(button => {
      button.addEventListener('click', function() {
        const product = this.closest('.card').querySelector('.card-title').textContent;
        const price = this.closest('.card').querySelector('.price').textContent;
        
        // Efecto visual
        this.innerHTML = '<i class="fas fa-check"></i> Añadido';
        this.style.backgroundColor = '#28a745';
        
        // Reset después de 2 segundos
        setTimeout(() => {
          this.innerHTML = '<i class="fas fa-cart-plus"></i> Añadir al carrito';
          this.style.backgroundColor = '';
        }, 2000);
        
        // Aquí podrías agregar lógica para realmente añadir al carrito
        console.log(`Producto añadido: ${product} - ${price}`);
      });
    });
  </script>
</body>
</html>

