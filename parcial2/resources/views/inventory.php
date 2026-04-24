<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Inventario</title>
</head>
<body>
    <h1>Panel de Inventario - La Despensa de Don Juan</h1>

    <form action="/vehicles" method="POST">
        @csrf
        <input type="text" name="marca" placeholder="Marca" required>
        <input type="text" name="modelo" placeholder="Modelo" required>
        <input type="number" name="precio" placeholder="Precio" step="0.01" required>
        <button type="submit">Guardar Vehículo</button>
    </form>

    <br>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Cerrar Sesión</button>
    </form>
</body>
</html>
