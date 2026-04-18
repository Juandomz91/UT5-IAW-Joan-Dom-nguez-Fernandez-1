<?php
session_start();

// Verificar si hay sesión activa
if (!isset($_SESSION['usuario'])) {
    echo "<h3>Acceso denegado. Debes iniciar sesión.</h3>";
    echo "<a href='login.html'>Ir al login</a>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel</title>
</head>
<body>

<h2>Panel de usuario</h2>
<p>Bienvenido, <?php echo $_SESSION['usuario']; ?></p>

<form action="cerrar.php" method="POST">
    <input type="submit" value="Cerrar sesión">
</form>

</body>
</html>