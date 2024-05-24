<!-- public/formulario-pedido.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Pedido</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Crear Pedido</h1>

        <form action="/pedidos" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>

            <div class="form-group">
                <label for="unidades">Unidades</label>
                <input type="number" class="form-control" id="unidades" name="unidades" required>
            </div>

            <div class="form-group">
                <label for="coste">Coste</label>
                <input type="number" step="0.01" class="form-control" id="coste" name="coste" required>
            </div>

            <div class="form-group">
                <label for="recordatorio">Recordatorio</label>
                <input type="text" class="form-control" id="recordatorio" name="recordatorio">
            </div>

            <button type="submit" class="btn btn-primary">Crear Pedido</button>
        </form>
    </div>
</body>
</html>