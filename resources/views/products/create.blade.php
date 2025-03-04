<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulario de Compra</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Estilos adicionales para la card */
    .card {
      border: none;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }
    .card:hover {
      transform: translateY(-5px);
    }
    .card-header {
      background-color: #007bff;
      color: #fff;
    }
  </style>
</head>
<body>
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <div class="card">
          <div class="card-header">
            <h4 class="mb-0">Formulario de Compra</h4>
          </div>
          <div class="card-body">
            <!-- Formulario de compra -->
            <form action="{{ route('comprar') }}" method="POST">
              @csrf
              <!-- Producto -->
              <div class="mb-3">
                <label for="productName" class="form-label">Producto</label>
                <input type="text" class="form-control" id="productName" name="productName" placeholder="Nombre del producto" required>
              </div>
              <!-- Cantidad -->
              <div class="mb-3">
                <label for="quantity" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="quantity" name="quantity" min="1" value="1" required>
              </div>
              <!-- Nombre del Comprador -->
              <div class="mb-3">
                <label for="buyerName" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="buyerName" name="buyerName" placeholder="Tu nombre completo" required>
              </div>
              <!-- Email -->
              <div class="mb-3">
                <label for="buyerEmail" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="buyerEmail" name="buyerEmail" placeholder="nombre@ejemplo.com" required>
              </div>
              <!-- Teléfono -->
              <div class="mb-3">
                <label for="buyerPhone" class="form-label">Teléfono</label>
                <input type="tel" class="form-control" id="buyerPhone" name="buyerPhone" placeholder="Tu número de teléfono" required>
              </div>
              <!-- Dirección -->
              <div class="mb-3">
                <label for="buyerAddress" class="form-label">Dirección</label>
                <textarea class="form-control" id="buyerAddress" name="buyerAddress" rows="2" placeholder="Dirección de entrega" required></textarea>
              </div>
              <!-- Método de Pago -->
              <div class="mb-3">
                <label for="paymentMethod" class="form-label">Método de Pago</label>
                <select class="form-select" id="paymentMethod" name="paymentMethod" required>
                  <option value="">Seleccione un método</option>
                  <option value="tarjeta">Tarjeta de Crédito/Débito</option>
                  <option value="paypal">PayPal</option>
                  <option value="transferencia">Transferencia Bancaria</option>
                </select>
              </div>
              <!-- Botón de envío -->
              <div class="d-grid">
                <button type="submit" class="btn btn-success">Realizar Compra</button>
              </div>
            </form>
            <!-- Fin del formulario -->
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
