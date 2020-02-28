<?php
class MensajesController extends ControladorBase{
    public $conectar;
	public $adapter;
	
    public function __construct() {
        parent::__construct();
		 
        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }
    
    public function index(){
        
        $mensaje=new Contacto($this->adapter);
        $mensajes=$mensaje->getAll();
        $titulo="Mensajes";
        $sin_leer=$mensaje->getCountBy("revisado",0);
        $pendiente= $sin_leer[0]->CONTEO;

        $this->view("mensajes",array(
            "mensajes"=>$mensajes,
            "titulo"=> $titulo,
            "sin_leer"=> $pendiente,
        ));

    }

    public function actualizar_revisado(){
        $mensaje=new Contacto($this->adapter);
        $mensaje->setId($_REQUEST["id"]);
        $result=$mensaje->correo_revisado();
        $sin_leer=$mensaje->getCountBy("revisado",0);
        $pendiente= $sin_leer[0]->CONTEO;
        $resultado=$result?'{"status":true,"pendiente":'.$pendiente.'}':'{"status":false,"pendiente":'.$pendiente.'}';
        print_r($resultado);
    }

}
?>
