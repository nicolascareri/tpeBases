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
        // print_r($pos);
        $this->view->mostrar_pos($pos);
      }
      function getPosCliente(){
        $id_cliente = $_POST['id_cliente'];
        $posiciones = $this->model->getPosCliente($id_cliente);
        // print_r($posiciones);
        $this->view->mostrar_posCliente($posiciones);
      }
    }
 ?>
