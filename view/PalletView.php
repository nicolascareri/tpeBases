<?php
  class NotebooksView extends View
    {
      function mostrarNotebooks($pallet)
        {
          $this->smarty->assign('Pallets',$pallet);
          $this->smarty->assign('encabezado','Listado de Pallet');
          $this->smarty->display('templates/inicio.tpl');
        }
    }
?>
