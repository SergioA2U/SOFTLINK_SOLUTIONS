<?php
$archivo_bd = 'usuarios.json';
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];

if (empty($nombre) || empty($correo) || empty($usuario) || empty($password)) {
    die("Error: Todos los campos son obligatorios. <a href='../registro.php'>Volver</a>");
}

$usuarios = json_decode(file_get_contents($archivo_bd), true);

foreach ($usuarios as $user) {
    if ($user['correo'] === $correo) {
        die("Error: El correo electrónico ya está registrado. <a href='../registro.php'>Inténtalo de nuevo</a>");
    }
    if ($user['usuario'] === $usuario) {
        die("Error: El nombre de usuario ya existe. <a href='../registro.php'>Inténtalo de nuevo</a>");
    }
}

$password_hashed = password_hash($password, PASSWORD_DEFAULT);

$nuevo_usuario = [
    'id' => count($usuarios) + 1,
    'nombre' => $nombre,
    'correo' => $correo,
    'usuario' => $usuario,
    'password' => $password_hashed
];

$usuarios[] = $nuevo_usuario;
file_put_contents($archivo_bd, json_encode($usuarios, JSON_PRETTY_PRINT));
header("Location: ../iniciar sesión.php");
exit();
?>