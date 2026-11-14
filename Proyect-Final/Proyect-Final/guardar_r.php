<?php

session_start();

require "conexion.php";

// Comprobar que el usuario haya iniciado sesión
if (!isset($_SESSION["id"])) {
    header("Location: index.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nombre = $_POST["nombre"];
    $fechaNacimiento = $_POST["fechaNacimiento"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];

    $jojo = $_POST["jojo_favorito"];
    $motivoJojo = $_POST["motivo_jojo"];

    $parte = $_POST["parte_favorita"];
    $motivoParte = $_POST["motivo_parte"];

    $fan = isset($_POST["fan"]) ? 1 : 0;
    $notificaciones = $_POST["notificaciones"];

    $id_cliente = $_SESSION["id"];

    try {

        $consulta = $conexionbd->prepare(
            "INSERT INTO d_personales
            (id_clientes, nombre, fecha_nacimiento, correo, tel, jojo_fav, por1, parte_fav, por2, pb, notificaciones)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
        );

        $consulta->execute([
            $id_cliente,
            $nombre,
            $fechaNacimiento,
            $email,
            $telefono,
            $jojo,
            $motivoJojo,
            $parte,
            $motivoParte,
            $fan,
            $notificaciones
        ]);

        header("Location: registro.php?estado=ok");
        exit;

    } catch (PDOException $e) {

        die("Error al guardar la inscripción: " . $e->getMessage());

    }

}

?>