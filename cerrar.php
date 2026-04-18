<?php
session_start();

// Destruir sesión
session_unset();
session_destroy();

echo "<h3>Sesión cerrada correctamente.</h3>";
echo "<a href='login.html'>Volver al login</a>";
?>