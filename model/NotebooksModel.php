<?php
/**
 *manipular tabla notebook:
   *id_notebook
   *nombre
   *precio
   *caracteristicas
   *id_marca
 */
  class NotebooksModel extends Model

    {

      function getAll()
        {
          $sentencia = $this->db->prepare( "select * from notebook");
          $sentencia->execute();
          $notebooks = $sentencia->fetchAll(PDO::FETCH_ASSOC);
          $notebooksMarca = $this->getNotebooksMarca($notebooks);
          return $this->getImagenesNotebook($notebooksMarca);
        }

      private function getImagenesNotebook($notebooks)
        {
          $notebookImagenes = [];
          foreach ($notebooks as $notebook)
            {
              $imagenes = $this->getImagenesNotebookID($notebook['id_notebook']);
              $notebook['imagenes'] = $imagenes;
              $notebooksImagenes[] = $notebook;
            }
          if (isset($imagenes))
            return $notebooksImagenes;
        }

      public function getImagenesNotebookID($id_notebook)
        {
          $sentencia = $this->db->prepare( "select * from imagen where fk_id_notebook=?");
          $sentencia->execute([$id_notebook]);
          return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        }

      private function getNotebooksMarca($notebooks)
        {
          $notebooksMarca = [];
          $sentencia = $this->db->prepare("select * from marca where id_marca = ?");
          foreach ($notebooks as $notebook)
            {
              $sentencia->execute([$notebook['id_marca']]);
              $marca = $sentencia->fetch(PDO::FETCH_ASSOC);
              $notebook['marca'] = $marca;
              $notebooksMarca[] = $notebook;
            }
          return $notebooksMarca;
        }

      function get($id_notebook)
        {
          $sentencia = $this->db->prepare( "select * from notebook where id_notebook = ? limit 1");
          $sentencia->execute([$id_notebook]);
          $notebook = $sentencia->fetch(PDO::FETCH_ASSOC);
          $imagenes = $this->getImagenesNotebookID($notebook['id_notebook']);
          $notebook['imagenes'] = $imagenes;
          return $notebook;
        }

      function delete($id_notebook)
        {
          $sentencia = $this->db->prepare( "DELETE from notebook where id_notebook=?");
          $sentencia->execute([$id_notebook]);
        }

      function store($id_marca,$nombre,$caracteristicas,$precio)
        {
          $sentencia = $this->db->prepare('INSERT INTO notebook(nombre,caracteristicas,precio,id_marca) VALUES(?,?,?,?)');
          $sentencia->execute([$nombre,$caracteristicas,$precio,$id_marca]);
          $id_notebook = $this->db->lastInsertId();
          return $id_notebook;
        }

      private function subirImagenes($imagenes)
        {
          $rutas = [];
          foreach ($imagenes as $imagen)
            {
              $destino_final = 'images/' . uniqid() . '.png';
              move_uploaded_file($imagen, $destino_final);
              $rutas[]=$destino_final;
            }
          return $rutas;
        }

      function setNombre($id_notebook,$nombre)
        {
          $sentencia = $this->db->prepare( "update notebook set nombre=? where id_notebook=?");
          $sentencia->execute([$nombre,$id_notebook]);
        }

      function setCaracteristicas($id_notebook,$caracteristicas)
        {
          $sentencia = $this->db->prepare( "update notebook set caracteristicas=? where id_notebook=?");
          $sentencia->execute([$caracteristicas,$id_notebook]);
        }

      function setPrecio($id_notebook,$precio)
        {
          $sentencia = $this->db->prepare( "update notebook set precio=? where id_notebook=?");
          $sentencia->execute([$precio,$id_notebook]);
        }

      function setMarca($id_notebook,$id_marca)
        {
          $sentencia = $this->db->prepare( "update notebook set id_marca=? where id_notebook=?");
          $sentencia->execute([$id_marca,$id_notebook]);
        }

      function getAllFromMarca($id_marca)
        {
          $sentencia = $this->db->prepare( "select notebook.* from notebook, marca WHERE notebook.id_marca=marca.id_marca AND marca.id_marca = ?");
          $sentencia->execute([$id_marca]);
          $notebooks = $sentencia->fetchAll(PDO::FETCH_ASSOC);
          $notebooksMarca = $this->getNotebooksMarca($notebooks);
          return $this->getImagenesNotebook($notebooksMarca);
        }

      function getAllInOrder()
        {
          $sentencia = $this->db->prepare( "select * from notebook ORDER BY notebook.id_marca ASC");
          $sentencia->execute();
          $notebooks = $sentencia->fetchAll(PDO::FETCH_ASSOC);
          $notebooksMarca = $this->getNotebooksMarca($notebooks);
          return $this->getImagenesNotebook($notebooksMarca);
        }

      function getEspecificacion($id_notebook)
        {
          $sentencia = $this->db->prepare( "select * from especificacion_notebook where id_notebook = ? limit 1");
          $sentencia->execute([$id_notebook]);
          return $sentencia->fetch(PDO::FETCH_ASSOC);
        }

      function storeEspecificacion($especificaciones)
        {
          $sentencia = $this->db->prepare( "INSERT INTO especificacion_notebook(id_notebook,pantalla,pantalla_dimension,peso,procesador,ram,memoria,sistema_operativo,conectividad,capacidad_bateria,camara,lector_huella,supercarga) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
          $sentencia->execute($especificaciones);
        }

      function getEstadistica($id_notebook)
        {
          $sentencia = $this->db->prepare( "select * from estadisticas_notebook where id_notebook = ? limit 1");
          $sentencia->execute([$id_notebook]);
          return $sentencia->fetch(PDO::FETCH_ASSOC);
        }

      function guardarEstadistica($id_notebook,$rendimiento,$conectividad,$disenio,$pantalla,$camara,$antutu)
        {
          $sentencia = $this->db->prepare("INSERT INTO estadisticas_notebook(id_notebook,rendimiento,conectividad,disenio,pantall,camara,antutu) VALUES(?,?,?,?,?,?,?)");
          $sentencia->execute([$id_notebook,$rendimiento,$conectividad,$disenio,$pantalla,$camara,$antutu]);
          return $sentencia->fetch(PDO::FETCH_ASSOC);
        }
      function deleteEspecificaciones($id_notebook)
        {
          $sentencia = $this->db->prepare( "delete from especificacion_notebook where id_notebook=?");
          $sentencia->execute([$id_notebook]);
        }


    }
?>
