<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/styleIndex.css">
    <title>FORMULARIO DE REGISTRO DE USUARIOS</title>
</head>
<body>
    <div id="contenedor">
        <header class="encabezado">
            <div class="ancho">
                <div class="logo">
                    <p>TodoVehículos</p>
                </div> 
                <nav>
                    <ul>
                        <li><a href="../usuarios/logout.php">Salir</a></li>
                    </ul>
                </nav>
            </div>
            
        </header>
        <div id="contenido">
            <div id="section">
                <center>
                    <form class="form-register" action="../../controllers/UsuarioControlador.php">
                        <h4 class="titleform">Registro de Usuario</h4>
                        <input class="controls"  type="number" name="cedula" id="cedula" placeholder="ingrese el numero de cédula" required>
                        <input class="controls"  type="password" name="clave" id="clave" placeholder="ingrese el password" required>
                        <input class="controls"  type="text" name="nombre" id="nombre" placeholder="ingrese el nombre" required>
                        <input class="controls"  type="text" name="apellido" id="apellido" placeholder="ingrese el apellido" required>
                        <input class="controls"  type="text" name="genero" id="genero" placeholder="ingrese el género" required>
                        <input class="controls"  type="email" name="correo" id="correo" placeholder="ingrese el correo" required>
                        <input class="btn-buttons"  type="submit" name="accion" value="Registrar">
                        <input class="btn-buttons"  type="reset" value="Nuevo">
                    </form>
                    <span style= "color: red;"><?= @$_REQUEST["msj"]?></span>
                </center>
            </div>
        </div>
        <div id="footer">footer</div>
    </div>
    


</body>
</html>