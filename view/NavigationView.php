<?php

  class NavigationView extends View
    {
      function mostrar_inicio($pallet)
        {
          $this->smarty->assign('pallet',$pallet);
          return $this->smarty->display('templates/inicio.tpl');
        }
      function mostrar_pos($pos){
        $this->smarty->assign('pos', $pos);
        return $this->smarty->display('templates/restantes.tpl');
      }
      function mostrar_posCliente($posiciones){
        $this->smarty->assign('posiciones', $posiciones);
        return $this->smarty->display('templates/clientes.tpl');
      
    }
  }
 ?>
