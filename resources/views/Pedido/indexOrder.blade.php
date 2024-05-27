<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventario Pedidos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header text-center bg-dark text-white">
            <div class="text-align-center">
              <h2>Inventario de pedidos</h2>
            </div>
          </div>
          <div class="card-body">
            @foreach ($pedidos as $pedido)
            <h5 class="card-title" > <h3> {{ $pedido->recordatorio }} </h3>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>fecha :</strong> {{ $pedido->fecha }}</li>
                    <li class="list-group-item"><strong>coste:</strong> {{ $pedido->coste }}</li>
                    <div class="row">
                      <div class="col-sm-6 text-center">
                        <form method="POST" action="{{ route('pedido.destroy', $pedido->id) }}">
                          @csrf
                          @method('DELETE')
                          <button type="submit"class="btn btn-dark text-white mb-4">Borrar pedido</button>
                        </form>
                      </div>
                      <div class="col-sm-6 text-center">
                        <a href=" {{ route('pedido.show', $pedido->id ) }}" class="btn btn-dark text-white mb-4">Ver pedido</a>
                      </div>
                    </div>
                </ul>      
            @endforeach
              <div>
                <div class="text-center">
                    <a href=" {{ route('pedido.create') }}" class="btn btn-dark text-white mb-4">Crear Pedido</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>