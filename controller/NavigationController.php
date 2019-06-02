<?php
  require_once('model/PalletModel.php');
  require_once('view/NavigationView.php');

  //logica-controller navegacion
  class NavigationController extends Controller

    {
      function __construct()
        {
          $this->view = new NavigationView();
          $this->model = new PalletModel();
        }

      function inicio()
        {
          $pallet = $this->model->getAllPallet();
          $this->view->mostrar_inicio($pallet);
        }
      function vistaFecha()
      {
        $fecha = $_POST['fecha'];
        $pos = $this->model->getPosFecha($fecha);
        $this->view->mostrar_pos($pos);
      }
      function getDiasRestantes(){
        $dias = $_POST['dias'];
        $restantes = $this->model->getDiasRestantes($dias);
        $this->view->mostrar_dias($restantes);
      }
    }
 ?>
