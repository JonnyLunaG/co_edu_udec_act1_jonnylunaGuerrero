<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/styleIndex.css">
    <link rel="stylesheet" href="../css/listarStyle.css">
    <title>LISTAR VEHICULOS</title>
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
                        <li><a href="">Usuarios</a>
                            <ul>
                                <li><a href="../usuarios/registrar.php">Registrar</a></li>
                                <li><a href="../usuarios/listar.php">Lista Usuarios</a></li>
                            </ul>
                        </li>
                        <li><a href="">Vehiculos</a>
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
            <section>
                <center>
                    <h1>LISTA DE VEHICULOS</h1>
                    <?php
                        include("../includes/listavehiculos.php");
                    ?>
                </center>
            </section>
        </div>
        
    </div>
    
</body>
</html>
    