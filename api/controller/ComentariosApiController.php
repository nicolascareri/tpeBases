<?php
require_once('../model/ComentariosModel.php');
require_once('ApiSecuredController.php');
/**
*
*/
  class ComentariosApiController extends ApiSecuredController

  {

    protected $model;

    function __construct()
      {
        parent::__construct();
        $this->model = new ComentariosModel();
      }

    public function getComentario($params = [])
      {
        $id_comentario = $params[":id"];
        $comentario = $this->model->getComentario($id_comentario);
        if ($comentario){
          return $this->json_response($comentario, 200);
        }
        else
          return $this->json_response(false, 404);
      }

    public function crearComentario()

      {
        if ($this->isActive())
          {
              $body = json_decode($this->raw_data);
              $id_notebook = $body->id_notebook;
              $id_usuario = $body->id_usuario;
              $texto_comentario = $body->texto_comentario;
              $nota_comentario = $body->nota_comentario;
              $comentario = $this->model->guardarComentario($id_notebook,$id_usuario,$texto_comentario,$nota_comentario);
              $response = new stdClass();
              $response->login = $this->isActive();
              $response->admin = $this->isAdmin();
              if (isset($comentario))
                $response->fecha_ultimo_comentario = $comentario[0]['fecha_comentario'];
              else
                {
                  $response->fecha_ultimo_comentario = 0;
                  $response->status = 200;
                  $response->comentarios = $comentario;
                }
          }
            else
              return $this->Unauthorized_response();
      }


    private function excepcionesCreacion($body)
      {
        if (!isset($body))
          throw new Exception(false);
        if (!isset($body->id_notebook))
          throw new Exception(false);
        if (!isset($body->id_usuario))
          throw new Exception(false);
        if (!isset($body->texto_comentario))
          throw new Exception(false);
        if (!isset($body->nota_comentario))
          throw new Exception(false);
      }

    public function getComentarios()
      {
        if (isset($_GET['id_notebook']))
          {
            $id_notebook = $_GET['id_notebook'];
            if (isset($_GET['fecha_ultimo_comentario'])){
                $fecha = $_GET['fecha_ultimo_comentario'];
                $comentarios = $this->model->getAllForNotebookFecha($id_notebook,$fecha);
              }
                else
                  $comentarios = $this->model->getAllForNotebook($id_notebook);
          }
            else if (isset($_GET['id_usuario']))
                    {
                      $id_usuario = $_GET['id_usuario'];
                      $comentarios = $this->model->getAllForUsuario($id_usuario);
                    }
                      else
                          $comentarios = $this->model->getAll();
        $response = new stdClass();
        $response->login = $this->isActive();
        $response->admin = $this->isAdmin();
        $response->status = 200;
        if ($comentarios)
          $response->fecha_ultimo_comentario = $comentarios[0]['fecha_comentario'];
            else
              $response->fecha_ultimo_comentario = 0;
        $response->comentarios = $comentarios;
        return $this->json_response($response, 200);
      }

    public function deleteComentario($params = [])
      {
        if ($this->isActive())
        {
          if ($this->isAdmin())
            {
              $id_comentario = $params[":id"];
              $comentario = $this->model->getComentario($id_comentario);
              if ($comentario)
                {
                  $this->model->borrarComentario($id_comentario);
                  return $this->json_response("Comentario borrado.", 200);
                }
              else
                return $this->json_response(false, 404);
            }
              else
                return $this->Forbidden_response();
        }
          else
            return $this->Unauthorized_response();
      }

  }
?>
