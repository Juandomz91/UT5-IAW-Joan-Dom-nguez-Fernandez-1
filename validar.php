<?php
session_start();

// Credenciales correctas
$usuario_correcto = "admin";
$password_correcta = "1234";

// Recoger datos de forma segura
$usuario = htmlspecialchars($_POST['usuario'] ?? '');
$password = htmlspecialchars($_POST['password'] ?? '');

// Comprobar campos vacíos
if (empty($usuario) || empty($password)) {
    echo "<h3>Error: Todos los campos son obligatorios.</h3>";
    echo "<a href='login.html'>Volver</a>";
    exit;
}

// Validar credenciales
if ($usuario === $usuario_correcto && $password === $password_correcta) {
    
    // Crear sesión
    $_SESSION['usuario'] = $usuario;

    echo "<h3>Bienvenido, $usuario</h3>";
    echo "<a href='panel.php'>Ir al panel</a>";

} else {
    echo "<h3>Error: Usuario o contraseña incorrectos.</h3>";
    echo "<a href='login.html'>Volver</a>";
}
?>