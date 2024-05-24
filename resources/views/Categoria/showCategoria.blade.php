<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mostrar Elemento</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h3>{{ $categoria->nombre}}</h3>
          </div>
          <div class="card-body">
            <h5 class="card-title">{{$categoria->nombre}}</h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><strong>Código:</strong> {{ $categoria->codigo }}</li>
              <li class="list-group-item"><strong>Nombre:</strong> {{ $categoria->nombre }}</li>
              <li class="list-group-item"><strong>Descripción:</strong>{{ $categoria->descripcion}}.</li>
            </ul>
            <p></p>
            <form method="POST" action="{{ route('categoria.destroy', $categoria->id) }}">
              @csrf
              @method('DELETE')
              <button type="submit"class="btn btn-dark text-white mb-4">Borrar Categoria</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>