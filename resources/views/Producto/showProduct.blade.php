<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mostrar Elemento</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  @auth
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h3>{{ $producto->nombre}}</h3>
          </div>
          <div class="card-body">
            <h5 class="card-title">{{$producto->categoria->nombre}}</h5>
            <p class="card-text">{{ $producto->descripcion }}</p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><strong>Código:</strong> {{ $producto->codigo }}</li>
              <li class="list-group-item"><strong>Precio:</strong> {{ $producto->precio }}</li>
              <li class="list-group-item"><strong>portada:</strong>{{ $producto->src}}.</li>
            </ul>
            <div class="row">
              <div class="col-sm-6">
                <form method="POST" action="{{ route('producto.destroy', $producto->id) }}">
                  @csrf
                  @method('DELETE')
                  <button type="submit"class="btn btn-dark text-white mb-4">Borrar Libro</button>
                </form> 
              </div>
              <div class="col-sm-6">
                <a href="{{ route('producto.generarPDF', $producto->id) }}" class="btn btn-dark text-white mb-4">Exportar a PDF</a>
              </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  @endauth
</body>
</html>