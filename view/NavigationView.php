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
        return $this->smarty->display('templates/fechas.tpl');
      }
      function mostrar_dias($restantes){
        $this->smarty->assign('restantes', $restantes);
        return $this->smarty->display('templates/restantes.tpl');
    }
  }
 ?>
