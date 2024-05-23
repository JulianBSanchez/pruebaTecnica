<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Producto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h3>Editanto el libro: {{ $producto->nombre }}</h3>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('producto.update', $producto->id) }}">
              @csrf
              @method('PUT')
              <div class="mb-3">
                <label for="nombre" class="form-label">Título</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}" required>
              </div>
              <div class="mb-3">
                <label for="categoria" class="form-label">Género</label>
                <input type="text" class="form-control" id="categoria" name="categoria" value="{{ $producto->categoria->nombre }}" required>
              </div>
              <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required>{{ $producto->descripcion }}</textarea>
              </div>
              <div class="mb-3">
                <label for="codigo" class="form-label">Código</label>
                <input type="text" class="form-control" id="codigo" name="codigo" value="{{ $producto->codigo }}" required>
              </div>
              <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" step="0.01" class="form-control" id="precio" name="precio" value="{{ $producto->precio }}" required>
              </div>
              <div class="mb-3">
                <label for="src" class="form-label">Portada</label>
                <input type="text" class="form-control" id="src" name="src" value="{{ $producto->src }}" required>
              </div>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>