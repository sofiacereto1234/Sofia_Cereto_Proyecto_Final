<?php

session_start();

if (isset($_SESSION["usuario"])) {
    header("Location:");
    exit;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100 " >

    <div class="card shadow-sm" style="width: 350px; background-color: rgb(103, 175, 172);">
        <div class="card-body p-4">
            <h1 class="h4 text-center mb-4">Iniciar sesión</h1>

            <?php if (isset($_GET["error"])) { ?>
                <div class="alert alert-danger py-2 text-center">
                    Usuario o contraseña incorrectos
                </div>
            <?php } ?>

            
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" name="usuario" id="usuario" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="clave" class="form-label">Contraseña</label>
                    <input type="password" name="clave" id="clave" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary w-200" style="background-color: rgb(137, 103, 175);">Entrar</button>
            </form>

            <hr>
            <a href="crear_us.php" class="btn btn-outline-secondary w-100" style="background-color: rgb(168, 50, 90); color:rgb(66, 14, 31);">Crear usuario</a>
        </div>
    </div>

</body>
</html>
