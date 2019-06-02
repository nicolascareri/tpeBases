<?php
  class NotebooksView extends View
    {
      function mostrarNotebooks($notebooks)
        {
          $this->smarty->assign('notebooks',$notebooks);
          $this->smarty->assign('encabezado','Listado de Notebooks');
          $this->smarty->display('templates/Admin/notebooks.tpl');
        }

      function mostrarCrearNotebook($marcas)
        {
          $this->assignarForm();
          $this->smarty->assign('marcas',$marcas);
          $this->smarty->assign('id_notebook',-1);
          $this->assignarAcciones("guardarNotebook",'Crear','Crear notebook');
          $this->smarty->display('templates/Admin/formNotebook.tpl');
        }

      private function assignarForm($nombre='',$caracteristicas='',$precio='')
        {
          $this->smarty->assign('nombre', $nombre);
          $this->smarty->assign('caracteristicas', $caracteristicas);
          $this->smarty->assign('precio', $precio);
        }

      private function assignarAcciones($action,$accion,$encabezado)
        {
          $this->smarty->assign('action',$action);
          $this->smarty->assign('accion',$accion);
          $this->smarty->assign('encabezado',$encabezado);
        }

      function errorFormNotebook($error,$nombre, $caracteristicas,$precio,$marcas,$id_marca_notebook,$action,$accion,$encabezado)
        {
          $this->assignarForm($nombre,$caracteristicas,$precio);
          $this->smarty->assign('error', $error);
          $this->smarty->assign('marcas',$marcas);
          $this->smarty->assign('id_marca_notebook',$id_marca_notebook);
          $this->assignarAcciones($action,$accion,$encabezado);
          $this->smarty->display('templates/Admin/formNotebook.tpl');
        }

      function mostrarActualizarNotebook($nombre,$caracteristicas,$precio,$id_notebook,$id_marca,$marcas)
        {
          $this->assignarForm($nombre,$caracteristicas,$precio);
          $this->smarty->assign('marcas',$marcas);
          $this->assignarAcciones("setNotebook/$id_notebook",'Modificar','Modificar notebook');
          $this->smarty->assign('id_marca_notebook',$id_marca);
          $this->smarty->display('templates/Admin/formNotebook.tpl');
        }

      function mostrarEspecificacion($notebook,$especificacion)
        {
          $this->smarty->assign('especificacion',$especificacion);
          $this->smarty->assign('notebook',$notebook);
          $this->smarty->assign('encabezado','Especificacion');
          $this->smarty->display('templates/Admin/especificacion.tpl');
        }

      function mostrarCrearEspecificacion($id_notebook)
        {
          $this->assignarFormEspecificacion();
          $this->smarty->assign('id_notebook',$id_notebook);
          $this->assignarAcciones("guardarEspecificacion/$id_notebook",'Cargar','Crear Especificacion');
          $this->smarty->display('templates/Admin/formEspecificacion.tpl');
        }

      private function assignarFormEspecificacion($especificaciones = [])
        {
          if (empty($especificaciones))
            {
              for ($i = 0; $i <= 11; $i++)
                $especificaciones[$i] = '';
            }
          $this->smarty->assign('pantalla', $especificaciones['0']);
          $this->smarty->assign('pantalla_dimension', $especificaciones['1']);
          $this->smarty->assign('peso', $especificaciones['2']);
          $this->smarty->assign('procesador', $especificaciones['3']);
          $this->smarty->assign('ram', $especificaciones['4']);
          $this->smarty->assign('memoria', $especificaciones['5']);
          $this->smarty->assign('sistema_operativo', $especificaciones['6']);
          $this->smarty->assign('conectividad', $especificaciones['7']);
          $this->smarty->assign('capacidad_bateria', $especificaciones['8']);
          $this->smarty->assign('camara', $especificaciones['9']);
          $this->smarty->assign('lector_huella', $especificaciones['10']);
          $this->smarty->assign('supercarga', $especificaciones['11']);
        }

    }
 ?>
