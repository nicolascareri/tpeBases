<?php
  require_once('model/MarcasModel.php');
  require_once('model/NotebooksModel.php');
  require_once('view/NavigationView.php');

  //logica-controller navegacion
  class NavigationController extends SecuredController

    {

      function __construct()
        {
          $this->view = new NavigationView();
          $this->modelMarcas = new MarcasModel();
          $this->modelNotebooks = new NotebooksModel();
          $this->modelUsuarios = new UsuariosModel();
        }

      public function index()
        {
          $marcas = $this->modelMarcas->getAllInOrder();
          $conectado = $this->isConnect();
          $this->view->mostrarIndex($marcas,$conectado);
        }

      public function inicio()
        {
          $notebooks = $this->modelNotebooks->getAll();
          $this->view->mostrar_inicio($notebooks);
        }

      public function showNotebooksOrdenadosMarca()
        {
          $notebooks = $this->modelNotebooks->getAllInOrder();
          $this->desplegarNotebooks($notebooks);
        }

      public function showNotebooksMarca($params)
        {
          $notebooks = $this->modelNotebooks->getAllFromMarca($params[':id']);
          $this->desplegarNotebooks($notebooks);
        }

      public function showNotebooks()
        {
          $notebooks = $this->modelNotebooks->getAll();
          $this->desplegarNotebooks($notebooks);
        }

      private function desplegarNotebooks($notebooks)
      {
        try
          {
            if (empty($notebooks))
              throw new Exception('No se encontraron noteboks');
            $marcas = $this->modelMarcas->getAll();
            $this->view->mostrarNotebooks($notebooks,$marcas);
          }
            catch (Exception $e)
              {
                $this->view->mostrarError($e->getMessage());
              }
      }

      public function showNotebook($params = [])
        {
          try
            {
              $idNotebooks = $params[':id'];
              $notebooks = $this->modelNotebooks->get($idNotebooks);
              $especificacion = $this->modelNotebooks->getEspecificacion($idNotebooks);
              if (empty($notebooks['id_marca']))
                throw new Exception('Notebook invalida');
                else{
                      $marca = $this->modelMarcas->get($notebooks['id_marca']);
                      $this->view->mostrarNotebook($notebooks,$marca,$especificacion);
                    }
            }
              catch (Exception $e)
              {
                $this->view->mostrarError($e->getMessage());
              }
        }

      public function showComentar()
        {
          if ($this->userActive())
          {
            $usuario = $this->modelUsuarios->getUsuario($_SESSION['USER']);
            $this->view->mostrarComentar($usuario);
          }
          else
            $this->view->mostrarError("Solo usuarios registrados pueden subir comentarios");
        }

      public function admin()
        {
          $this->isActive();
          if ($this->isAdmin())
            $this->view->mostrarPanelAdmin();
          else
            header('Location: '.HOME);
        }

      public function user()
        {
          $this->userActive();
            $usuario = $this->modelUsuarios->getUsuario($_SESSION['USER']);
            $this->view->mostrarDatosUsuario($usuario);
        }

    }
 ?>
