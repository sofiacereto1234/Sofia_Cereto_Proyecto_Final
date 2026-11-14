<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro al Club</title>
    <link rel="stylesheet" href="registro.css">
</head>
<body>
    <div id="encabezado">
        <img src="img/logo.webp" >
        <button class="btn"><a href="pagina.php">Inicio</a></button>
        <button class="btn"><a href="registro.php">Registrarse</a></button>
        <button class="btn"><a href="https://jojo.fandom.com/es/wiki/Categor%C3%ADa:Personajes" target="_blank">Personajes</a></button>
        <button class="btn"><a href="https://jojo.fandom.com/es/wiki/Lista_de_referencias_culturales_en_JoJo%27s_Bizarre_Adventure" target="_blank">Referencias</a></button>
    </div>
    <div id="formu">
        <h1>¡¡Queremos conocerte mejor!!</h1>
        <p>Completa los campos que creas necesarios para que te podamos conocer mejor...</p>
    </div>

        <form action="guardar_r.php" method="POST" id="registroForm">
            <fieldset>
                <legend>Datos Personales</legend>

                <div>
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" placeholder="usuario">
                </div>

                <div>
                    <label for="fechaNacimiento">Fecha de nacimiento</label>
                    <input type="date" name="fechaNacimiento">
                </div>

                <div>
                    <label for="email">Correo electrónico </label>
                    <input type="email" name="email" placeholder="Ej: juan@correo.com" >
                </div>
 
                <div>
                    <label for="telefono">Teléfono</label>
                    <input type="tel" name="telefono" placeholder="Ej: +54 11 1234-5678" >
                </div>

                <div>
                    <h3 for="jojo">seleccione su JOJO favorito </h3>
                    <select name="jojo_favorito">
                        <option value="">Selecciona uno...</option>
                        <option value="1">Jonathan Joestar</option>
                        <option value="2">Joseph Joestar </option>
                        <option value="3">Jotaro Kujo</option>
                        <option value="4">Josuke Higashikata</option>
                        <option value="5">Giorno Giovanna</option>
                        <option value="6">Jolyne Cujoh</option>
                        <option value="7">Johnny Joestar</option>
                        <option value="8">Josuke Higashikata -parte8-</option>
                        <option value="9">Jodio Joestar</option>
                    </select>
                </div>

                <div>
                    <h3 for="comentarios">¿Por que es su JOJO favorito?</h3>
                    <textarea id="motivo_jojo" name="motivo_jojo" rows="4" placeholder="Escribe aquí..."></textarea>
                </div>

            <div>
                    <h3 for="jojo">seleccione tu parte favorita </h3>
                    <select name="parte_favorita">
                        <option value="">Selecciona uno...</option>
                        <option value="1">Phantom Blood</option>
                        <option value="2">Battle Tendency</option>
                        <option value="3">Stardust Crusaders</option>
                        <option value="4">Diamond Is Unbreakable</option>
                        <option value="5">Vento Aureo</option>
                        <option value="6">Stone Ocean</option>
                        <option value="7">Steel Ball Run</option>
                        <option value="8">JoJolion</option>
                        <option value="9">The JOJOLands</option>
                    </select>
                </div>

                 <div>
                    <h3 for="comentarios">¿Por que es tu parte favorita?</h3>
                    <textarea id="motivo_parte" name="motivo_parte" rows="4" placeholder="Escribe aquí..."></textarea>
                </div>
            
            <div>
                <label>
                    <input type="checkbox" name="fan">
                    Viste Phantom Blood???
                </label>
            </div>

            <div>
                <h3>¿Desea recibir notificaciones?</h3>
                <label>
    <input type="radio" name="notificaciones" value="1" required> Sí
</label>

<label>
    <input type="radio" name="notificaciones" value="0"> No
</label>
            </div>

            <div>
                <label>
                    <input type="checkbox" name="terminos" >
                    Acepto los <a href="https://www.argentina.gob.ar/terminos-y-condiciones" target="_blank">términos y condiciones</a> *
                </label>
            </div>
            
            <div>
                <button type="submit">Completar</button>
                <button type="reset">Limpiar formulario</button>
            </div>
            </fieldset>
        </form>


    <footer>Pagina realizada por Sofia Cereto de 4°B</footer>
</body>
</html>