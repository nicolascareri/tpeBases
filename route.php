<?php
    //Librerias incluidas
    require_once 'config/Router.php';
    require_once 'model/Model.php';
    require_once 'view/View.php';
    require_once 'controller/Controller.php';
    require_once 'controller/NavigationController.php';


    $router = new Router();
    //(url, verb, controller, method)
    //Control nav ver /notebooks
    $router->AddRoute("", "GET", "NavigationController", "inicio");
    $router->AddRoute("home", "GET", "NavigationController", "inicio");
    $router->AddRoute("fechas", "POST", "NavigationController", "vistaFecha");
    $router->AddRoute("dias", "POST", "NavigationController", "getDiasRestantes");



    $route = $_GET['action'];
    $array = $router->Route($route);
    if(sizeof($array) == 0)
        echo (new NavigationController())->inicio();
    else
    {
        $controller = $array[0];
        $metodo = $array[1];
        $url_params = $array[2];
        echo (new $controller())->$metodo($url_params);
    }
?>
