<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro al Club</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="encabezado">
        <img src="img/logo.webp" >
        <button class="btn"><a href="index.html">Inicio</a></button>
        <button class="btn"><a href="registro.html">Registrarse</a></button>
        <button class="btn"><a href="https://jojo.fandom.com/es/wiki/Categor%C3%ADa:Personajes" target="_blank">Personajes</a></button>
        <button class="btn"><a href="https://jojo.fandom.com/es/wiki/Lista_de_referencias_culturales_en_JoJo%27s_Bizarre_Adventure" target="_blank">Referencias</a></button>
    </div>
    <div id="formu">
        <h1>Formulario de Registro</h1>
        <p>Completa todos los campos para crear tu cuenta del club de fans de JOJOs...</p>
    </div>

        <form action="#" method="POST" id="registroForm">
            <fieldset>
                <legend>Datos Personales</legend>

                <div>
                    <label for="nombre">Nombre de usuario</label>
                    <input type="text" name="nombre" placeholder="usuario" required>
                </div>

                <div>
                    <label for="password">Contraseña </label>
                    <input type="password" id="password" name="password" placeholder="Mínimo 8 caracteres" minlength="8" required>
                </div>

                <div>
                    <label for="fechaNacimiento">Fecha de nacimiento</label>
                    <input type="date" name="fechaNacimiento">
                </div>

                <div>
                    <label for="email">Correo electrónico </label>
                    <input type="email" name="email" placeholder="Ej: juan@correo.com" required>
                </div>
 
                <div>
                    <label for="telefono">Teléfono</label>
                    <input type="tel" name="telefono" placeholder="Ej: +54 11 1234-5678" required>
                </div>

                <div>
                    <h3 for="jojo">seleccione su JOJO favorito </h3>
                    <select name="Curso" required>
                        <option value="">Selecciona un Curso...</option>
                        <option value="1">Jonathan Joestar</option>
                        <option value="2">Joseph Joestar </option>
                        <option value="3">Jotaro Kujo</option>
                        <option value="4">Josuke Higashikata</option>
                        <option value="5">Giorno Giovanna</option>
                        <option value="6">Jolyne Cujoh</option>
                        <option value="7">Johnny Joestar</option>
                        <option value="8">Josuke Higashikata -parte8-</option>
                        <option value="4">Jodio Joestar</option>
                    </select>
                </div>

                <div>
                    <h3 for="comentarios">¿Por que es su JOJO favorito?</h3>
                    <textarea id="comentarios" name="comentarios" rows="4" placeholder="Escribe aquí..."></textarea>
            </div>
            
            <div>
                <label>
                    <input type="checkbox" name="fan">
                    Viste Phantom Blood???
                </label>
            </div>

            <div>
                <h3>¿Desea recibir notificaciones?</h3>
                <button id="si">Si</button>
                <button id="no">No</button>
            </div>

            <div>
                <label>
                    <input type="checkbox" name="terminos" required>
                    Acepto los <a href="https://www.argentina.gob.ar/terminos-y-condiciones" target="_blank">términos y condiciones</a> *
                </label>
            </div>
            
            <div>
                <button type="submit">Registrarse</button>
                <button type="reset">Limpiar formulario</button>
            </div>
            </fieldset>
        </form>


    <footer>Pagina realizada por Sofia Cereto de 4°B</footer>
</body>
</html>