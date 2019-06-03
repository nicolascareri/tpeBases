<?php
  class PalletModel extends Model
  
    {
      function getAllPallet(){
         $sentencia = $this->db->prepare( "select * from gr04_pallet");
         $sentencia->execute();
         return $sentencia->fetchAll(PDO::FETCH_ASSOC);
      }
      function getPosFecha($fecha){
        $sentencia = $this->db->prepare("select * from fn_gr04_fecha_pos_libres('$fecha');");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
      }
      function getDiasRestantes($dias){
        $sentencia = $this->db->prepare("SELECT * FROM gr04_cliente 
                                                  WHERE cuit_cuil IN
                                                           (select id_cliente 
                                                           FROM gr04_alquiler
                                                           WHERE fecha_hasta - current_date >= $dias);");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
      }
      function getPosCliente($id_cliente){
        $sentencia = $this->db->prepare("SELECT id_alquiler, nro_posicion, nro_estanteria, nro_fila FROM gr04_alquiler_posiciones
                                         WHERE estado = true AND id_alquiler in 
                                                                    (SELECT id_alquiler FROM gr04_alquiler
                                                                      WHERE id_cliente = $id_cliente)");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
      }
    }
 ?>
