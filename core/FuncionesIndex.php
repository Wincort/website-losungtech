<?php
//FUNCIONES PARA MANEJAR UN CONTRALADOR Y/O ACCIÓN SOLICITADA

function cargarControlador($controller){
    
    $paramFileController='controller/'.ucwords($controller).'Controller.php';
    
    if(is_file($paramFileController)){
        $controlador=ucwords($controller).'Controller';
    }else{
        $controlador=ucwords(CONTROLADOR_DEFECTO).'Controller';    
    }
    $strFileController='controller/'.$controlador.'.php';
    
    require_once $strFileController;
    $controllerObj=new $controlador();
    return $controllerObj;
}

function cargarAccion($controllerObj,$action){
    $accion=$action;
    $controllerObj->$accion();
}

function lanzarAccion($controllerObj){
    if(isset($_GET["action"]) && method_exists($controllerObj, $_GET["action"])){
        cargarAccion($controllerObj, $_GET["action"]);
    }else{
        cargarAccion($controllerObj, ACCION_DEFECTO);
    }
}

?>
