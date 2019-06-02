<?php
    //Librerias incluidas
    require_once 'config/Router.php';
    require_once 'model/Model.php';
    require_once 'view/View.php';
    require_once 'controller/Controller.php';
    require_once 'controller/SecuredController.php';
    require_once 'controller/NavigationController.php';
    require_once 'controller/MarcasController.php';
    require_once 'controller/NotebooksController.php';
    require_once 'controller/LoginController.php';
    require_once 'controller/UsuariosController.php';
    require_once 'controller/ImagenesController.php';
    require_once 'config/db-config.php';

    $router = new Router();
    //(url, verb, controller, method)
    //Control nav ver /notebooks
    $router->AddRoute("", "GET", "NavigationController", "index");
    $router->AddRoute("home", "GET", "NavigationController", "inicio");
    $router->AddRoute("admin", "GET", "NavigationController", "admin");
    $router->AddRoute("notebook/:id", "GET", "NavigationController", "showNotebook");
    $router->AddRoute("notebooks", "GET", "NavigationController", "showNotebooks");
    $router->AddRoute("notebooks/:id", "GET", "NavigationController", "showNotebooksMarca");
    $router->AddRoute("notebooks/ordenados/marca", "GET", "NavigationController", "showNotebooksOrdenadasMarca");
    $router->AddRoute("comentar", "GET", "NavigationController", "showComentar");
    //Control log
    $router->AddRoute("login", "GET", "LoginController", "index");
    $router->AddRoute("logout", "GET", "LoginController", "destroy");
    $router->AddRoute("verificarUsuario", "POST", "LoginController", "verify");
    //Control users
    $router->AddRoute("crearUsuario", "GET", "UsuariosController", "create");
    $router->AddRoute("registrarUsuario", "POST", "UsuariosController", "store");
    $router->AddRoute("adminUsuarios", "GET", "UsuariosController", "index");
    $router->AddRoute("cambiarPermisoAdmin/:id", "GET", "UsuariosController", "changeAdmin");
    $router->AddRoute("eliminarUsuario/:id", "GET", "UsuariosController", "destroy");
    $router->AddRoute("perfilUsuario", "GET", "NavigationController", "user");
    $router->AddRoute("cambiarFotoPerfil", "POST", "UsuariosController", "changeImage");
    //Control adm note
    $router->AddRoute("adminNotebooks", "GET", "NotebooksController", "index");
    $router->AddRoute("eliminarNotebook/:id", "GET", "NotebooksController", "destroy");
    $router->AddRoute("crearNotebook", "GET", "NotebooksController", "create");
    $router->AddRoute("guardarNotebook", "POST", "NotebooksController", "store");
    $router->AddRoute("modificarNotebook/:id", "GET", "NotebooksController", "update");
    $router->AddRoute("setNotebook/:id", "POST", "NotebooksController", "set");
    $router->AddRoute("especificacion/:id", "GET", "NotebooksController", "showEspecificaciones");
    $router->AddRoute("crearEspecificacion/:id", "GET", "NotebooksController", "createEspecificacion");
    $router->AddRoute("guardarEspecificacion/:id", "POST", "NotebooksController", "storeEspecificacion");
    $router->AddRoute("borrarEspecificacion/:id", "GET", "NotebooksController", "destroyEspecificacion");
    //Control img note
    $router->AddRoute("modificarImagenes/:id", "GET", "ImagenesController", "index");
    $router->AddRoute("subirImagenes/:id", "POST", "ImagenesController", "cargarImagenes");
    $router->AddRoute("cambiarImagen/:id", "POST", "ImagenesController", "setImagen");
    $router->AddRoute("eliminarImagen/:id", "GET", "ImagenesController", "deleteImagen");
    //Control de marcas
    $router->AddRoute("adminMarcas", "GET", "MarcasController", "index");
    $router->AddRoute("eliminarMarca/:id", "GET", "MarcasController", "destroy");
    $router->AddRoute("crearMarca", "GET", "MarcasController", "create");
    $router->AddRoute("guardarMarca", "POST", "MarcasController", "store");
    $router->AddRoute("modificarMarca/:id", "GET", "MarcasController", "update");
    $router->AddRoute("setMarca/:id", "POST", "MarcasController", "set");

    $route = $_GET['action'];
    $array = $router->Route($route);
    if(sizeof($array) == 0)
        echo (new NavigationController())->index();
    else
    {
        $controller = $array[0];
        $metodo = $array[1];
        $url_params = $array[2];
        echo (new $controller())->$metodo($url_params);
    }
?>
