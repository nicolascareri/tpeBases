<?php

  require_once('model/PalletModel.php');

  //controller imagenes para admin
  class PalletController extends Controller
    {
      function __construct()
        
            $this->view = new PalletView();
            $this->model = new PalletModel();
          }else
          header('Location: '.HOME);
        }

        function getPallet(){
          $pallet = $this->model->getAllPallet();
          $this->view->mostrarPallet($pallet);
        }
 ?>
