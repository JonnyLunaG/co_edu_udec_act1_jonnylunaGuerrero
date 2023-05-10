<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/co_edu_udec_act1_jonnylunaguerrero/model/entidades/Usuario.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/co_edu_udec_act1_jonnylunaguerrero/model/entidades/Vehiculo.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/co_edu_udec_act1_jonnylunaguerrero/model/crud/UsuarioCrud.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/co_edu_udec_act1_jonnylunaguerrero/model/crud/VehiculoCrud.php';

class UsuarioControlador{

    public static function accion(){

        $accion = @$_REQUEST["accion"];
        //var_dump($accion);
        switch(@$accion){
            case "Registrar":
                UsuarioControlador::guardar_usuario();
                break;
            case "Buscar":
                UsuarioControlador::buscar_usuario();
                break;
            case "Editar":
                UsuarioControlador::editar_usuario();
                break;
            case "Eliminar":
                UsuarioControlador::eliminar_usuario();
                break;
            case "Listar":
                UsuarioControlador::listar_usuario();
                break;
            case "Iniciar":
                UsuarioControlador::iniciar_sesion();
                break;
            default:
                break;
        }
    }
    public static function iniciar_sesion(){
        $cedula=$_REQUEST["cedula"];
        $clave=$_REQUEST["clave"];
        
        try {
            $user = new Usuario();
            $user = UsuarioCrud::buscar($cedula);
            //var_dump($user);
            
            if ($user!=NULL) {
                if ($user->clave==$clave) {
                    //iniciamos sesion solo si esta no esta iniciada
                    if (session_status() != PHP_SESSION_ACTIVE) {
                        session_start();
                        $_SESSION['nombre_usuario'] = $user->nombre;
                        $msj="Usuario: ".$user->nombre." ".$user->apellido;
                        header("Location: ../view/system/sistema.php?msj=".$msj);
                    }
                }else {
                    $msj="El Password ingresado es Incorrecto";
                    header("Location: ../view/usuarios/login.php?msj=".$msj);

                }
            }else {
                $msj="El usuario con cédula: ".$cedula." No existe, ¿Desea Registrarse?";
                header("Location: ../view/index.php?msj=".$msj);
            }
            exit;
            // if($user){
            //     //$user=serialize($user);
            
            //     if (session_status() != PHP_SESSION_ACTIVE) {
            //         if (($user !== NULL) && ($user->clave===$clave)) {
            //             session_start();
            //             $_SESSION['nombre_usuario'] = $user->nombre;
            //             $msj="Usuario: ".$user->nombre." ".$user->apellido;
            //             header("Location: ../view/system/sistema.php?msj=".$msj);
            //         } else {
            //             $msj=("la contraseña ingresada no es correcta");
            //             header("Location: ../view/usuarios/login.php?msj=".$msj);
            //         }
            //     } else {
            //         echo "Existe una sesión activa, salga de ella para poder ingresar a otra";
            //         header("Location: ../index.php");
            //     }
            // }else{
            //     $msj=("la cedula ingresada es incorrecta");
            //     header("Location: ../view/usuarios/login.php?msj=".$msj);
            // }
        } catch (Exception $error) {
            $msj="Error al iniciar sesión el usuario con cédula ".$cedula. " No existe";
            header("Location:../view/usuarios/login.php?msj=".$msj);
            exit;
        }
    }

    public static function guardar_usuario(){
        $cedula=$_REQUEST["cedula"];
        $clave=$_REQUEST["clave"];
        $nombre=$_REQUEST["nombre"];
        $apellido=$_REQUEST["apellido"];
        $genero=$_REQUEST["genero"];
        $email=$_REQUEST["correo"];

        $user = new Usuario();
        $user->cedula=$cedula;
        $user->clave=$clave;
        $user->nombre=$nombre;
        $user->apellido=$apellido;
        $user->genero=$genero;
        $user->email=$email;

        try {
            UsuarioCrud::guardar($user);
            $total = UsuarioCrud::contar();
            $msj ="Usuario Guardado, total: ".$total;
            header("Location: ../view/usuarios/registrar.php?msj=$msj");
            exit;
        } catch (Exception $error) {
            header("Location: ../view/usuarios/registrar.php?msj=".$error->getMessage());
            exit;
        }
    }

    public static function buscar_usuario(){
        $cedula=$_REQUEST["cedula"];
        $passwor=$_REQUEST["clave"];
        
        $pagina=$_REQUEST["pagina"];
        try {
            $user = UsuarioCrud::buscar($cedula);
            $user=serialize($user);
            $_SESSION["usuario"]=$user;
            header("Location: ../view/usuarios/login.php?msj=Usuario ha ingresado exitosamente");
            exit;
        } catch (Exception $error) {
            unset($_SESSION["usuario"]);
            header("Location: ../view/usuarios/login.php?msg=" .$error->getMessage());
            exit;
        }
    }

    public static function listar_usuario(){
        $lista_users= UsuarioCrud::listar_usuario();
       
        if($lista_users == null || count($lista_users) == 0  ){
            unset($_SESSION["lista_users"]);
            header("Location: ../view/usuarios/listar.php?msg=No existen usuarios registrados en nuestra base de datos");
            exit;
        }else{
            $lista_users=serialize($lista_users);
            $_SESSION["lista_users"]=$lista_users;
            var_dump($lista_users);
            header("Location: ../view/usuarios/listar.php?msg=Total usuarios registrados ");
            exit;
        }
        
    }


}

UsuarioControlador::accion();

