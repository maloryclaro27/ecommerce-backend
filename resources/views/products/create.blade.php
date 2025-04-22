<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulario de Compra</title>
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
      --navbar-color: rgba(131, 127, 200, 0.8);
    }
    
    /* Navbar */
    .navbar {
      background-color: var(--navbar-color);
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
      background-image: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
    }
    
    /* Card del formulario */
    .form-card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      overflow: hidden;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      background-color: white;
    }
    .form-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 35px rgba(0,0,0,0.15);
    }
    .card-header {
      background: linear-gradient(135deg, var(--primary-color), var(--hover-color));
      color: white;
      padding: 1.5rem;
      text-align: center;
      position: relative;
      overflow: hidden;
    }
    .card-header h4 {
      position: relative;
      z-index: 2;
      font-weight: 700;
      margin: 0;
    }
    .card-header::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0) 70%);
      z-index: 1;
      animation: rotate 15s linear infinite;
    }
    
    @keyframes rotate {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    
    /* Estilos del formulario */
    .card-body {
      padding: 2rem;
    }
    .form-label {
      font-weight: 600;
      color: var(--text-dark);
      margin-bottom: 0.5rem;
    }
    .form-control, .form-select {
      border: 2px solid #e9ecef;
      border-radius: 8px;
      padding: 0.75rem 1rem;
      transition: all 0.3s ease;
    }
    .form-control:focus, .form-select:focus {
      border-color: var(--primary-color);
      box-shadow: 0 0 0 0.25rem rgba(243, 159, 13, 0.25);
    }
    textarea.form-control {
      min-height: 100px;
      resize: vertical;
    }
    
    /* Botón de enviar */
    .btn-submit {
      background: linear-gradient(135deg, var(--primary-color), var(--hover-color));
      border: none;
      border-radius: 50px;
      padding: 0.75rem 2rem;
      font-weight: 600;
      letter-spacing: 0.5px;
      text-transform: uppercase;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }
    .btn-submit:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(243, 159, 13, 0.3);
    }
    .btn-submit::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
      transition: 0.5s;
    }
    .btn-submit:hover::before {
      left: 100%;
    }
    
    /* Efecto de carga */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .form-card {
      animation: fadeIn 0.6s ease forwards;
    }
    
    /* Iconos de los campos */
    .input-group-text {
      background-color: var(--primary-color);
      color: white;
      border: none;
    }
    
    /* Footer */
    footer {
      background-color: var(--navbar-color);
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

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">
        <div class="form-card">
          <div class="card-header">
            <h4><i class="fas fa-shopping-bag me-2"></i> Formulario de Compra</h4>
          </div>
          <div class="card-body">
            <!-- Formulario de compra -->
            <form action="#" method="POST">
              @csrf
              
              <!-- Producto -->
              <div class="mb-4">
                <label for="productName" class="form-label">Producto</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-box-open"></i></span>
                  <input type="text" class="form-control" id="productName" name="productName" placeholder="Nombre del producto" required>
                </div>
              </div>
              
              <!-- Cantidad -->
              <div class="mb-4">
                <label for="quantity" class="form-label">Cantidad</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-hashtag"></i></span>
                  <input type="number" class="form-control" id="quantity" name="quantity" min="1" value="1" required>
                </div>
              </div>
              
              <!-- Nombre del Comprador -->
              <div class="mb-4">
                <label for="buyerName" class="form-label">Nombre Completo</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                  <input type="text" class="form-control" id="buyerName" name="buyerName" placeholder="Tu nombre completo" required>
                </div>
              </div>
              
              <!-- Email -->
              <div class="mb-4">
                <label for="buyerEmail" class="form-label">Correo Electrónico</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  <input type="email" class="form-control" id="buyerEmail" name="buyerEmail" placeholder="nombre@ejemplo.com" required>
                </div>
              </div>
              
              <!-- Teléfono -->
              <div class="mb-4">
                <label for="buyerPhone" class="form-label">Teléfono</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-phone"></i></span>
                  <input type="tel" class="form-control" id="buyerPhone" name="buyerPhone" placeholder="Tu número de teléfono" required>
                </div>
              </div>
              
              <!-- Dirección -->
              <div class="mb-4">
                <label for="buyerAddress" class="form-label">Dirección de Envío</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                  <textarea class="form-control" id="buyerAddress" name="buyerAddress" rows="3" placeholder="Dirección completa para la entrega" required></textarea>
                </div>
              </div>
              
              <!-- Método de Pago -->
              <div class="mb-4">
                <label for="paymentMethod" class="form-label">Método de Pago</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
                  <select class="form-select" id="paymentMethod" name="paymentMethod" required>
                    <option value="">Seleccione un método de pago</option>
                    <option value="tarjeta">Tarjeta de Crédito/Débito</option>
                    <option value="paypal">PayPal</option>
                    <option value="transferencia">Transferencia Bancaria</option>
                    <option value="efectivo">Pago contra entrega</option>
                  </select>
                </div>
              </div>
              
              <!-- Botón de envío -->
              <div class="d-grid mt-4">
                <button type="submit" class="btn btn-submit">
                  <i class="fas fa-paper-plane me-2"></i> Confirmar Compra
                </button>
              </div>
            </form>
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
          <p>Tu destino para compras seguras y fáciles con entrega rápida.</p>
        </div>
        <div class="col-md-4 mb-4">
          <h5>Enlaces rápidos</h5>
          <ul class="list-unstyled footer-links">
            <li><a href="#"><i class="fas fa-chevron-right me-1"></i> Términos y condiciones</a></li>
            <li><a href="#"><i class="fas fa-chevron-right me-1"></i> Política de privacidad</a></li>
            <li><a href="#"><i class="fas fa-chevron-right me-1"></i> Preguntas frecuentes</a></li>
          </ul>
        </div>
        <div class="col-md-4 mb-4">
          <h5>Contacto</h5>
          <p><i class="fas fa-envelope me-2"></i> ventas@mitienda.com</p>
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
    // Animación para el formulario al cargar
    document.addEventListener('DOMContentLoaded', function() {
      // Validación en tiempo real
      const inputs = document.querySelectorAll('.form-control, .form-select');
      inputs.forEach(input => {
        input.addEventListener('focus', function() {
          this.parentElement.querySelector('.input-group-text').style.backgroundColor = 'var(--hover-color)';
        });
        input.addEventListener('blur', function() {
          this.parentElement.querySelector('.input-group-text').style.backgroundColor = 'var(--primary-color)';
        });
      });
      
      // Efecto al enviar el formulario
      const form = document.querySelector('form');
      form.addEventListener('submit', function(e) {
        e.preventDefault();
        const submitBtn = document.querySelector('.btn-submit');
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Procesando...';
        submitBtn.style.background = 'linear-gradient(135deg, #28a745, #20c997)';
        
        // Simular envío (en un caso real sería una petición AJAX)
        setTimeout(() => {
          submitBtn.innerHTML = '<i class="fas fa-check me-2"></i> Compra Realizada!';
          alert('¡Compra realizada con éxito! Serás redirigido a la página de confirmación.');
          // Aquí podrías redirigir a otra página o reiniciar el formulario
        }, 2000);
      });
    });
  </script>
</body>
</html>
