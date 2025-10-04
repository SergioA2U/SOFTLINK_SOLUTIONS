<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Registro de Usuario</title>
  <link rel="stylesheet" href="registro.css" />
  <link rel="stylesheet" href="Inicio.css"> </head>
<body>
  <nav class="navbar">
    <a href="index.php" class="navbar-logo">
      <img src="images/logo-blanco.png">
    </a>
    <ul class="navbar-menu">
        <li><a href="Inicio.php">Inicio</a></li>
        <li><a href="productos.php">Servicios</a></li>
        
        <?php if (isset($_SESSION['username'])): ?>
            <li style="color: white; font-weight: bold;">¡Hola, <?php echo htmlspecialchars($_SESSION['username']); ?>!</li>
            <li><a href="php/logout.php">Cerrar Sesión</a></li>
        <?php else: ?>
            <li><a href="iniciar sesión.php">Iniciar Sesión</a></li>
            <li><a href="registro.php" class="active">Registrarse</a></li>
        <?php endif; ?>
    </ul>
  </nav>

  <main class="page">
    <section class="form-container">
      <div class="card">
        <h2>Registro</h2>
        <form id="registroForm" class="form" action="php/registro_usuario.php" method="POST">
          <label for="nombre">Nombre</label>
          <input id="nombre" name="nombre" type="text" required />
          <label for="correo">Correo</label>
          <input id="correo" name="correo" type="email" required />
          <label for="usuario">Usuario</label>
          <input id="usuario" name="usuario" type="text" required />
          <label for="password">Contraseña</label>
          <input id="password" name="password" type="password" required />
          <button type="submit" class="btn-primary">Registrarse</button>
        </form>
        <p class="help">
          ¿Ya tienes cuenta?
          <a href="iniciar sesión.php" class="link">Inicia sesión</a>
        </p>
      </div>
    </section>
  </main>
</body>
</html>