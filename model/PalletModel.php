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
      function getPosCliente($id_cliente){
        $sentencia = $this->db->prepare("select * from fn_gr04_clientes_pos_ocupadas('$id_cliente')");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
      }
    }
 ?>