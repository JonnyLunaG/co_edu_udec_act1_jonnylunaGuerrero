<?php
class VehiculoCrud{

    /**Guarda un vehiculo en la base de datos.
     * @param $v corresponde al objeto de tipo Vehiculo que se desaea Guardar en la base de datos.
     * @throw Exception error al guardar un vehículo en la base de datos.
     * @return no retorna nada.
    */

    public static function guardar($v){
        try{
            $v->save();

        }catch(Exception $error){
            throw new Exception("Error el vehiculo no pudo ser guardado<br>Detalles: ".$error->getMessage());
        }           
    }

    /**Busca un vehiculo en la base de datos.
     * @param $id corresponde al id_vehiculo que se desaea buscar.
     * @throw Exception error al buscar el vehículo.
     * @return retorna el vehículo buscado.
     */

    public static function buscar($id){
        try {
            return Vehiculo::find($id);
        } catch (Exception $error) {
            throw new Exception("Error al buscar vehiculo<br>Detalles: ".$error->getMessage());
        }
    }

     /**Edita un vehiculo en la base de datos.
     * @param $id corresponde al id_vehiculo que se desaea editar.
     * @throw Exception error al editar el vehículo.
     * @return retorna el vehículo editadO.
     */

    public static function editar($id){
        try {
            $id->save();
        } catch (Exception $error) {
            throw new Exception("Error al editar el vehiculo<br>Detalles: ".$error->getMessage());
        }
    }

    public static function eliminar($v){
      
        // return Vehiculo::delete($id)
        try {
            $v->delete();
            return true;
        } catch (Exception $error) {
            throw new Exception("Error al editar el vehiculo<br>Detalles: ".$error->getMessage());
        }
        
    }

    public static function contar(){
        try {
            return Vehiculo::count();
        } catch (Exception $error) {
            throw new Exception("Error al contar los vehiculos<br>Detalles: ".$error->getMessage());
        }
    }

}
