<?php
class UsuarioCrud {

    public static function guardar($user){
        try{
            $user->save();

        }catch(Exception $error){
            throw new Exception("Error el usuario no pudo ser guardado<br>Detalles: ".$error->getMessage());
        }           
    }

    public static function buscar($cedula){
        try {
            return Usuario::find($cedula);
            //$user = Usuario::find($cedula);
            //return $user;
        } catch (Exception $error) {
            throw new Exception("Error al buscar usuario con cedula: ".$cedula);
        }
    }

    public static function editar($user){
        try {
            $user->save();
        } catch (Exception $error) {
            throw new Exception("Error al editar el ususario<br>Detalles: ".$error->getMessage());
        }
    }

    public static function eliminar($user){
        try {
            $user->delete();
        } catch (Exception $error) {
            throw new Exception("Error al eliminar  usuario<br>Detalles: ".$error->getMessage());
        }
    }

    public static function contar(){
        try {
            return Usuario::count();
        } catch (Exception $error) {
            throw new Exception("Error al contar los usuarios<br>Detalles: ".$error->getMessage());
        }
    }

    public static function modificar_usuario($user){
        return UsuarioCrud::guardar($user);
    }

    public static function listar_usuario(){
        return Usuario::all();
    }

}

