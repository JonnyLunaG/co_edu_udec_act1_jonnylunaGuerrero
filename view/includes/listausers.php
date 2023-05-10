<?php

    $inc=include("../../services/UsuarioService.php");
    if($inc){
        $consulta = "SELECT * FROM usuarios";
        $datos = mysqli_query($conexion, $consulta);
        if($datos){
?>
                <table>
                    <tr>
                        <th>Cédula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Género</th>
                        <th>email</th>
                    </tr>
                    <?php
                        while($fila = $datos->fetch_array()){
                            $cedula = $fila["cedula"];
                            $nombre = $fila["nombre"];
                            $apellido = $fila["apellido"];
                            $genero = $fila["genero"];
                            $email = $fila["email"];
                    ?>
                    <tr>
                        <td><?php echo $cedula; ?></td>
                        <td><?php echo $nombre; ?></td>
                        <td><?php echo $apellido; ?></td>
                        <td><?php echo $genero; ?></td>
                        <td><?php echo $email; ?></td>
                    </tr>
                    <?php 
                    }
                    ?>
                </table>
        <?php           
        }
    }
        ?>