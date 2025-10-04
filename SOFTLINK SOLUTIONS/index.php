<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOFTLINK SOLUTIONS</title>
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="images/logo-blanco.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <nav class="navbar">
        <a href="index.php" class="navbar-logo">
            <img src="images/logo-blanco.png">
        </a>
        <ul class="navbar-menu">
            <li><a href="Inicio.php" class="active">Inicio</a></li>
            <li><a href="productos.php">Servicios</a></li>

            <?php if (isset($_SESSION['username'])): ?>
                <li style="color: white; font-weight: bold; padding: 10px 15px;">¡Hola, <?php echo htmlspecialchars($_SESSION['username']); ?>!</li>
                <li><a href="php/logout.php" style="background-color: #d9534f; color: white;">Cerrar Sesión</a></li>
            <?php else: ?>
                <li><a href="iniciar sesión.php">Iniciar Sesión</a></li>
                <li><a href="registro.php">Registrarse</a></li>
            <?php endif; ?>
        </ul>
    </nav>

    </body>
</html>