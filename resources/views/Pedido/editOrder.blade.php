<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Producto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  @auth
  <div id="app">
    <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h3>Editar pedido</h3>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route('pedido.update', $pedido) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="recordatorio" class="form-label">Nombre del pedido:</label>
                        <input type="text" class="form-control" id="recordatorio" name="recordatorio" value="{{ $pedido->recordatorio }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha: </label>
                        <input type="date" class="form-control" id="fecha" name="fecha" value="{{ $pedido->fecha }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="fecha" class="form-label"> <strong>Coste: {{ $pedido->coste }} </strong> </label>
                    </div>
                    <button type="submit" class="btn btn-dark text-white mb-4">Guardar pedido</button>
                  </form>
                    <div class="mb-3">
                        <label for="fecha" class="form-label"><h3>Libros en el pedido:</h3></label>
                        @if (!$productos->isEmpty())
                            @foreach ($productos as $producto)
                            <ul class="list-group list-group-flush">
                              <div class="row">
                                  <div class="col-sm-10">
                                      <li class="list-group-item"><strong>Nombre:</strong> {{ $producto->nombre }}</li>
                                      <li class="list-group-item"><strong>Precio:</strong> {{ $producto->precio }}</li>
                                  </div>
                                  <div class="col-sm-2">
                                    <form method="POST" action="{{ route('pedido.remove', [$pedido->id, $producto->id]) }}">
                                        @csrf
                                        <button type="submit" class="btn btn-link p-0 m-0 border-0 bg-transparent">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-square" viewBox="0 0 16 16">
                                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8"/>
                                          </svg>
                                        </button>
                                    </form>
                                </div>
                              </div>
                          </ul>
                            @endforeach
                        @else
                            <p>No hay productos en este pedido.</p>
                        @endif
                    </div>
                <div class="mb-3">
                  <label for="fecha" class="form-label"><h3>Añadir libros al pedido:</h3> </label>
                  @foreach ($todosProductos as $libro)
                      <ul class="list-group list-group-flush">
                          <div class="row">
                              <div class="col-sm-10">
                                  <li class="list-group-item"><strong>Nombre:</strong> {{ $libro->nombre }}</li>
                                  <li class="list-group-item"><strong>Precio:</strong> {{ $libro->precio }}</li>
                              </div>
                              <div class="col-sm-2">
                                <form method="POST" action="{{ route('pedido.add', [$pedido->id, $libro->id]) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-link p-0 m-0 border-0 bg-transparent">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                        </svg>  
                                    </button>
                                </form>
                            </div>
                          </div>
                      </ul>
                  @endforeach
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  @endauth
   
</body>
</html>