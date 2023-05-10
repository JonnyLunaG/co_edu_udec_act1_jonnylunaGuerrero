<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/co_edu_udec_act1_jonnylunaguerrero/model/entidades/Usuario.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/co_edu_udec_act1_jonnylunaguerrero/model/entidades/Vehiculo.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/co_edu_udec_act1_jonnylunaguerrero/model/crud/UsuarioCrud.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/co_edu_udec_act1_jonnylunaguerrero/model/crud/VehiculoCrud.php';

class VehiculoControlador{

    public static function accion(){

        $accion = $_REQUEST["accion"];
        switch($accion){
            case "Guardar":
                VehiculoControlador::guardar_vehiculo();
                break;
            case "Consultar":
                VehiculoControlador::consultar_vehiculo();
                break;
            case "Editar":
                VehiculoControlador::editar_vehiculo();
                break;
            case "Eliminar":
                VehiculoControlador::eliminar_vehiculo();
                break;
            
            case "Listar":
                VehiculoControlador::listar_vehiculo();
                break;
            default:
                
                break;
        }
    }

    public static function guardar_vehiculo(){
        $usuario_id=$_REQUEST["usuario_id"];
        $placa=$_REQUEST["placa"];
        $marca=$_REQUEST["marca"];
        $modelo=$_REQUEST["modelo"];
        $version=$_REQUEST["version"];
        $cilindraje=$_REQUEST["cilindraje"];
        $categoria=$_REQUEST["categoria"];
        $numpuestos=$_REQUEST["numpuestos"];
        $numpuertas=$_REQUEST["numpuertas"];
        $color=$_REQUEST["color"];
        $combustible=$_REQUEST["combustible"];
        $kilometros=$_REQUEST["kilometros"];
        
        $vehi = new Vehiculo();
        $vehi->usuario_id=$usuario_id;
        $vehi->placa=$placa;
        $vehi->marca=$marca;
        $vehi->modelo=$modelo;
        $vehi->version=$version;
        $vehi->cilindraje=$cilindraje;
        $vehi->categoria=$categoria;
        $vehi->numpuestos= $numpuestos;
        $vehi->numpuertas=$numpuertas;
        $vehi->color=$color;
        $vehi->combustible=$combustible;
        $vehi->kilometros=$kilometros;
        
        try {
            VehiculoCrud::guardar($vehi);
            $total = VehiculoCrud::contar();
            $msj ="Vehiculo Guardado, total: ".$total;
            header("Location: ../view/vehiculos/agregar.php?msj=$msj");
            exit;
        } catch (Exception $error) {
            header("Location: ../view/vehiculos/agregar.php?msj=".$error->getMessage());
            exit;
        }
    }

    public static function consultar_vehiculo(){
         $id=$_REQUEST["id_vehiculo"];
         $pagina=$_REQUEST["pagina"];
        try {
             $vehi=VehiculoCrud::buscar($id);
             $vehi=serialize($vehi);
             $_SESSION["vehiculo"]=$vehi;
             header("Location: ../view/vehiculos/$pagina.php?msj=Vehiculo encontrado ");
             exit;
        } catch (Exception $error) {
            unset($_SESSION["vehiculo"]);
            header("Location: ../view/vehiculos/$pagina.php?msg=" .$error->getMessage());
            exit;
        }
    }

    public static function editar_vehiculo(){
        
        $id_vehiculo=$_REQUEST["id_vehiculo"];
        $usuario_id=$_REQUEST["usuario_id"];
        $placa=$_REQUEST["placa"];
        $marca=$_REQUEST["marca"];
        $modelo=$_REQUEST["modelo"];
        $version=$_REQUEST["version"];
        $cilindraje=$_REQUEST["cilindraje"];
        $categoria=$_REQUEST["categoria"];
        $numpuestos=$_REQUEST["numpuestos"];
        $numpuertas=$_REQUEST["numpuertas"];
        $color=$_REQUEST["color"];
        $combustible=$_REQUEST["combustible"];
        $kilometros=$_REQUEST["kilometros"];

        /*recuperar el vehiculo de la sesion*/
        $vehi=@$_SESSION["vehiculo"];
        $vehi = @unserialize($vehi);

        /*se pasan los nuevos datos*/
        $vehi->usuario_id=$usuario_id;
        $vehi->placa=$placa;
        $vehi->marca=$marca;
        $vehi->modelo=$modelo;
        $vehi->version=$version;
        $vehi->cilindraje=$cilindraje;
        $vehi->categoria=$categoria;
        $vehi->numpuestos= $numpuestos;
        $vehi->numpuertas=$numpuertas;
        $vehi->color=$color;
        $vehi->combustible=$combustible;
        $vehi->kilometros=$kilometros;

       // }
        $resultado= VehiculoCrud::editar($vehi);
        if($resultado !=false){
            unset($_SESSION["vehiculo"]);
            header("Location: ../view/vehiculos/editar.php?msj=Vehiculo editado");
             exit;
        }else{
            unset($_SESSION["vehiculo"]);
            header("Location: ../view/vehiculos/editar.php?msj=Vehiculo no se puede editar");
             exit;
        }
    }

    public static function eliminar_vehiculo(){
        //$id=$_REQUEST["id_vehiculo"];

        $vehi=@$_SESSION["vehiculo"];
        $vehi = @unserialize($vehi);
        //$id=$vehi->id_vehiculo;
        //var_dump($id);
        $eliminado = VehiculoCrud::eliminar($vehi);
        
        if ($eliminado) {
            unset($_SESSION["vehiculo"]);
            header("Location: ../view/vehiculos/eliminar.php?msj=Vehiculo eliminado Exitosamente");
            exit;
        }else{
            unset($_SESSION["vehiculo"]);
            header("Location: ../view/vehiculos/eliminar.php?msj=Vehiculo no pudo ser eliminado");
            exit;
        }

    }
        
}

VehiculoControlador::accion();

