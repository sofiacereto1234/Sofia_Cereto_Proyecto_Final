<?php
// Inicia la sesión (para guardar al usuario logueado)
session_start();

// Trae la conexión a la base de datos
require "conexion.php";

// Lee los datos que envió el formulario por POST
$usuario = $_POST["usuario"];
$clave   = $_POST["clave"];

// Busca el usuario en la base. El "?" evita inyección SQL
$consulta = $conexionbd->prepare("SELECT * FROM cliente WHERE usuario = ?");
$consulta->execute([$usuario]);
$fila = $consulta->fetch(); // primera fila encontrada, o false

// Validación: existe el usuario y la contraseña coincide
if ($fila && password_verify($clave, $fila["clave"])) {
    $_SESSION["usuario"] = $fila["usuario"];
    $_SESSION["id"] = $fila["id"];
    $_SESSION["rol"] = $fila["rol"];

    header("Location: panel.php");
    exit;
}

// Si falló: vuelve al login con ?error=1
header("Location: index.php?error=1");
?>