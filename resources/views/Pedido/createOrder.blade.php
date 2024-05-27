<!-- public/formulario-pedido.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Pedido</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div id="app">
        <div class="container">
            <h1>Crear Pedido</h1>
    
            <form method="POST" action="{{ route('pedido.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
                <div class="form-group">
                    <label for="recordatorio">Nombre del Pedido</label>
                    <input type="text" class="form-control" id="recordatorio" name="recordatorio">
                </div>
                <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" required>
                </div>
                <button type="submit" class="btn btn-dark text-white mb-4">Añadir libros</button>
            </form>
        </div>
    </div>
</body>
</html>