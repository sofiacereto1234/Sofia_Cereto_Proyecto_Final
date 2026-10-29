<?php

require "conexion.php";

$error = "";
$exito = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = trim($_POST["usuario"]);
    $clave   = $_POST["clave"];
    $clave2  = $_POST["clave2"];
    if ($usuario === "" || $clave === "" || $clave2 === "") {
        $error = "Completá todos los campos.";
        } elseif ($clave !== $clave2) {
        $error = "Las contraseñas no coinciden.";
        } elseif (strlen($clave) < 8) {
        $error = "La contraseña debe tener al menos 8 caracteres.";

    } else {
        $busca = $conexionbd->prepare("SELECT id FROM usuarios WHERE usuario = ?");
        $busca->execute([$usuario]);
        if ($busca->fetch()) {
            $error = "Ese usuario ya está registrado.";
        } else {
            $hash = password_hash($clave, PASSWORD_DEFAULT);
            $alta = $conexionbd->prepare("INSERT INTO usuarios (usuario, clave) VALUES (?, ?)");
            $alta->execute([$usuario, $hash]);

            $exito = "Usuario creado correctamente.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center min-vh-100">

    <div class="card shadow-sm" style="width: 350px;">
        <div class="card-body p-4">
            <h1 class="h4 text-center mb-4">Crear usuario</h1>

            <?php if ($error !== "") { ?>
                <div class="alert alert-danger py-2 text-center"><?php echo $error; ?></div>
            <?php } ?>

            <?php if ($exito !== "") { ?>
                <div class="alert alert-success py-2 text-center">
                    <?php echo $exito; ?><br>
                    <a href="index.php">Iniciar sesión</a>
                </div>
            <?php } ?>

            <form method="POST" style="background-color: rgb(103, 175, 172);">
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" name="usuario" id="usuario" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="clave" class="form-label">Contraseña</label>
                    <input type="password" name="clave" id="clave" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="clave2" class="form-label">Repetir contraseña</label>
                    <input type="password" name="clave2" id="clave2" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary w-100" style="background-color: rgb(151, 98, 175); color:rgb(75, 41, 90);">Crear</button>
            </form>

            <hr>
            <a href="index.php" class="btn btn-outline-secondary w-100" style="background-color: rgb(168, 50, 90); color:rgb(61, 10, 27);">Volver al inicio</a>
        </div>
    </div>

</body>
</html>
