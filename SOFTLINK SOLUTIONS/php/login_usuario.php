<?php
session_start();
$archivo_bd = 'usuarios.json';
$username = $_POST['username'];
$password = $_POST['password'];
$usuarios = json_decode(file_get_contents($archivo_bd), true);

$usuario_encontrado = null;
foreach ($usuarios as $user) {
    if (($user['correo'] === $username || $user['usuario'] === $username)) {
        $usuario_encontrado = $user;
        break;
    }
}

if ($usuario_encontrado && password_verify($password, $usuario_encontrado['password'])) {
    $_SESSION['user_id'] = $usuario_encontrado['id'];
    $_SESSION['username'] = $usuario_encontrado['usuario'];
    
    
    header("Location: ../productos.php"); 
    exit();
} else {    
    header("Location: ../iniciar sesión.php?error=invalid_credentials");
    exit();
}
?>