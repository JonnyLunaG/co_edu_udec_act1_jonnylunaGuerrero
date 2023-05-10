<?php
    // $propiedad = $_POST['Listar'];
    session_start();
    include_once '../../model/entidades/Usuario.php';

    $lista_users = @$_SESSION["lista_users"];
    //var_dump($lista_users);
    $lista_users = @unserialize($lista_users);
    echo $lista_users;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleIndex.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/listarStyle.css">
    <title>LISTADO DE USUARIOS</title>
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
                                <li><a href="registrar.php">Registrar</a></li>
                                <li><a href="listar.php">Lista Usuarios</a></li>
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
        <section>
            <center>
                <h1>LISTA DE USUARIOS</h1>
                <?php
                    include("../includes/listausers.php");
                ?>
            </center>
        </section>

    </div>
    


</body>
</html>
