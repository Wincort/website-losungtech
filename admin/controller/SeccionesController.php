<?php
class SeccionesController extends ControladorBase{
    public $conectar;
	public $adapter;
	
    public function __construct() {
        parent::__construct();
		 
        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }
    
    public function index(){
        $secciones=new Seccion($this->adapter);
        $all_secciones=$secciones->getAll();

        $mensaje=new Contacto($this->adapter);
        $sin_leer=$mensaje->getCountBy("revisado",0);
        $pendiente= $sin_leer[0]->CONTEO;
        $titulo="Configuración de secciones";

        $this->view("secciones",array(
            "all_secciones"=>$all_secciones,
            "sin_leer"=> $pendiente,
            "titulo"=> $titulo,
        ));

    }
    
    public function crear(){
        $seccion=new Seccion($this->adapter);
        $seccion->set_titulo($_POST["titulo"]);
        $seccion->set_imagen($_POST["imagen-hidden"]);
        $seccion->set_contenido($_POST["contenido"]);
        $seccion->set_publicar($_POST["publicar"]);
        $save=$seccion->save();
        $this->redirect("Secciones", "index");
    }

    public function actualizar(){
        if(isset($_GET["id"])){
            $id=(int)$_GET["id"];
            $seccion=new Seccion($this->adapter);
            $seccion->set_titulo($_POST["titulo"]);
            $seccion->set_imagen($_POST["imagen-hidden"]);
            $seccion->set_contenido($_POST["contenido"]);
            $seccion->set_publicar($_POST["publicar"]);
            $seccion->update($id);
        }
        $this->redirect("Secciones", "index");
    }
    
}
?>
