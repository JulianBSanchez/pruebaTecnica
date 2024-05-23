<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Producto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container mt-5">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="card">
                  <div class="card-header">
                    <h3>Crear nueva Categoria</h3>
                  </div>
                  <div class="card-body">
                    <form method="POST" action="{{ route('categoria.store') }}">
                      @csrf
                      <div class="mb-3">
                        <label for="nombre" class="form-label">Título</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="" required>
                      </div>
                      <div class="mb-3">
                        <label for="categoria" class="form-label">Género</label>
                        <select name="categoria_id" id="categoria_id" class="form-select">
                          @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="codigo" class="form-label">Código</label>
                        <input type="text" class="form-control" id="codigo" name="codigo" value="" required>
                      </div>
                      <button type="submit" class="btn btn-primary">Guardar Categoria</button>
                    </form>
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