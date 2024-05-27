<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mostrar Pedido</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h3>pedido: {{ $pedido->recordatorio}}</h3>
          </div>
          <ul class="list-group list-group-flush">
              <li class="list-group-item"><strong>Fecha :</strong> {{ $pedido->fecha }}</li>
              <li class="list-group-item"><strong>Coste:</strong> {{ $pedido->coste }}</li>
              <li class="list-group-item"><strong>Libros: </strong>  
                @foreach ($pedido->productos as $producto)
                <div class="card-header"><strong>Código :</strong> {{ $producto->codigo }}</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nombre :{{ $producto->nombre }}</li>
                    </ul>  
                    <div ></div>    
                @endforeach
              </li>
          </ul>
          <a href=" {{ route('pedido.edit', $pedido->id) }}" class="btn btn-dark text-white mb-4">Editar pedido</a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>