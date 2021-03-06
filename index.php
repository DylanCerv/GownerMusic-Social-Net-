<?php

require_once 'src/models/dataBase.php';

#CONFIG
require_once 'src/config/config.php';
#HELPERS
require_once 'src/config/helps.php';
#AUTOLOAD
require_once 'src/libraries/core/autoload.php';
#AMBIENTE
// require_once 'libraries/core/environment.php';
#LOAD PARA CARGAR LOS CONTROLADORES
// require_once 'libraries/core/loadController.php';
date_default_timezone_set('America/Bogota');


if (!isset($_GET['cm'])){
    if (file_exists("src/controllers/Login.Controller.php")) {
        require_once "src/controllers/Login.Controller.php";
        $controller = new LoginController();
        call_user_func(array($controller, 'login'));//Llamamos un metodo del controlador
    }else {
        require_once "src/controllers/Errors.Controller.php";
        $errors = new ErrorsController();
        $errors->notFound();
    }
}else{
    $controller = $_GET['cm'];
    if (file_exists("src/controllers/$controller.Controller.php")){
        // $controller = ucwords($controller);
        require_once "src/controllers/$controller.Controller.php";
        $controller = ucwords($controller).'Controller';
        $controller = new $controller();
        $action = isset($_GET['m']) ? $_GET['m'] : "Inicio";
        call_user_func(array($controller, $action));
    }else {
        require_once "src/controllers/Errors.Controller.php";
        $errors = new ErrorsController();
        $errors->notFound();
    }

}








