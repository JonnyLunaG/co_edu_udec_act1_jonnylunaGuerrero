<?php
    session_start();
    include_once '../../model/entidades/Vehiculo.php';
    $vehi = @$_SESSION["vehiculo"];
    $vehi = @unserialize($vehi);
    //var_dump($vehi);
    // if(@$_SESSION["vehiculo"]===NULL){
    //     $vehi=NULL;
    // }
    //print_r($vehi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../css/consultStyle.css">
    <link rel="stylesheet" href="../css/styleIndex.css">
    <title>EDITAR VEHICULOS</title>
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
                    <form class="form-consult" action="../../controllers/VehiculosControlador.php" method="POST">
                        <h4 class="titleform">Editar Vehículos</h4>
                        <ul>
                            <li>
                                <label for="id">Id Vehículo:</label>
                                <input class="controls"  type="number" name="id_vehiculo" value="<?= @$vehi->id_vehiculo ?>" id="id_vehiculo" >
                            </li>
                            <li>
                                <label for="placa">Placa:</label>
                                <input class="controls"  type="text" name="placa" value="<?= @$vehi->placa ?>" id="placa" <?=(isset($vehi) ==true)? "":"readonly"?>>
                            </li>
                            <li>
                                <label for="marca">Marca:</label>
                                <input class="controls"  type="text" name="marca" value="<?= @$vehi->marca ?>" id="marca" <?=(isset($vehi) ==true)? "":"readonly"?>>
                            </li>
                            <li>
                                <label for="usuario_id">Id Usuario:</label>
                                <input class="controls"  type="number" name="usuario_id" value="<?= @$vehi->usuario_id ?>" id="usuario_id"  readonly>
                            </li>
                            <li>
                                <label for="modelo">Modelo:</label>
                                <input class="controls"  type="text" name="modelo" value="<?= @$vehi->modelo ?>" id="modelo"  <?=(isset($vehi) ==true)? "":"readonly"?>>
                            </li>
                            <li>
                                <label for="version">Versión:</label>
                                <input class="controls"  type="text" name="version" value="<?= @$vehi->version ?>" id="version"  <?=(isset($vehi) ==true)? "":"readonly"?>>
                            </li>
                            <li>
                                <label for="cilindraje">Cilindraje:</label>
                                <input class="controls"  type="text" name="cilindraje" value="<?= @$vehi->cilindraje ?>" id="cilindraje"  <?=(isset($vehi) ==true)? "":"readonly"?>>
                            </li>
                            <li>
                                <label for="categoria">Categoría:</label>
                                <input class="controls"  type="text" name="categoria" value="<?= @$vehi->categoria ?>" id="categoria"  <?=(isset($vehi) ==true)? "":"readonly"?>>
                            </li>
                            <li>
                                <label for="numpuestos">Número de Puestos:</label>
                                <input class="controls"  type="number" name="numpuestos" value="<?= @$vehi->numpuestos ?>" id="numpuestos"  <?=(isset($vehi) ==true)? "":"readonly"?>>
                            </li>
                            <li>
                                <label for="numpuertas">Número de Puertas:</label>
                                <input class="controls"  type="number" name="numpuertas" value="<?= @$vehi->numpuertas ?>" id="numpuertas"  <?=(isset($vehi) ==true)? "":"readonly"?>>
                            </li>
                            <li>
                                <label for="color">Color:</label>
                                <input class="controls"  type="text" name="color" value="<?= @$vehi->color ?>" id="color"  <?=(isset($vehi) ==true)? "":"readonly"?>>
                            </li>
                            <li>
                                <label for="combustible">Combustible:</label>
                                <input class="controls"  type="text" name="combustible" value="<?= @$vehi->combustible ?>" id="combustible"  <?=(isset($vehi) ==true)? "":"readonly"?>>
                            </li>
                            <li>
                                <label for="kilometros">kilometraje:</label>
                                <input class="controls"  type="number" name="kilometros" value="<?= @$vehi->kilometros ?>" id="kilometros"  <?=(isset($vehi) ==true)? "":"readonly"?>>
                            </li>
                        </ul>

                        <input class="btn-buttons"  type="hidden" name="pagina" value="editar">
                        <input class="btn-buttons"  type="submit" name="accion" value="Consultar">
                        <input class="btn-buttons"  type="submit" name="accion" value="Editar">
                        
                    </form>
                    <span style= "color: red;"><?= @$_REQUEST["msj"]?></span>
                </center>
            </div>
        </div>
        <div id="footer">footer</div>
    </div>
        
</body>
</html>
    