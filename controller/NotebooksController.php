<?php

  require_once('model/NotebooksModel.php');
  require_once('view/NotebooksView.php');
  require_once('model/MarcasModel.php');
  require_once('model/ImagenesModel.php');

  //logica-controller note
  class NotebooksController extends SecuredController

    {

      protected $modelNotebook;
      protected $modelMarca;
      protected $modelImagenes;

      function __construct()
        {
          $this->isActive();
          if ($this->isAdmin())
            {
              $this->view = new NotebooksView();
              $this->modelNotebook = new NotebooksModel();
              $this->modelMarca = new MarcasModel();
              $this->modelImagenes = new ImagenesModel();
            }
              else
                header('Location: '.HOME);
        }

      public function index()
        {
          $notebooks = $this->modelNotebook->getAll();
          $marcas = $this->modelMarca->getAll();
          $this->view->mostrarNotebooks($notebooks);
        }

      public function destroy($params = [])
        {
          $id_notebook = $params[':id'];
          $this->modelNotebook->delete($id_notebook);
          header('Location: '.HOMENOTEBOOKS);
        }

      public function create()
        {
          $marcas = $this->modelMarca->getAll();
          $this->view->mostrarCrearNotebook($marcas);
        }

      public function store()
        {
          try
            {
              $this->excepcionesIsset();
              try
                {
                  $this->cumpleRequisitosImagen();
                  $rutaTempImagenes = $_FILES['imagenes']['tmp_name'];
                  if (!$this->sonPNG($_FILES['imagenes']['type']))
                    throw new Exception("Las imagenes tienen que ser png");
                  $this->excepcionesEmpty();
                  $id_notebook = $this->modelNotebook->store($_POST['marca'],$_POST['nombre'],$_POST['caracteristicas'],$_POST['precio']);
                  $this->modelImagenes->storeImagenes($id_notebook,$rutaTempImagenes);
                  header('Location: '.HOMENOTEBOOKS);
                }
                  catch (Exception $e)
                    {
                      $marcas = $this->modelMarca->getAll();
                      $this->view->errorFormNotebook($e->getMessage(),$_POST['nombre'], $_POST['caracteristicas'],$_POST['precio'],$marcas,$_POST['marca'],"guardarNotebook",'Crear','Crear notebook');
                    }
            }
              catch (Exception $e)
                {
                  header('Location: '.HOMENOTEBOOKS);
                }
        }

      private function cumpleRequisitosImagen()
        {
          if (count($_FILES['imagenes']['name'])>3)
            throw new Exception("El maximo de imagenes es 3");
          if (empty($_FILES['imagenes']['name'][0]))
            throw new Exception("Se debe subir al menos una imagen");
        }

      private function sonPNG($imagenesTipos)
        {
          foreach ($imagenesTipos as $tipo)
            {
              if($tipo != 'image/png')
                return false;
            }
              return true;
        }

      private function excepcionesIsset()
        {
          if(!(isset($_POST['marca'])&&isset($_POST['precio'])&&isset($_POST['nombre'])))
            throw new Exception("Hay variables que no fueron seteadas");
        }

      private function excepcionesEmpty()
        {
          if(empty($_POST['marca']))
            throw new Exception("Imposible crear el notebook, no hay marcas cargadas");
          if(empty($_POST['nombre']))
            throw new Exception("El nombre es requerido");
          if(empty($_POST['precio']))
            throw new Exception("El precio es requerido");
        }

      public function update($params = [])
        {
          $id_notebook = $params[':id'];
          $notebook = $this->modelNotebook->get($id_notebook);
          $nombre = $notebook['nombre'];
          $caracteristicas = $notebook['caracteristicas'];
          $precio = $notebook['precio'];
          $id_marca = $notebook['id_marca'];
          $marcas = $this->modelMarca->getAll();
          $this->view->mostrarActualizarNotebook($nombre,$caracteristicas,$precio,$id_notebook,$id_marca,$marcas);
        }

      public function set($params = [])
        {
          try
            {
              $this->excepcionesIsset();
              $id_notebook = $params[':id'];
                try
                  {
                    $this->excepcionesEmpty();
                    $this->excepcionesLimiteImagenes($id_notebook);
                    $rutaTempImagenes = $_FILES['imagenes']['tmp_name'];
                    $this->modelNotebook->setNombre($id_notebook,$_POST['nombre']);
                    $this->modelNotebook->setCaracteristicas($id_notebook,$_POST['caracteristicas']);
                    $this->modelNotebook->setPrecio($id_notebook,$_POST['precio']);
                    $this->modelNotebook->setMarca($id_notebook,$_POST['marca']);
                    if (!empty($_FILES['imagenes']['name'][0]))
                      $this->modelImagenes->storeImagenes($id_notebook,$rutaTempImagenes);
                    header('Location: '.HOMENOTEBOOKS);
                  }
                    catch (Exception $e)
                      {
                        $marcas = $this->modelMarca->getAll();
                        $this->view->errorFormNotebook($e->getMessage(),$_POST['nombre'], $_POST['caracteristicas'],$_POST['precio'],$marcas,$_POST['marca'],"setNotebook/$id_notebook",'Modificar','Modificar notebook');
                      }
            }
              catch (Exception $e)
                {
                  header('Location: '.HOMENOTEBOOKS);
                }
        }

      private function excepcionesLimiteImagenes($id_notebook)
        {
          $cant_imagenes = $this->modelImagenes->cantImagenesNotebook($id_notebook);
          $cant_imagenes_total = $cant_imagenes[0]+count($_FILES['imagenes']['name']);
          if (empty($_FILES['imagenes']['name'][0]))
            $cant_imagenes_total-=1;
          if ($cant_imagenes_total>3)
            throw new Exception("Excede la cantidad de imagenes para el notebook");
        }

      public function showEspecificaciones($params = [])
        {
          $id_notebook = $params[':id'];
          $notebook = $this->modelNotebook->get($id_notebook);
            if (empty($notebook))
              throw new Exception("error en la id del notebook");
            $especificacion = $this->modelNotebook->getEspecificacion($id_notebook);
            $this->view->mostrarEspecificacion($notebook,$especificacion);
        }


      public function createEspecificacion($params = [])
        {
          $id_notebook = $params[':id'];
          $this->view->mostrarCrearEspecificacion($id_notebook);
        }

      public function storeEspecificacion($params = [])
        {
          try
            {
              $this->excepcionesIssetEspecificaciones();
              $especificaciones['0'] = $params[':id'];
              $i=1;
              foreach($_POST as $v)
                {
                  $especificaciones[$i] = $v;
                  $i++;
                }
              $especificaciones['11'] = (isset($_POST['lector_huella']))?1:0;
              $especificaciones['12'] = (isset($_POST['supercarga']))?1:0;
              $this->modelNotebook->storeEspecificacion($especificaciones);
              header('Location: '.HOMENOTEBOOKS);
            }
              catch (Exception $e)
              {
                header('Location: '.HOMENOTEBOOKS);
              }
        }

      private function excepcionesIssetEspecificaciones()
        {
          if(!(isset($_POST['pantalla'])&&isset($_POST['pantalla_dimension'])&&isset($_POST['peso'])&&isset($_POST['procesador'])))
            throw new Exception("Hay variables que no fueron seteadas");
          if(!(isset($_POST['ram'])&&isset($_POST['memoria'])&&isset($_POST['sistema_operativo'])&&isset($_POST['conectividad'])))
            throw new Exception("Hay variables que no fueron seteadas");
          if(!(isset($_POST['capacidad_bateria'])&&isset($_POST['camara'])))
            throw new Exception("Hay variables que no fueron seteadas");
        }

      public function destroyEspecificacion($params = [])
        {
          $id_notebook = $params[':id'];
          $this->modelNotebook->deleteEspecificaciones($id_notebook);
          header('Location: '.HOMENOTEBOOKS);
        }

    }
?>
