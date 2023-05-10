<?php

    $inc=include("../../services/UsuarioService.php");
    if($inc){
        $consultav = "SELECT * FROM vehiculos";
        $datos = mysqli_query($conexion, $consultav);
        if($datos){
?>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Placa</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Color</th>
                        <th>Categoria</th>
                        <th>Usuario</th>
                    </tr>
                    <?php
                        while($fila = $datos->fetch_array()){
                            $id_vehiculo = $fila["id_vehiculo"];
                            $placa = $fila["placa"];
                            $marca = $fila["marca"];
                            $modelo = $fila["modelo"];
                            $color = $fila["color"];
                            $categoria = $fila["categoria"];
                            $usuario_id = $fila["usuario_id"];
                    ?>
                    <tr>
                        <td><?php echo $id_vehiculo; ?></td>
                        <td><?php echo $placa; ?></td>
                        <td><?php echo $marca; ?></td>
                        <td><?php echo $modelo; ?></td>
                        <td><?php echo $color; ?></td>
                        <td><?php echo $categoria; ?></td>
                        <td><?php echo $usuario_id; ?></td> 
                    </tr>
                    <?php 
                    }
                    ?>
                </table>
        <?php           
        }
    }
        ?>