<?php

  class NavigationView extends View
    {
      function mostrarIndex($marcas,$conectado)
        {
          $this->smarty->assign('marcas',$marcas);
          $this->smarty->assign('hayConexion',$conectado);
          $this->smarty->display('templates/index.tpl');
        }

      function mostrar_inicio($notebooks)
        {
          $this->smarty->assign('notebooks',$notebooks);
          return $this->smarty->display('templates/inicio.tpl');
        }

      function mostrarNotebooks($notebooks)
        {
          $this->smarty->assign('notebooks',$notebooks);
          return $this->smarty->display('templates/notebooks.tpl');
        }

      function mostrarNotebook($notebook,$marca,$especificacion)
        {
          $this->smarty->assign('notebook',$notebook);
          $this->smarty->assign('marca',$marca);
          $this->smarty->assign('especificacion',$especificacion);
          return $this->smarty->display('templates/notebook.tpl');
        }

      function mostrarPanelAdmin()
        {
          $this->smarty->assign('encabezado','Panel de Administrador');
          $this->smarty->display('templates/Admin/index.tpl');
        }

      function mostrarError($error)
        {
          $this->smarty->assign('error',$error);
          return $this->smarty->display('templates/error.tpl');
        }

      function mostrarSugerencias($notebooks)
        {
          $this->smarty->assign('notebooks',$notebooks);
          return $this->smarty->display('templates/buscador.tpl');
        }

      function mostrarDatosUsuario($usuario)
        {
          $this->smarty->assign('usuario',$usuario);
          return $this->smarty->display('templates/usuario.tpl');
        }

      function mostrarComentar($usuario)
        {
          $this->smarty->assign('usuario',$usuario);
          return $this->smarty->display('templates/comentar.tpl');
        }

    }
 ?>
