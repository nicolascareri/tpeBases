<?php

  require_once 'libs/Smarty.class.php';

  class View
    {
      protected $smarty;
      function __construct()
        {
          $this->smarty = new Smarty();
          $this->smarty->assign('titulo', 'Notebooks');
          $this->smarty->assign('base_sitio', HOME);
        }
        
  }
?>
