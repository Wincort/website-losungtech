<?php
class AyudaVistas{
    
    public function url($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO){
        $current_file_name = basename($_SERVER['PHP_SELF']);
        $urlString=$current_file_name."?controller=".$controlador."&action=".$accion;
        return $urlString;
    }
    
    //Helpers para las vistas
}
?>
