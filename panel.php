
<?php
// Inicia la sesión
session_start();

// Guardia: si no hay sesión, no puede entrar
if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link rel="stylesheet" href="panel.css">
</head>

<body>
    <header id="encabezado">
        <h1>JOJO'S BIZARRE ADVENTURE</h1>
        <a href="logout.php" class="btn">Salir</a>
    </header>

    <main id="panel">

        <div class="bienvenida">
            <h2>¡Bienvenido, <?php echo $_SESSION["usuario"]; ?>!</h2>
            <p>Iniciaste sesión correctamente.</p>
        </div>

        <h2 class="titulo">MI CUENTA</h2>


       <?php if ($_SESSION["rol"] === "admin") { ?>

    <h2 class="titulo">ADMINISTRACIÓN</h2>

    <section class="cajas">

        <div class="caja">
            <h3>USUARIOS</h3>
            <p>Administrá las cuentas registradas.</p>
            <a href="usuarios.php" class="btn">Administrar usuarios</a>
        </div>

    </section> 

   <?php } ?>

     <!-- PÁGINA PRINCIPAL -->
        <h2 class="titulo">PÁGINA PRINCIPAL</h2>

        <section class="cajas">

            <div class="caja">

                <h3>JOJO'S BIZARRE ADVENTURE</h3>

                <p>Volvé a explorar el mundo de JoJo's Bizarre Adventure.</p>

                <a href="pagina.php" class="btn">Volver a JoJo's</a>

            </div>

        </section>
        
       
   
    </main>

    <!-- PIE DE PÁGINA -->
    <footer>
        <p>JOJO'S BIZARRE ADVENTURE - Todos los derechos reservados</p>
    </footer>

</body>
</html>
