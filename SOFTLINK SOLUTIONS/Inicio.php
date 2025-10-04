<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio - SOFTLINK SOLUTIONS</title>
    <link rel="stylesheet" href="Inicio.css" />
    <link rel="icon" href="images/logo-blanco.png" type="image/png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body>
    <nav class="navbar">
        <a href="index.php" class="navbar-logo">
            <img src="images/logo-blanco.png" alt="Softlink Solutions" />
        </a>
        <ul class="navbar-menu">
            <li><a href="Inicio.php" class="active">Inicio</a></li>
            <li><a href="productos.php">Servicios</a></li>
            
            <?php if (isset($_SESSION['username'])): ?>
                <li style="color: white; font-weight: bold;">¡Hola, <?php echo htmlspecialchars($_SESSION['username']); ?>!</li>
                <li><a href="php/logout.php" class="btn-registrarse">Cerrar Sesión</a></li>
            <?php else: ?>
                <li><a href="iniciar sesión.php">Iniciar Sesión</a></li>
                <li><a href="registro.php" class="btn-registrarse">Registrarse</a></li>
            <?php endif; ?>
        </ul>
    </nav>

    <section class="hero">
        <div class="container">
            <h1 class="hero-title">
                Impulsamos&nbsp;tu negocio<br />
                con soluciones tecnológicas<br />
                inteligentes
            </h1>
            <a href="productos.php" class="btn btn-hero">Conoce nuestros servicios</a>
        </div>
    </section>

    <section class="about">
        <div class="container about-inner">
            <h2>¿Quiénes somos?</h2>
            <p>
                En Softlink Solutions, nos especializamos en brindar soluciones tecnológicas
                que impulsan el crecimiento y la eficiencia de tu negocio.
            </p>
            <a href="productos.php" class="btn btn-outline">Servicios</a>
        </div>
    </section>

    <footer class="footer">
        <div class="container footer-grid">
            <div class="footer-col">
                <h4>Contactar</h4>
                <p><i class="fa-solid fa-envelope"></i> <a href="mailto:mail@softlink.com">mail@softlink.com</a></p>
                <p><i class="fa-solid fa-phone"></i> +57 123 456 789</p>
            </div>
            <div class="footer-col">
                <h4>Enlaces rápidos</h4>
                <ul>
                    <li><a href="iniciar sesión.php">Iniciar sesión</a></li>
                    <li><a href="productos.php">Servicios</a></li>
                    <li><a href="#">Administrador</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Síguenos</h4>
                <div class="socials">
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2025 Softlink Solutions. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>