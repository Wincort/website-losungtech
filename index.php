<?php
//Configuración global
require_once 'config/global.php';

//Base para los controladores
require_once 'core/ControladorBase.php';

//Funciones para el controlador frontal
require_once 'core/FuncionesIndex.php';

//Funciones para sesiones
require_once 'core/Sesiones.php';

//$userSession = new Sesiones();

//if(isset($_SESSION['user'])){
    //Cargamos controladores y acciones
    if(isset($_GET["controller"])){
        $controllerObj=cargarControlador($_GET["controller"]);
        lanzarAccion($controllerObj);
    }else{
        $controllerObj=cargarControlador(CONTROLADOR_DEFECTO);
        lanzarAccion($controllerObj);
    }
/*}
else{
    $controllerObj=cargarControlador("Login");
        lanzarAccion($controllerObj);
}*/
?>
