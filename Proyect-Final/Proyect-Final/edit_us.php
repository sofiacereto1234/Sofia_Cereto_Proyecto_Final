
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

// Buscar los datos del usuario
$consulta = $conexionbd->prepare("SELECT * FROM cliente WHERE id = ?");
$consulta->execute([$id]);

$usuario = $consulta->fetch();

// Comprobar si existe el usuario
if (!$usuario) {
    die("El usuario no existe.");
}

// Comprobar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nuevoUsuario = $_POST["usuario"];
    $nuevoRol = $_POST["rol"];

    // Actualizar los datos en la base de datos
    $consulta = $conexionbd->prepare(
        "UPDATE cliente SET usuario = ?, rol = ? WHERE id = ?"
    );

    $consulta->execute([$nuevoUsuario, $nuevoRol, $id]);

    // Volver a la lista de usuarios
    header("Location: usuarios.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar usuario</title>
    <link rel="stylesheet" href="edit_us.css">
</head>
<body>

    <h1>Editar usuario</h1>

    <form action="" method="POST">

        <label>Nombre de usuario:</label>
        <input type="text" name="usuario"
        value="<?php echo $usuario["usuario"]; ?>" required>

        <br><br>

        <label>Rol:</label>
        <select name="rol">
            <option value="usuario"
            <?php if ($usuario["rol"] == "usuario") echo "selected"; ?>>
                Usuario
            </option>

            <option value="admin"
            <?php if ($usuario["rol"] == "admin") echo "selected"; ?>>
                Administrador
            </option>
        </select>

        <br><br>

        <button type="submit">Guardar cambios</button>

    </form>

    <br>

    <a href="panel.php" class="btn">Volver al inicio</a>

</body>
</html>
