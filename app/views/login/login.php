<link rel="stylesheet" href="/css/login.css">
<div class="login-container">
    <div class="logo-container">
        <img src="/img/logo-sena.png" alt="Logo SENA">
    </div>

    <h2>Inicio de sesión</h2>

    <form action="/login/init" method="post">
        <div class="form-group">
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="email" required>
        </div>

        <div class="form-group">
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="password" required>
        </div>
        <a href="log.html">
            <button type="submit">
                Ingresar
            </button>
        </a>
    </form>
</div>