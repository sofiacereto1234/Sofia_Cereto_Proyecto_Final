<?php

session_start();

if (isset($_SESSION["usuario"])) {
    header("Location: panel.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link href="index.css" rel="stylesheet">
</head>

<body class="login-body">

    <main class="login-card">

        <div class="login-logo">
            <span>JOJO'S</span>
            <p>BIZARRE ADVENTURE</p>
        </div>

        <div class="login-content">
            <h1>INICIAR SESIÓN</h1>
            <p class="login-subtitle">Ingresá a tu cuenta del club</p>

            <?php if (isset($_GET["error"])) { ?>
                <div class="login-error">
                    Usuario o contraseña incorrectos
                </div>
            <?php } ?>

            <form action="login.php" method="POST">

                <div class="login-field">
                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario" id="usuario" required>
                </div>

                <div class="login-field">
                    <label for="clave">Contraseña</label>
                    <input type="password" name="clave" id="clave" required>
                </div>

                <button type="submit" class="login-button">ENTRAR</button>

            </form>

            <div class="login-divider"></div>

            <p class="login-register-text">¿Todavía no tenés una cuenta?</p>

            <a href="crear_us.php" class="register-button">
                CREAR USUARIO
            </a>
        </div>

    </main>

</body>
</html>
