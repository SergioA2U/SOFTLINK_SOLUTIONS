<?php require 'php/check_session.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos y Servicios - SOFTLINK SOLUTIONS</title>
    <link rel="stylesheet" href="Inicio.css">
    <link rel="stylesheet" href="productos.css">
    <link rel="icon" href="images/logo-blanco.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <a href="index.php" class="navbar-logo">
            <img src="images/logo-blanco.png" alt="Softlink Solutions Logo">
        </a>
        <ul class="navbar-menu">
            <li><a href="Inicio.php">Inicio</a></li>
            <li><a href="productos.php" class="active">Servicios</a></li>
            <li style="color: white; font-weight: bold; padding: 10px 22px;">¡Hola, <?php echo htmlspecialchars($_SESSION['username']); ?>!</li>
            <li><a href="php/logout.php" style="background-color: #d9534f; color: white; padding: 10px 22px; border-radius: 18px;">Cerrar Sesión</a></li>
        </ul>
    </nav>

    <main class="products-main">
        <section id="services-list-page">
            <div class="services-header">
                <h1>Nuestros Servicios</h1>
                <p>Soluciones tecnológicas diseñadas para impulsar el crecimiento y la transformación digital de tu empresa.</p>
            </div>
            <div class="filters-container">
                <div class="search-bar">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" id="searchInput" placeholder="Buscar servicios...">
                </div>
                <div class="promo-toggle">
                    <label for="promoSwitch">Solo Promociones</label>
                    <label class="switch">
                        <input type="checkbox" id="promoSwitch">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
            <div id="services-grid" class="services-grid"></div>
            <div class="cta-banner">
                <h2>¿No encuentras lo que buscas?</h2>
                <p>Contáctanos para una consulta personalizada y diseñemos la solución perfecta para tu empresa.</p>
                <button class="cta-button">Contactar Especialista</button>
            </div>
        </section>

        <section id="service-detail-page" class="hidden">
            <div class="detail-container">
                <button id="back-to-services" class="back-button">← Volver a Servicios</button>
                <div class="detail-content">
                    <div class="detail-image-container">
                        <img id="detail-img" src="" alt="Imagen del Servicio">
                    </div>
                    <div class="detail-info">
                        <h1 id="detail-title"></h1>
                        <p class="detail-price" id="detail-price"></p>
                        <h3>Descripción del Servicio</h3>
                        <p id="detail-long-desc"></p>
                        <div class="features-box">
                            <h4>Características Destacadas</h4>
                            <ul id="detail-features"></ul>
                        </div>
                        <button class="cta-button primary">Solicitar Cotización</button>
                    </div>
                </div>
            </div>
            <div id="related-services-container" class="related-services-container">
                <h2>También te podría interesar</h2>
                <div id="related-services-grid" class="services-grid"></div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-column">
                <h4>Contactar</h4>
                <p><i class="fa-solid fa-envelope"></i> mail@softlink.com</p>
                <p><i class="fa-solid fa-phone"></i> +57 123 456 789</p>
            </div>
            <div class="footer-column">
                <h4>Enlaces rápidos</h4>
                <ul>
                    <li><a href="#">Iniciar sesión</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Administrador</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Síguenos</h4>
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2025 Softlink Solutions. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="productos.js"></script>
</body>
</html>