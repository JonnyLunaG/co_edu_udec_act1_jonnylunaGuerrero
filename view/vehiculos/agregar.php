<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/styleIndex.css">
    <title>AGREGAR VEHICULOS</title>
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
                        <li><a href="../index.php">Usuarios</a>
                            <ul>
                                <li><a href="../usuarios/registrar.php">Registrar</a></li>
                                <li><a href="../usuarios/listar.php">Lista Usuarios</a></li>
                            </ul>
                        </li>
                        <li><a href="../index.php">Vehiculos</a>
                            <ul>
                                <li><a href="agregar.php">Agregar</a></li>
                                <li><a href="consultar.php">Consultar</a></li>
                                <li><a href="editar.php">Editar</a></li>
                                <li><a href="eliminar.php">Eliminar</a></li>
                                <li><a href="listar.php">Lista Vehiculos</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
            
        </header>
        <div id="contenido">
            <div id="section">
                <center>
                    <form class="form-register" action="../../controllers/VehiculosControlador.php">
                        <h4 class="titleform">Agregar Vehículos</h4>
                        <input class="controls"  type="number" name="usuario_id" id="usuario_id" placeholder="ingrese el Usuario del vehículo" required>
                        <input class="controls"  type="text" name="placa" id="placa" placeholder="ingrese la placa del vehiculo" required>
                        <input class="controls"  type="text" name="marca" id="marca" placeholder="ingrese la marca" required>
                        <input class="controls"  type="text" name="modelo" id="modelo" placeholder="ingrese el modelo" required>
                        <input class="controls"  type="text" name="version" id="version" placeholder="ingrese la versión" required>
                        <input class="controls"  type="number" name="cilindraje" id="cilindraje" placeholder="ingrese el Cilindraje" required>
                        <input class="controls"  type="text" name="categoria" id="categoria" placeholder="ingrese la categoria (camioneta, sedan, camion, motocicleta...)" required>
                        <input class="controls"  type="number" name="numpuestos" id="numpuestos" placeholder="ingrese el número de puestos" required>
                        <input class="controls"  type="number" name="numpuertas" id="numpuertas" placeholder="ingrese el número de puertas" required>
                        <input class="controls"  type="text" name="color" id="color" placeholder="ingrese el color" required>
                        <input class="controls"  type="text" name="combustible" id="combustible" placeholder="ingrese el tipo de combustible" required>
                        <input class="controls"  type="number" name="kilometros" id="kilometros" placeholder="ingrese el kilometraje" required>
                        <input class="btn-buttons"  type="submit" name="accion" value="Guardar">
                        <input class="btn-buttons"  type="reset" value="Borrar" name="accion">
                    </form>
                    <span style= "color: red;"><?= @$_REQUEST["msj"]?></span>
                </center>
            </div>
        </div>
        <div id="footer">footer</div>
    </div>
    