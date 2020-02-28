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

        $secciones=new Seccion($this->adapter);
        $nosotros=$secciones->getById(1);
        $cultura=$secciones->getById(2);
        $soluciones=$secciones->getById(3);
        $outsourcing=$secciones->getById(4);
        $direccion=$secciones->getById(5);
        $fondo=$secciones->getById(6);
        $aliados=$secciones->getById(7);
        //$portada=$secciones->getById(8);

        $this->view("inicio",array(
            "nosotros"=>$nosotros,
            "cultura"=>$cultura,
            "fondo"=>$fondo,
            "soluciones"=>$soluciones,
            "outsourcing"=>$outsourcing,
            "aliados"=>$aliados,
            "direccion"=>$direccion
        ));
    }

    public function Contacto(){
        $this->view("Contacto",array());
    }

    public function GuardarMensaje(){

        $contacto=new Contacto($this->adapter);
        $contacto->setNombre($_POST["nombre"]);
        $contacto->setApellido($_POST["apellido"]);
        $contacto->setEmail($_POST["correo"]);
        $contacto->set_telefono($_POST["telefono"]);
        $contacto->set_mensaje($_POST["mensaje"]);
        $result=$contacto->save();

        if($result){
            echo '{"status":true,"titulo":"Mensaje guardado","mensaje":"El mensaje fue guardado en la base de datos"}';
        }
        else{
            echo '{"status":false,"titulo":"Error!","mensaje":"El mensaje no fue guardado en la base de datos"}';
        }
    }
    
}
?>
