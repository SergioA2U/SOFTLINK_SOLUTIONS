<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia sesión - SOFTLINK SOLUTIONS</title>
    <link rel="stylesheet" href="Inicio.css">
    <link rel="stylesheet" href="iniciar sesión.css">
    <link rel="icon" href="images/logo-blanco.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <a href="index.php" class="navbar-logo">
            <img src="images/logo-blanco.png" alt="Softlink Solutions Logo">
        </a>
        <ul class="navbar-menu">
            <li><a href="Inicio.php">Inicio</a></li>
            <li><a href="productos.php">Servicios</a></li>
            <li><a href="iniciar sesión.php" class="active">Iniciar Sesión</a></li>
            <li><a href="registro.php">Registrarse</a></li>
        </ul>
    </nav>

    <div class="container">
        <h2>Inicio de sesión</h2>

        <?php
        if (isset($_GET['error'])) {
            $error_message = '';
            if ($_GET['error'] == 'invalid_credentials') {
                $error_message = 'El usuario o la contraseña son incorrectos.';
            } elseif ($_GET['error'] == 'access_denied') {
                $error_message = 'Debes iniciar sesión para ver los servicios.';
            }
            echo '<p style="color: red; background-color: #ffdddd; border: 1px solid red; padding: 10px; border-radius: 5px; text-align: center; margin-bottom: 15px;">' . $error_message . '</p>';
        }
        ?>

        <form action="php/login_usuario.php" method="POST">
            <label for="username">Correo o nombre de usuario</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" class="btn-ingresar">Ingresar</button>
            <div>
                <button type="button" class="btn-google">
                    <img src="https://www.svgrepo.com/show/355037/google.svg" alt="Google logo">
                    Continuar con Google
                </button>
            </div>
            <div class="links-extra">
                <p><a href="#">¿Olvidaste tu cuenta?</a></p>
                <p>¿Aún no tienes una cuenta? <a href="registro.php">Regístrate</a></p>
            </div>
        </form>
    </div>
</body>
</html>