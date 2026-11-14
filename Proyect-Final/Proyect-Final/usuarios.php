<?php

session_start();

require "conexion.php";

// Comprobar que sea administrador
if (!isset($_SESSION["usuario"]) || $_SESSION["rol"] !== "admin") {
    header("Location: panel.php");
    exit;
}

// Buscar todos los usuarios
$consulta = $conexionbd->query("SELECT id, usuario, rol FROM cliente");

$usuarios = $consulta->fetchAll();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administrar usuarios</title>
    <link rel="stylesheet" href="usuarios.css">
</head>
<body>

    <h1>Usuarios registrados</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>

       <?php foreach ($usuarios as $fila) { ?>

    <tr>
        <td><?php echo $fila["id"]; ?></td>
        <td><?php echo $fila["usuario"]; ?></td>
        <td><?php echo $fila["rol"]; ?></td>

        <td>
            <a href="edit_us.php?id=<?php echo $fila["id"]; ?>" class="btn">
                Editar
            </a>

            <a href="eliminar_us.php?id=<?php echo $fila["id"]; ?>" class="btn"
               onclick="return confirm('¿Estás seguro de que querés eliminar este usuario?');">
                Eliminar
            </a>
        </td>
    </tr>

<?php } ?>

    </table>

    <br>

    <a href="panel.php" class="btn">Volver al inicio</a>

</body>
</html>