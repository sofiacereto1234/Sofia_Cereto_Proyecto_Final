
<?php

session_start();

require "conexion.php";

// Comprobar que sea administrador
if (!isset($_SESSION["usuario"]) || $_SESSION["rol"] !== "admin") {
    header("Location: panel.php");
    exit;
}

// Recibir el ID del usuario
$id = $_GET["id"];

// Evitar que el administrador se elimine a sí mismo
if ($id == $_SESSION["id"]) {
    die("No podés eliminar tu propia cuenta.");
}

// Eliminar el usuario de la base de datos
$consulta = $conexionbd->prepare("DELETE FROM cliente WHERE id = ?");
$consulta->execute([$id]);

// Volver a la lista de usuarios
header("Location: usuarios.php");
exit;

?>

