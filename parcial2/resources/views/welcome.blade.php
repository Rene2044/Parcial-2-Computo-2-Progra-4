<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso | Sistema de Ventas Automotrices</title>


</head>
<body>
    <div class="login-container">
        <form action="{{ route('login') }}" method="POST" class="login-form">

            @csrf <h2>Bienvenido</h2>
            <p>Acceso al panel de gestion la Empresa La Despensa de Don Juan</p>

            <div class="input-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" placeholder="usuario@empresa.com" required>
            </div>

            <div class="input-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="••••••••" required>
            </div>

            <button type="submit" class="login-btn">Ingresar al Sistema</button>

            <div class="footer-links">
                <a href="#">¿Olvidaste tu contraseña?</a>
            </div>
        </form>
    </div>
</body>
</html>
