<?php
    session_start();
    include_once '../../model/entidades/Vehiculo.php';
    $vehi = @$_SESSION["vehiculo"];
    $vehi = @unserialize($vehi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../css/consultStyle.css">
    <link rel="stylesheet" href="../css/styleIndex.css">
    <title>SISTEMA</title>
</head>
<body>
    <div id="contenedor">
        <header class="encabezado">
            <div class="ancho">
                <div class="logo">
                    <div><p>TodoVehículos</p></div>
                    <div><span style= "color: white;"><?= @$_REQUEST["msj"]?></span></div>
                </div>
                <nav>
                    <ul>
                        <li><a href="../usuarios/logout.php">Salir</a></li>
                        <li><a href="">Usuarios</a>
                            <ul>
                                <li><a href="../usuarios/registrar.php">Registrar</a></li>
                                <li><a href="../usuarios/listar.php">Lista Usuarios</a></li>
                            </ul>   
                        </li>
                        <li><a href="">Vehiculos</a>
                            <ul>
                                <li><a href="../vehiculos/agregar.php">Agregar</a></li>
                                <li><a href="../vehiculos/consultar.php">Consultar</a></li>
                                <li><a href="../vehiculos/editar.php">Editar</a></li>
                                <li><a href="../vehiculos/eliminar.php">Eliminar</a></li>
                                <li><a href="../vehiculos/listar.php">Lista Vehiculos</a></li>
                            </ul>
                        </li>
                        

                    </ul>
                </nav>
            </div>
            
        </header>
        <div>
            <center>
                    <br>
                    <img src="../images/marcas.png" width="700" margin-bottom="20px">
            </center>
        </div>
        
    </div>   
</body>
</html>
