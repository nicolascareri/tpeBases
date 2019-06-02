<?php

  require_once('model/ImagenesModel.php');
  require_once('view/ImagenesView.php');
  require_once('model/NotebooksModel.php');

  //controller imagenes para admin
  class ImagenesController extends SecuredController

    {
      function __construct()
        {
          $this->isActive();
          if ($this->isAdmin()){
            $this->view = new ImagenesView();
            $this->modelImagenes = new ImagenesModel();
            $this->modelNotebook = new NotebooksModel();
          }else
          header('Location: '.HOME);
        }

      public function index($params = [])
        {
          $id_notebook = $params[':id'];
          $imagenes = $this->modelNotebook->getImagenesNotebookID($id_notebook);
          $this->view->mostrarImagenes($imagenes,$id_notebook);
        }

      private function sonPNG($imagenesTipos)
      //checkea formato imagenes
        {
          foreach ($imagenesTipos as $tipo)
            {
              if($tipo != 'image/png')
                return false;
            }
          return true;
        }

      private function excepcionesLimiteImagenes($id_notebook)
      //chekea para subir si no hay mas de 3
        {
          $cant_imagenes = $this->modelImagenes->cantImagenesNotebook($id_notebook);
          $cant_imagenes_total = $cant_imagenes[0]+count($_FILES['imagenes']['name']);
          if (empty($_FILES['imagenes']['name'][0]))
            $cant_imagenes_total-=1;
          if ($cant_imagenes_total>3)
            throw new Exception("Excede la cantidad de imagenes para el notebook");
        }

      public function cargarImagenes($params = [])
      //carga imagen si no hay mas de 3
        {
          $id_notebook = $params[':id'];
          try
            {
              $this->excepcionesLimiteImagenes($id_notebook);
              if (!$this->sonPNG($_FILES['imagenes']['type']))
                throw new Exception("Las imagenes tienen que ser png");
              if (!empty($_FILES['imagenes']['name'][0]))
                {
                  $rutaTempImagenes = $_FILES['imagenes']['tmp_name'];
                  $this->modelImagenes->storeImagenes($id_notebook,$rutaTempImagenes);
                }
              header('Location: '.HOMENOTEBOOKS);
            }
              catch (Exception $e)
                {
                  $imagenes = $this->modelNotebook->getImagenesNotebookID($id_notebook);
                  $this->view->errorFormImagenes($e->getMessage(),$imagenes,$id_notebook);
                }
        }

      public function setImagen($params = [])
      //una vez cargada la setea en la vista
        {
          $id_imagen = $params[':id'];
          try
            {
              if (($_FILES['imagen']['type']!='image/png'))
                throw new Exception("La imagen tiene que ser png");
              if (empty($_FILES['imagen']['name']))
                throw new Exception("Elija una nueva imagen");
              $rutaImagen = $_FILES['imagen']['tmp_name'];
              $imagen = $this->modelImagenes->setImagen($id_imagen,$rutaImagen);
              $id_notebook = $imagen['fk_id_notebook'];
              $imagenes = $this->modelNotebook->getImagenesNotebookID($id_notebook);
              $this->view->mostrarImagenes($imagenes,$id_notebook);
            }
              catch (Exception $e)
              {
                $imagen = $this->modelImagenes->getImagen($id_imagen);
                $id_notebook = $imagen['fk_id_notebook'];
                $imagenes = $this->modelNotebook->getImagenesNotebookID($id_notebook);
                $this->view->errorFormImagenes($e->getMessage(),$imagenes,$id_notebook);
              }
        }

      public function deleteImagen($params = [])
      //borra imagen
        {
            $id_imagen = $params[':id'];
            $imagen = $this->modelImagenes->getImagen($id_imagen);
            $id_notebook = $imagen['fk_id_notebook'];
            $this->modelImagenes->delete($id_imagen);
            $imagenes = $this->modelNotebook->getImagenesNotebookID($id_notebook);
            $this->view->mostrarImagenes($imagenes,$id_notebook);
        }

    }
 ?>
