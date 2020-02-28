<?php
class InicioController extends ControladorBase{
    public $conectar;
	public $adapter;
	
    public function __construct() {
        parent::__construct();
		 
        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }
    
    public function index(){
        $mensaje=new Contacto($this->adapter);
        $sin_leer=$mensaje->getCountBy("revisado",0);
        $pendiente= $sin_leer[0]->CONTEO;

        $this->view("inicio",array(
            "sin_leer"=> $pendiente
        ));

    }
    
}
?>
