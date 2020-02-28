<?php
class ControladorBase{

    public function __construct() {
		require_once 'Conectar.php';
        require_once 'EntidadBase.php';
        require_once 'ModeloBase.php';
        require_once 'Sesiones.php';
        
        //Incluir todos los modelos
        foreach(glob("model/*.php") as $file){
            require_once $file;
        }
    }
    
    //Plugins y funcionalidades
    
    public function view($vista,$datos){
        foreach ($datos as $id_assoc => $valor) {
            ${$id_assoc}=$valor; 
        }
        
        require_once 'core/AyudaVistas.php';
        $helper=new AyudaVistas();
        $sesion= new Sesiones();
    
        require_once 'view/'.$vista.'View.php';
    }
    
    public function redirect($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO,$params=""){
        header("Location:index.php?controller=".$controlador."&action=".$accion."&".$params);
    }
    
    //Métodos para los controladores

}
?>
